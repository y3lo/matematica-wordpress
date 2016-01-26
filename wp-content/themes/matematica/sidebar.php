<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Matematica
 */

?>

<div class="navigation">
    <nav >
        <a href="#home" class="main active" data-menuanchor="home">
            <div class="nav-text-block">
                <div class="delta"></div>
                <span class="nav-text-label"><?= bloginfo("name")?></span>
            </div>
        </a>
    </nav>
    <div class="nav-block">
        <nav >
            <a href="#ideas" class="ideas" data-menuanchor="ideas">
                <div class="nav-text-block">
                    <div class="delta"></div>
                    <span class="nav-text-label">
                        Фокус
                    </span>
                </div>
            </a>
        </nav>
        <nav >
            <a href="#experience" class="experience" data-menuanchor="experience">
                <div class="nav-text-block">
                    <div class="delta"></div>
                    <span class="nav-text-label">Опыт</span>
                </div>
            </a>
        </nav>
        <nav >
            <a href="#projects" class="projects" data-menuanchor="projects">
                <div class="nav-text-block" >
                    <div class="delta"></div>
                    <span class="nav-text-label">Проекты</span>
                </div>
            </a>
        </nav>
        <nav >
            <a href="#contacts" class="contacts disable-scroll" data-menuanchor="contacts">
                <div class="nav-text-block">
                    <div class="delta"></div>
                    <span class="nav-text-label">Контакты</span>
                </div>
            </a>
        </nav>
    </div>
    <nav class="lang"><span class="lang-label">RU</span>
        <div class="nav-text-block"><div class="delta"></div>
            <div class="lang-ua" onclick="window.location ='?lang=ua'"></div>
            <div class="lang-ru" onclick="window.location ='?lang=ru'"></div>
            <div class="lang-en" onclick="window.location ='?lang=en'"></div>
        </div>
    </nav>
</div>
