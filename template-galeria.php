<!-- Template Name: Galeria -->

<?php get_header(); ?>

	<div class="container" role="main">
		<div class="row">
		<span style="float: right;"><?php echo do_shortcode('[flexy_breadcrumb] ') ?></span>
			<article class="row conteudo col-sm-10 col-sm-offset-1">
				<div class="col-md-12">
          <h3><?php the_title() ?></h3>
          <?php $image = [1,2,3,4,5,6,7]; ?>

          <?php foreach ($image as $images) : ?>

            <li class="list-item col-sm-4">
              <img class="list-img" src="<?php bloginfo('template_url'); ?>/dist/imagens/galeria/img-galeria<?php echo $images ?>.jpg" alt="imagem-galeria">
            </li>

          <?php endforeach; ?>

				</div>
			</article>
		</div>
	</div>

<?php get_footer(); ?>