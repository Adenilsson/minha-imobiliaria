  <!-- Residence start  -->
  <section id="residence">
    <div class="container  my-5 py-5">
      <h2 class="text-capitalize m-0 py-lg-5">{{$title}}</h2>

      <div class="swiper-button-next residence-swiper-next  residence-arrow"></div>
      <div class="swiper-button-prev residence-swiper-prev residence-arrow"></div>
    @foreach ($imoveis as $i)
    <div class="swiper-slide">

    @endforeach
      <div class="swiper residence-swiper">
        <div class="swiper-wrapper">
            @foreach ($imoveis as $i)
            <div class="swiper-slide">
                <div class="card">
                    <a href="{{ route('detalhe-residence',['id'=>$i->id]) }}"><img src="{{ asset('storage/'.$i->imagens->first()->path)}}" class="card-img-top" alt="image"></a>
                    <div class="card-body p-0">
                        <a href="index.html">
                            <h5 class="card-title pt-4">{{$i->pretencao["descricao"]}}</h5>
                        </a>
                        <p class="card-text">Cidade: {{ $i->endereco["cidade"]->nome }}, {{ $i->endereco->cidade->estado->sigla }}, {{ $i->endereco->cidade->estado->pais->nome }}</p>
                        <p class="card-text">{{ $i->descricao }}</p>
                        <div class="card-text">
                            <ul class="d-flex">
                                <li class="residence-list"> <img src="{{ asset('storage/images/bed.png')}}" alt="image"> {{ $i->quartos }} bedroom</li>
                                <li class="residence-list"> <img src="{{ asset('storage/images/bath.png')}}" alt="image"> {{ $i->banheiros }} bath</li>
                                <li class="residence-list"> <img src="{{ asset('storage/images/square.png')}}" alt="image"> {{ $i->area_construida }} m&sup2</li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
            @endforeach
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="{{ asset('storage/images/item16.png')}}" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="{{ asset('storage/images/bed.png')}}" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="{{ asset('storage/images/bath.png')}}" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="{{ asset('storage/images/square.png')}}" alt="image"> 1203 m&sup2</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="{{ asset('storage/images/item17.png')}}" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="{{ asset('storage/images/bed.png')}}" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="{{ asset('storage/images/bath.png')}}" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="{{ asset('storage/images/square.png')}}" alt="image"> 1203 m&sup2</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="{{ asset('storage/images/item1.jpg') }}" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="{{ asset('storage/images/bed.png')}}" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="{{ asset('storage/images/bath.png')}}" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="{{ asset('storage/images/square.png')}}" alt="image"> 1203 m&sup2</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="{{ asset('storage/images/item2.jpg')}}" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="{{ asset('storage/images/bed.png')}}" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="{{ asset('storage/images/bath.png')}}" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="{{ asset('storage/images/square.png')}}" alt="image"> 1203 m&sup2</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="{{ asset('storage/images/item3.jpg')}}" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="{{ asset('storage/images/bed.png')}}" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="{{ asset('storage/images/bath.png')}}" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="{{ asset('storage/images/square.png')}}" alt="image"> 1203 m&sup2</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="{{ asset('storage/images/item4.jpg')}}" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="{{ asset('storage/images/bed.png')}}" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="{{ asset('storage/images/bath.png')}}" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="{{ asset('storage/images/square.png')}}" alt="image"> 1203 m&sup2</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>

        </div>




      </div>

      <div class="residence-btn">
        <a href="index.html" class="btn btn-primary btn-lg my-5">View All Properties</a>
      </div>

    </div>
  </section>
