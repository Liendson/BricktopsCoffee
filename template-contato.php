<!-- Template Name: Contato -->

<?php get_header(); ?>

	<div class="container" role="main">
		<div class="row">
			<span style="float: right;"><?php echo do_shortcode('[flexy_breadcrumb] ') ?></span>
			<article class="row conteudo col-sm-10 col-sm-offset-1">
				<div class="col-md-12">
				<?php the_post(); ?>
				<h3><?php the_title() ?></h3>
				<figure style="padding-bottom: 40px;">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail('img-conteudo', array('class' => 'img-responsive imgwidth')); ?>
						<hr style="color: #f7ad10">
					<?php endif; ?>
				</figure>
				<?php the_content();?>
				</div>
			</article>
		</div>
	</div>

<?php get_footer(); ?>