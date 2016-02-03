<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Matematica
 */

get_header();?>

	<div id="project-my" class="content-block section" data-anchor="project">
		<div class="fp-tableCell">
			<div class="slimScrollDiv">
				<div class="fp-scrollable">
					<div class="proj-content">
						<?php if(get_the_title() == "CROWBAR"):?>
							<div class="project-name"><?php the_title()?></div>
							<div style="background-image: url('<?php bloginfo('template_directory')?>/images/slider.jpg');background-position: 50% 50%;background-size: auto 100%;position: relative;overflow: hidden;">
								<div id="slider">
									<div id="next"></div>
									<div id="prev"></div>
									<img src="<?php bloginfo('template_directory')?>/images/projects/7/201405071.png">
									<img src="<?php bloginfo('template_directory')?>/images/projects/7/201405072.png">
									<img src="<?php bloginfo('template_directory')?>/images/projects/7/201405073.png">
									<img src="<?php bloginfo('template_directory')?>/images/projects/7/201405074.png">
									<img src="<?php bloginfo('template_directory')?>/images/projects/7/201405075.png">
									<img src="<?php bloginfo('template_directory')?>/images/projects/7/201405076.png">
								</div>
							</div>
							<script>
								var slides_count = $("#slider img").length;
								var slides_count_loaded = 0;
								$("#slider img").load(function(){
									slides_count_loaded++;
									if(slides_count == slides_count_loaded){
										var slider = $("#slider").slider();
									}
								});
							</script>
							<div style="clear: both"></div>
							<div class="description">
								<p class="desc-title">
									<?php the_field("description-title")?>
								</p>
								<p class="desc-text">
									<?php the_field("description-text")?>
								</p>
							</div>
						<?php elseif(get_the_title() == "FOTOSALT"):?>
							<div class="project-name"><?php the_title()?></div>
							<div class="project-patern" style="width: 100%; background-image: url('<?php bloginfo('template_directory')?>/images/projects/23/pattern2.png'); background-attachment: fixed; background-position: -101.6px -359.6px;">
								<div style="width: 100%;max-width: 1262px;margin: 0 auto;padding-top: 144px;padding-bottom: 144px">
									<img src="<?php bloginfo('template_directory')?>/images/projects/23/20140508matematica_com_ua_-_fotosalt_logo.jpg" style="width: 100%;">
									<img src="<?php bloginfo('template_directory')?>/images/projects/23/20140508matematica_com_ua_-_fotosalt_style.jpg" style="width: 100%;">
									<img src="<?php bloginfo('template_directory')?>/images/projects/23/20140508matematica_com_ua_-_fotosalt_style_2.jpg" style="width: 100%;">
								</div>
							</div>
							<style>
								.project-patern{
									-webkit-transition: none;
									-moz-transition: none;
									-ms-transition: none;
									-o-transition: none;
									transition: none;
								}
							</style>
							<script>
								$('#project-my').mousemove(function(e){
									var x = -(e.pageX + this.offsetLeft) / 10;
									var y = -(e.pageY + this.offsetTop) / 10;
									$(".project-patern").css('background-position', x + 'px ' + y + 'px');
								});
							</script>
						<?php else:?>
							<div class="project-name"><?php the_title()?></div>
							<?php if(get_field("project-image")):?>
						<img src="<?php wp_get_attachment_image_url(the_field("project-image"));?>" style="width: 100%">
							<?php endif;?>
							<div style="clear: both"></div>
							<?php if($post->post_content):?>
							<div class="description">
									<p class="desc-title">
										<?php echo $post->post_title;?>
									</p>
									<p class="desc-text">
										<?php echo $post->post_content;?>
									</p>
							</div>
							<div style="clear: both"></div>
							<?php endif;?>
								<?php if(get_field("project-link")):?>
							<a href="http://<?php the_field("project-link")?>" class="project-link" target="_blank">
								<div><?php the_field("project-link")?></div>
							</a>
							<?php endif;?>
						<?php endif;?>
					</div>
			</div>
		</div>
	</div>

<?php
get_footer();
