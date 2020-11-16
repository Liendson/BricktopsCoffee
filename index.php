<?php get_header(); ?>

<body>

  <main>

    <section class="bricktops-slider">
      <div class="row">
        <div id="bricktops-carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#bricktops-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bricktops-carousel" data-slide-to="1"></li>
            <li data-target="#bricktops-carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/dist/imagens/slider/foto-slider-1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/dist/imagens/slider/foto-slider-2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/dist/imagens/slider/foto-slider-3.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#bricktops-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#bricktops-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <section class="bricktops-icones">
      <div class="container">
        <div class="row counters">

          <div class="col-lg-3 col-xs-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clientes</p>
          </div>

          <div class="col-lg-3 col-xs-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projetos</p>
          </div>

          <div class="col-lg-3 col-xs-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Suporte</p>
          </div>

          <div class="col-lg-3 col-xs-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Funcionarios</p>
          </div>
  
        </div>

      </div>
    </section>

    <section class="bricktops-principais-cafes">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Solicite um Orçamento sem Compromisso!</h3>
            <p class="cta-text"> Preencha nosso formulário e solicite um orçamento para que um de nossos vendedores possa atender você!</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php get_permalink(); ?>/redetex/contato">Solicitar Orçamento!</a>
          </div>
        </div>

      </div>
    </section>

    <section class="bricktops-cafes-especiais">

      <header class="section-header">
        <h3>Produtos</h3>
      </header>
      
      <div class="conteudo">
        <div class="container">
          <div class="box row">

            <div class="col-md-3">
              <div class="card">
                <div class="face face1">
                  <div class="content">
                    <img src="<?php bloginfo('template_url'); ?>/dist/imagens/rede-de-protecao.png">
                  </div>
                </div>
                <div class="face face2">
                  <div class="content">
                    <h4>Redes de Proteção</h4>
                    <p>Ideal para proteção, produto derivado do polietileno virgem, testado e tratado em laboratório para resistir ao clima.</p>
                    <a href="<?php get_permalink(); ?>/redetex/servicos/redes-de-protecao" class="btn">Veja as fotos</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="face face1">
                  <div class="content">
                    <img src="<?php bloginfo('template_url'); ?>/dist/imagens/cortinas.jpg">
                  </div>
                </div>
                <div class="face face2">
                  <div class="content">
                    <h4>Persianas e Cortinas</h4>
                    <p>Lindas cortinas e persianas, que oferecem grande conforto e privacidade, além de sua decoração.</p>
                    <a href="<?php get_permalink(); ?>/redetex/servicos/persianas-e-cortinas" class="btn">Veja as fotos</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="face face1">
                  <div class="content">
                    <img src="<?php bloginfo('template_url'); ?>/dist/imagens/tela-mosquiteira.jpg">
                  </div>
                </div>
                <div class="face face2">
                  <div class="content">
                    <h4>Tela Mosquiteira</h4>
                    <p>Permite total visibilidade e circulação de ar, fácil de limpar e não cria mofo, adaptável a vários modelos de ambientes</p>
                    <a href="<?php get_permalink(); ?>/redetex/servicos/tela-mosquiteira" class="btn">Veja as fotos</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="box row">

            <div class="col-md-3">
              <div class="card">
                <div class="face face1">
                  <div class="content">
                    <img src="<?php bloginfo('template_url'); ?>/dist/imagens/varal.jpg">
                  </div>
                </div>
                <div class="face face2">
                  <div class="content">
                    <h4>Varais</h4>
                    <p>Instalação e manutenção de varal suspenso para apartamentos e casas.</p>
                    <a href="<?php get_permalink(); ?>/redetex/servicos/redes-de-protecao" class="btn">Veja as fotos</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="face face1">
                  <div class="content">
                    <img src="<?php bloginfo('template_url'); ?>/dist/imagens/pelicula.jpg">
                  </div>
                </div>
                <div class="face face2">
                  <div class="content">
                    <h4>Películas Fumê</h4>
                    <p>Películas que proporcionam segurança e privacidade à sua casa, testadas e aprovadas por nossos clientes.</p>
                    <a href="<?php get_permalink(); ?>/redetex/servicos/persianas-e-cortinas" class="btn">Veja as fotos</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="face face1">
                  <div class="content">
                    <img src="<?php bloginfo('template_url'); ?>/dist/imagens/box-e-espelhos.jpg">
                  </div>
                </div>
                <div class="face face2">
                  <div class="content">
                    <h4>Box e Espelhos</h4>
                    <p>É ideal a escolha do box para banheiro, uma vez que também tem função estética na residência.</p>
                    <a href="<?php get_permalink(); ?>/redetex/servicos/tela-mosquiteira" class="btn">Veja as fotos</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </section>

    <section class="bricktops-notas-sensoriais">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Solicite um Orçamento sem Compromisso!</h3>
            <p class="cta-text"> Preencha nosso formulário e solicite um orçamento para que um de nossos vendedores possa atender você!</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php get_permalink(); ?>/redetex/contato">Solicitar Orçamento!</a>
          </div>
        </div>

      </div>
    </section>

    <section class="bricktops-guia-metodos">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Solicite um Orçamento sem Compromisso!</h3>
            <p class="cta-text"> Preencha nosso formulário e solicite um orçamento para que um de nossos vendedores possa atender você!</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php get_permalink(); ?>/redetex/contato">Solicitar Orçamento!</a>
          </div>
        </div>

      </div>
    </section>
  </main>

<?php get_footer(); ?>
