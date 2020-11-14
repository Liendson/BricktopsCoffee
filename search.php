<?php 
	if(isset($_GET['s'])) {
    $pesquisa = $_GET['s'];
	}
?>
<?php get_header(); ?>
	<div class="container" role="main">
		<div class="row">
			<section class="conteudo col-xs-12 col-sm-10 col-sm-offset-1">
				<h2>Pesquisa</h2>
				<h3>Resultado da pesquisa por "<?php echo $pesquisa; ?>"</h3>
				
				<?php global $wp_query; ?>
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<article class="item-busca clearfix">
					<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
						<?php if ( has_post_thumbnail() ) { ?>
							<figure class="img-busca pull-left">
								<?php the_post_thumbnail('thumb-busca', array('class' => 'img-responsive')); ?>
							</figure>
						<?php } ?>
						<h5><?php the_title() ?></h5>
						<?php the_excerpt() ?>
					</a>
				</article>
				<?php endwhile; else:?>
				<h5>Nenhum resultado encontrado.</h5>
				<?php endif; ?>

				<div class="col-xs-12 text-center">
					<?php wp_pagenavi(); ?>
				</div>
			</section>
		</div>
	</div>

<?php get_footer(); ?>