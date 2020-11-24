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

    <section class="bricktops-icones" style="padding-top: 3%">

      <div class="container">
        <div class="row">

          <div class="col-md-4 text-center">
            <img src="<?php bloginfo('template_url'); ?>/dist/imagens/icones/bsca-roastery.icon.png">
            <h4 class="bricktops-h4">BSCA Roastery Member</h4>
            <p>Qualidade e consistência</p>
          </div>

          <div class="col-md-4 text-center">
            <img src="<?php bloginfo('template_url'); ?>/dist/imagens/icones/sustentabilidade.icon.png">
            <h4 class="bricktops-h4">Sustentabilidade</h4>
            <p>Origem, dignidade e transparência</p>
          </div>

          <div class="col-md-4 text-center">
            <img src="<?php bloginfo('template_url'); ?>/dist/imagens/icones/experiencia.icon.png">
            <h4 class="bricktops-h4">Experiência</h4>
            <p>Em cada xícara uma nova experiência</p>
          </div>

        </div>
      </div>

    </section>

    <section class="bricktops-principais-cafes">

      <div class="col-md-12 text-center principais-escolhas">
        <h4>Nossas principais escolhas!</h4>
      </div>

      <div class="conteudo">
        <div class="container">
          <div class="box row">

            <div class="col-md-4 pm-10">
              <div class="card">
                <div class="face face1">
                  <div class="content text-center">
                    <img src="<?php bloginfo('template_url'); ?>/dist/imagens/nina.png">
                    <h5>Espresso</h5>
                    <h3>Café Nina</h3>
                    <h6>Moído • Espresso</h6>
                    <p>R$24.25</p>
                    <br>
                  </div>
                </div>
                <div class="face face2">
                  <div class="content">
                    <a href="">
                      <h4>Comprar</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 pm-10">
              <div class="card">
                <div class="face face1">
                  <div class="content text-center">
                    <img src="<?php bloginfo('template_url'); ?>/dist/imagens/ladyday.png">
                    <h5>Espresso</h5>
                    <h3>Café LadyDay</h3>
                    <h6>Moído • Espresso</h6>
                    <p>R$25.00</p>
                    <br>
                  </div>
                </div>
                <div class="face face2">
                  <div class="content">
                    <a href="">
                      <h4>Comprar</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 pm-10">
              <div class="card">
                <div class="face face1">
                  <div class="content text-center">
                    <img src="<?php bloginfo('template_url'); ?>/dist/imagens/maestro.png">
                    <h5>Espresso</h5>
                    <h3>Café Maestro</h3>
                    <h6>Espresso • Moído</h6>
                    <p>R$29.00</p>
                    <br>
                  </div>
                </div>
                <div class="face face2">
                  <div class="content">
                    <a href="">
                      <h4>Comprar</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 text-center principais-escolhas">
              <button class="btn btn-danger">Ver todos os cafés</button>
            </div>
          </div>

        </div>
      </div>

    </section>

    <section class="bricktops-cafes-especiais">

      <div class="container-fluid" style="width: 95% !important">
        <div class="row">

          <div class="col-md-6 text-center">
            <img class="bricktops-principais-escolhas-img" src="<?php bloginfo('template_url'); ?>/dist/imagens/cafes-especiais/teste1.png">
            <h3 class="bricktops-h4">Assine Agora</h3>
          </div>

          <div class="col-md-6 text-center">
            <img class="bricktops-principais-escolhas-img" src="<?php bloginfo('template_url'); ?>/dist/imagens/cafes-especiais/teste2.png">
            <h3 class="bricktops-h4">Conheça nossos tipos de assinaturas</h3>
          </div>

        </div>
      </div>

    </section>

    <section class="bricktops-icones">

      <div class="container">
        <div class="col-md-12 text-center principais-escolhas">
          <h4>Selecione seu café por notas sensoriais</h4>
        </div>

        <div class="row">
          <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_url'); ?>/dist/imagens/icones/fruity.icon.png">
            <h4 class="bricktops-h4">Frutado</h4>
          </div>

          <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_url'); ?>/dist/imagens/icones/floral.icon.png">
            <h4 class="bricktops-h4">Floral</h4>
          </div>

          <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_url'); ?>/dist/imagens/icones/chocolate.icon.png">
            <h4 class="bricktops-h4">Chocolate</h4>
          </div>
          
          <div class="col-md-3 text-center">
            <img src="<?php bloginfo('template_url'); ?>/dist/imagens/icones/nutty.icon.png">
            <h4 class="bricktops-h4">Nuts</h4>
          </div>
        </div>
      </div>

    </section>

    <section class="bricktops-guia-metodos">

      <div class="container-fluid" style="width: 95% !important; padding-top: 3%; padding-bottom: 3%">
        <div class="row">
          <div class="text-center">
            <div class="pull-left" style="width: 30%; height: 100%; background-color: #fff">
              <div style="padding-top: 18em; padding-left: 1em; padding-right: 1em">
                <h3>HOME BREW GUIDES</h3>
                <h6>Brewing at home? These are our favourite ways to make the perfect cup of specialty coffee.</h6>
                <br>
                <button class="btn btn-danger">Ler Mais</button>
              </div>
            </div>
            <div class="pull-right" style="width: 70%">
              <img class="bricktops-principais-escolhas-img img-teste" src="<?php bloginfo('template_url'); ?>/dist/imagens/guia-metodos/GUIA-DE-METODOS-(AEROPRESS).png">
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid" style="width: 95% !important; padding-top: 3%; padding-bottom: 3%">
        <div class="row">
          <div class="text-center">
            <div class="pull-left" style="width: 70%">
              <img class="bricktops-principais-escolhas-img img-teste" src="<?php bloginfo('template_url'); ?>/dist/imagens/guia-metodos/GUIA-DE-METODOS-(ARAME).png">
            </div>
            <div class="pull-right" style="width: 30%; height: 100%; background-color: #fff">
              <div style="padding-top: 18em; padding-left: 1em; padding-right: 1em">
                <h3>HOME BREW GUIDES</h3>
                <h6>Brewing at home? These are our favourite ways to make the perfect cup of specialty coffee.</h6>
                <br>
                <button class="btn btn-danger">Ler Mais</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

  </main>

<?php get_footer(); ?>
