<?php

namespace App\Livewire\Imagem;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Imagem_imovel;
use App\Models\Imovel;
use App\Models\Endereco;
use Intervention\Image\ImageManagerStatic as Imagem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Proprietario;

class ImagemImovel extends Component
{
    use WithFileUploads;

    public $imagem1, $imagem2, $imagem3, $imagem4, $imagem5;
    public $capa1, $capa2, $capa3, $capa4, $capa5;
    public $endereco; // Declare a propriedade pública

    public function mount()
    {

        $this->checkSession('dados_imovel', 'cadastroImovel#cad');
        $this->checkSession('dados_endereco', 'cadastroEndereco/imovel#cad');
        $this->checkSession('endereco_proprietario', 'cadastroEndereco/proprietario#cad');
        $this->checkSession('dados_proprietario', 'cadastroProprietario#cad');

    }

    public function checkSession($sessionKey, $route)
    {
        if (!session()->has($sessionKey)) {
            return redirect()->intended($route);
        }
    }

    public function save()
    {
        DB::beginTransaction();

        $this->validate([
            'imagem1' => 'required|image|max:26000', // 25MB Max
            'imagem2' => 'required|image|max:26000', // 25MB Max
            'imagem3' => 'required|image|max:26000', // 25MB Max
            'imagem4' => 'required|image|max:26000', // 25MB Max
            'imagem5' => 'required|image|max:26000', // 25MB Max
        ]);

        $this->imagem1 = $this->addLogoToImage($this->imagem1);
        $this->imagem2 = $this->addLogoToImage($this->imagem2);
        $this->imagem3 = $this->addLogoToImage($this->imagem3);
        $this->imagem4 = $this->addLogoToImage($this->imagem4);
        $this->imagem5 = $this->addLogoToImage($this->imagem5);

        try {
            $di = session()->get('dados_imovel');
            $ep = session()->get('endereco_proprietario');
            $dp = session()->get('dados_proprietario');
            $im = session()->get('dados_endereco');

            if (is_null($di) || is_null($ep) || is_null($dp) || is_null($im)) {
                throw new \Exception("Dados de sessão faltando.");
            }

            $endereco_proprietario = Endereco::create($ep);
            $proprietario = Proprietario::create(array_merge($dp, ['tb_endereco_id' => $endereco_proprietario->id]));
            $this->endereco = Endereco::create($im);
            $imovel = Imovel::create(array_merge($di, [
                'tb_users_id' => $di['user_id'],
                'tb_endereco_id' => $this->endereco->id,
                'tb_proprietario_id' => $proprietario->id,
            ]));

            $this->saveImages($imovel->id);

            DB::commit();

            $this->reset('imagem1', 'imagem2', 'imagem3', 'imagem4', 'imagem5');
            $this->clearSession();
            $this->clearTemporaryFiles();

            session()->flash('message', 'Imagens enviadas com sucesso!');
            return redirect()->intended('/#home');
        } catch (\Exception $e) {
            DB::rollBack();
            $this->deleteImages();
            session()->flash('error', $e->getMessage());
            dd("ERRO ");
            return redirect()->intended('cadastroImagemImovel#cad');
        }
    }




    public function saveImages($imovelId)
    {
        $imagens = [[ $this->imagem1, $this->imagem2, $this->imagem3, $this->imagem4, $this->imagem5],
                    [$this->capa1, $this->capa2, $this->capa3, $this->capa4, $this->capa5]];
        for ($i = 0; $i < count($imagens[0]); $i++) {
            $imagem = $imagens[0][$i];
            $capa = $imagens[1][$i] != 1 ? 0 : 1;
            if ($imagem) {
                Imagem_imovel::create([
                    'tb_imovel_id' => $imovelId,
                    'path' => $imagem,
                    'capa' => $capa,
                ]);
            }
        }
    }

    public function deleteImages()
    {
        Storage::delete('public/' . $this->imagem1);
        Storage::delete('public/' . $this->imagem2);
        Storage::delete('public/' . $this->imagem3);
        Storage::delete('public/' . $this->imagem4);
        Storage::delete('public/' . $this->imagem5);
    }

    public function clearSession()
    {
        session()->forget(['dados_endereco', 'endereco_proprietario', 'dados_proprietario', 'dados_imovel']);
    }

    public function addLogoToImage($image)
    {
        $img = Imagem::make($image->getRealPath());
        $logo = Imagem::make(storage_path('app/public/logo/logo.png'));

        $imgWidth = $img->width();
        $imgHeight = $img->height();
        $logoWidth = $imgWidth * 0.4;
        $logoHeight = $logo->height() * ($logoWidth / $logo->width());

        $logo->resize($logoWidth, $logoHeight);
        $x = round(($imgWidth - $logo->width()) / 2);
        $y = round(($imgHeight - $logo->height()) / 2);

        $img->insert($logo, 'top-left', $x, $y);

        $path = 'images/' . uniqid() . '.png';
        Storage::disk('public')->put($path, (string) $img->encode());

        return $path;
    }

    public function clearTemporaryFiles()
    {
        $tempPath = storage_path('app/livewire-tmp');
        File::cleanDirectory($tempPath);
    }

    public function render()
    {

            return view('livewire.imagem.imagem-imovel');

    }
}
