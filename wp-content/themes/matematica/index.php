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
					У самой сложной задачи всегда<br>есть простое решение
				</div>
				<div class="title">
					Математика
				</div>
			</div>
		</div>
		<div id="ideas-my" class="content-block section">
			<div class="content-contener">
				<div class="title">
					Фокус
				</div>
				<div class="text">
					<div>
						<img src="<?php bloginfo('template_directory')?>/images/logo-02.svg" alt=""/>
						<br>
						<span>Логотип</span>
					</div>
					<div>
						<img src="<?php bloginfo('template_directory')?>/images/branding-01.svg" alt=""/>
						<br>
						<span>Брендинг</span>
					</div>
					<div>
						<img src="<?php bloginfo('template_directory')?>/images/app-01.svg" alt=""/>
						<br>
						<span>Приложения</span>
					</div>
					<div>
						<img src="<?php bloginfo('template_directory')?>/images/design-01.svg" alt=""/>
						<br>
						<span>Дизайн</span>
					</div>
					<div>
						<img src="<?php bloginfo('template_directory')?>/images/web-01.svg" alt=""/>
						<br>
						<span>Web</span>
					</div>
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
						$years = date("Y")-2010;
						$days = date('d')-1;
						$months = date("m")-11;
						if($months<0){
							$months += 12;
							$years--;
						}
						?>
						<div class="years">
							<div class="time-text" id="years"><?=$years?></div>
							<span>год</span>
						</div>
						<div class="months">
							<div class="time-text" id="months"><?=$months?></div>
							<span>месяц</span>
						</div>
						<div class="days">
							<div class="time-text" id="days"><?=$days?></div>
							<span>день</span>
						</div>
						<div class="hours">
							<div class="time-text" id="hours"><?=date('H')?></div>
							<span>час</span></div>
						<div class="minutes">
							<div class="time-text" id="minutes"><?=date('i')?></div>
							<span>минута</span>
						</div>
						<div class="seconds">
							<div class="time-text" id="seconds"><?=date('s')?></div>
							<span>секунда</span>
						</div>

					</nobr>
				</div>
			</div>
		</div>

		<div id="projects-my" class="content-block section">

		</div>
		<div id="contacts-my" class="content-block section">
			<div id="map"></div>
			<div class="overflow">
				<div class="content-contener">
					<div class="title" style="color: #fff;text-align: left;"><?bloginfo("name")?></div>
					<div class="text" style="color: #fff;text-align: left;">
						Украина<br>г. Запорожье, 69002<br>ул. Красногвардейская, 40 оф 507<br>info@matematica.com.ua<br><br><a href="tel:+380933443326">+38 093 344 33 26</a>
					</div>
				</div>
			</div>
			<a href="#" onclick="$(this).toggleClass('rotate');$('.overflow').toggleClass('hidden');if($('.overflow').hasClass('hidden')){$.fn.fullpage.setAllowScrolling(false);}else{$.fn.fullpage.setAllowScrolling(true);};return false;" style="webkit-transition: all 0.5s ease;-moz-transition: all 0.5s ease;-ms-transition: all 0.5s ease;-o-transition: all 0.5s ease;transition: all 0.5s ease;position: absolute;right: 0px;z-index: 999;top: 50%;margin-top: -45px"><img src="<?php bloginfo('template_directory')?>/images/strelka.svg"></a>
		</div>
	</div>

<?php
get_footer();
