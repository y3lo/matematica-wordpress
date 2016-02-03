<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Matematica
 */

get_header();
get_sidebar();?>
	<div class="content" id="fullpage">
		<div id="home-my" class="content-block section">
			<div class="content-contener">
				<div class="text">
					<?php _e("У самой сложной задачи всегда<br>есть простое решение","matematica"); ?>
				</div>
				<div class="title">
					<?php _e("Математика","matematica");?>
				</div>
			</div>
		</div>
		<div id="ideas-my" class="content-block section">
			<div class="content-contener">
				<div class="text">
					<?php $categories = get_terms('category', 'orderby=name&hide_empty=0&exclude=7&');
					foreach ($categories as $cat): ?>
						<div>
							<img src="<?php bloginfo('template_directory')?>/images/<?php echo $cat->slug;?>.svg" alt=""/>
							<br>
							<span><?php _e($cat->name,"matematica")?></span>
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
		<div id="experience-my" class="content-block section">
			<div class="content-contener">
				<div class="title">
					Опыт
				</div>
				<div id="DateCountdown" data-date="2010-11-01 00:00:00">
					<nobr>

						<div id="clock"></div>

						<script type="text/javascript">
							//var clock = jQuery('#clock').FlipClock(<?=strtotime(date('Y-m-d H:i:s'))-strtotime('2010-11-01 00:00:00')?>, {
							//    clockFace: 'DailyCounter'});
						</script>
						<?php
						$data = get_field("create-date");
						$get_date = explode("/",$data);
						$years = date("Y")-$get_date[0];
						$days = date('d')-$get_date[1];
						$months = date("m")-$get_date[2];
						if($months<0){
							$months += 12;
							$years--;
						}
						?>
						<div class="years">
							<div class="time-text" id="years"><?=$years?><?php echo $get_date[0]?></div>
							<span><?php _e("год","matematica")?></span>
						</div>
						<div class="months">
							<div class="time-text" id="months"><?=$months?></div>
							<span><?php _e("месяц","matematica")?></span>
						</div>
						<div class="days">
							<div class="time-text" id="days"><?=$days?></div>
							<span><?php _e("день","matematica")?></span>
						</div>
						<div class="hours">
							<div class="time-text" id="hours"><?=date('H')?></div>
							<span><?php _e("час","matematica")?></span></div>
						<div class="minutes">
							<div class="time-text" id="minutes"><?=date('i')?></div>
							<span><?php _e("минута","matematica")?></span>
						</div>
						<div class="seconds">
							<div class="time-text" id="seconds"><?=date('s')?></div>
							<span><?php _e("секунда","matematica")?></span>
						</div>

					</nobr>
				</div>
			</div>
		</div>

		<div id="projects-my" class="content-block section">
			<div class="progect-page">
				<div style="clear: both"></div>


				<!-- Portfolio Filter -->
				<div class="filters"><span>Ф И Л Ь Т Р Ы</span></div>
				<ul id="portfolio-filter" class="list-inline">
					<li class=""><a href="#" data-filter="*"><?php _e("Все","matematica");?></a></li>
					<?php $all_cat = get_categories();?>
					<?php foreach($all_cat as $cat_data):?>
						<li class=""><a href="#" data-filter="<?php echo $cat_data->slug;?>"><?php _e($cat_data->name,"matematica")?></a></li>
					<?php endforeach;?>
				</ul>

				<!-- Project List -->
				<div style="clear: both"></div>
				<div style="clear: both"></div>
				<ul id="portfolio-list" class="project-list">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php $category = get_the_category();?>
						<li class="<?php foreach($category as $cat){echo $cat->slug." ";}?>">
							<a href="<?php the_permalink()?>">
								<img src="<?php the_post_thumbnail_url();?>" alt="">
								<div class="portfolio-item-content">
									<div class="wrapper">
										<div class="inner">
											<div class="header"><?php the_title();?></div>
											<div class="seperator"></div>
											<p class="body">
												<?php foreach($category as $cat):?>
													<?php echo $cat->name;?>
												<?php endforeach;?>
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
					<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>
		<div id="contacts-my" class="content-block section">
			<div id="map"></div>
			<div class="overflow">
				<div class="content-contener">
					<div class="title" style="color: #fff;text-align: left;"><?bloginfo("name")?></div>
					<div class="text" style="color: #fff;text-align: left;">
						<?php _e("Украина<br>г. Запорожье, 69002<br>ул. Красногвардейская, 40 оф 507<br>info@matematica.com.ua<br><br><a href=\"tel:+380933443326\">+38 093 344 33 26</a>","matematica"); ?>
					</div>
				</div>
			</div>
			<a href="#" onclick="$(this).toggleClass('rotate');$('.overflow').toggleClass('hidden');if($('.overflow').hasClass('hidden')){$.fn.fullpage.setAllowScrolling(false);}else{$.fn.fullpage.setAllowScrolling(true);};return false;" style="webkit-transition: all 0.5s ease;-moz-transition: all 0.5s ease;-ms-transition: all 0.5s ease;-o-transition: all 0.5s ease;transition: all 0.5s ease;position: absolute;right: 0px;z-index: 999;top: 50%;margin-top: -45px"><img src="<?php bloginfo('template_directory')?>/images/strelka.svg"></a>
		</div>
	</div>

<?php
get_footer();
