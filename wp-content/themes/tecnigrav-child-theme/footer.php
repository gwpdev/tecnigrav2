
<div class="clear"></div>
<div class="map-frame"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.4124041059613!2d-46.5675557!3d-23.696962499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce43c7650c4e03%3A0x6d569a24fee2cb8e!2sAv.+%C3%81lvaro+Guimar%C3%A3es%2C+724+-+Vila+Planalto%2C+S%C3%A3o+Bernardo+do+Campo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1438634666325" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="map-content">NADA AQUI JOVEM <br /> </div></div>
	<?php 
	$disable_top_link = get_theme_mod('disable_top_link');
	if(!$disable_top_link): ?>
		<a href="#top" class="go-top"><?php esc_attr_e('top', 'converio');?></a>
	<?php endif; ?>


	<?php
	$fbg_color = get_theme_mod('footer_bg_color');
    if ($fbg_color) $style = 'style="background-color: ' . esc_attr($fbg_color) . '"';
    else $style = '';
	?>

	<footer <?php if($style) echo $style; ?> >
		<?php if(is_active_sidebar('footer-widget-area')) : ?>
		<section class="widgets columns">
			<?php 
			$column_count = get_theme_mod('column_count');
			if (empty($column_count)) $column_count = 4;
			$col_class = 'col' . $column_count;
			?>
			<?php
			if (!dynamic_sidebar('footer-widget-area') ) : ?><?php endif; ?>		
		</section>
		<?php endif; ?>	
		<section class="bottom">
			
			<?php $show_footer_content = get_theme_mod('show_footer_content');
			if($show_footer_content) {
				$footer_content = get_theme_mod('footer_content');
				echo converio_sanitize_text_decode($footer_content);
			} else { ?>
				<p><?php esc_attr_e('2013-2014', 'converio');?> <?php if( is_front_page() & !is_paged() ) { ?><a href="<?php echo esc_url('http://thememotive.com/converio/');?>"><?php esc_attr_e('Converio', 'converio');?></a><?php } else { esc_attr_e('Converio', 'converio'); } ?> <?php esc_attr_e('WordPress Theme by', 'converio');?> <a href="<?php echo esc_url('http://thememotive.com/'); ?>"><?php esc_attr_e('ThemeMotive.', 'converio');?></a><?php esc_attr_e(' | All rights reserved.', 'converio');?></p>
			<?php } ?>
			<nav class="social social-light social-colored">
				<ul>
					<?php $social_links = converio_get_social_links(); 
					foreach($social_links as $link) : ?>
					<li><a href="<?php echo esc_url($link->url); ?>" class="<?php echo esc_attr($link->class) ?>" title="<?php echo esc_attr($link->name) ?>" target="_blank"><?php echo esc_attr($link->name) ?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav>
		</section>
	</footer>
</div>

<?php wp_footer(); ?>

<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/ie.js"></script>
<![endif]-->
</body>
</html>