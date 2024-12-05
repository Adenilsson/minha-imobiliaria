<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            ['nome' => 'Acre', 'sigla' => 'AC'],
            ['nome' => 'Alagoas', 'sigla' => 'AL'],
            ['nome' => 'Amapá', 'sigla' => 'AP'],
            ['nome' => 'Amazonas', 'sigla' => 'AM'],
            ['nome' => 'Bahia', 'sigla' => 'BA'],
            ['nome' => 'Ceará', 'sigla' => 'CE'],
            ['nome' => 'Distrito Federal', 'sigla' => 'DF'],
            ['nome' => 'Espírito Santo', 'sigla' => 'ES'],
            ['nome' => 'Goiás', 'sigla' => 'GO'],
            ['nome' => 'Maranhão', 'sigla' => 'MA'],
            ['nome' => 'Mato Grosso', 'sigla' => 'MT'],
            ['nome' => 'Mato Grosso do Sul', 'sigla' => 'MS'],
            ['nome' => 'Minas Gerais', 'sigla' => 'MG'],
            ['nome' => 'Pará', 'sigla' => 'PA'],
            ['nome' => 'Paraíba', 'sigla' => 'PB'],
            ['nome' => 'Paraná', 'sigla' => 'PR'],
            ['nome' => 'Pernambuco', 'sigla' => 'PE'],
            ['nome' => 'Piauí', 'sigla' => 'PI'],
            ['nome' => 'Rio de Janeiro', 'sigla' => 'RJ'],
            ['nome' => 'Rio Grande do Norte', 'sigla' => 'RN'],
            ['nome' => 'Rio Grande do Sul', 'sigla' => 'RS'],
            ['nome' => 'Rondônia', 'sigla' => 'RO'],
            ['nome' => 'Roraima', 'sigla' => 'RR'],
            ['nome' => 'Santa Catarina', 'sigla' => 'SC'],
            ['nome' => 'São Paulo', 'sigla' => 'SP'],
            ['nome' => 'Sergipe', 'sigla' => 'SE'],
            ['nome' => 'Tocantins', 'sigla' => 'TO'],
        ];

        foreach ($estados as $estado) {
            DB::table('tb_estados')->insert([
                'nome' => $estado['nome'],
                'sigla' => $estado['sigla'],
                'tb_pais_id'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ]);
        }
    }
}
