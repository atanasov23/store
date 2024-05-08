<?php

function html($data)
{

    $html = "<!DOCTYPE html>
    <html lang='en'>
    
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta name='description' content='Онлайн магазин за гоблени и гердани.  Бърза и сигурна доставка. Ниски цени. Поръчай сега.' />
        <meta property='og:title' content=$data />
        <meta property='og:site_name' content='Ръчно изработени гердани и гоблени! - Детелина и Вие | detelinaivie.com' />
        <meta property='og:description'
            content='Онлайн магазин за гоблени и гердани.  Бърза и сигурна доставка. Ниски цени. Поръчай сега.' />
        <link rel='stylesheet' href='/template/simple/css/main.css' />
        <script src='https://kit.fontawesome.com/7f6d4e14e7.js' crossorigin='anonymous'></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
        <title>$data</title>
    </head>
    
    <body>
    
        <header class='header'>
    
            <div class='main-nav'>
    
                <div class='logo'>
                    <div class='logo-img'>
                        <a href='/'>
                            <img src='/template/simple/imgs/logo2.jpg'>
                        </a>
                    </div>
                    <div class='head-contacts'>
                        <ul>
                            <li>
                                <a href='0892375731'>
                                    <span class='phone_number'>
                                        <i class='fa fa-mobile' aria-hidden='true'></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href='https://www.instagram.com/detelina.i.vie/' target='_blank'>
                                    <span class='icon_instagram'>
                                        <i class='fa fa-instagram' aria-hidden='true'></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href='https://www.facebook.com/profile.php?id=61551918767888&is_tour_completed=true'
                                    target='_blank'>
                                    <span class='icon_facebook'>
                                        <i class='fa fa-facebook' aria-hidden='true'></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
    
                <div class='header-menu'>
                    <div class='menu'>
                        <div class='mobile-menu' id='mobile-menu'>
                            <a>
                                <div class='container-menu'>
                                    <div class='c-1'></div>
                                    <div class='c-2'></div>
                                    <div class='c-3'></div>
                                    <div>
                                        <p>Меню</p>
                            </a>
                        </div>
                    </div>
                    <div class='search-box'>
                        <form action='/search.php' class='search-form' id='search-form'>
                            <div class='field-box'>
                                <input type='text' name='search' id='search-filed' class='text-field' placeholder='Търсене'>
                                <button><i class='fa fa-sharp fa-thin fa-magnifying-glass fa-sm'></i></button>
                            </div>
                        </form>
                        <a id='search-btn'>
                            <!-- <i class='fa-thin fa-x fa-xl'></i> -->
                            <div class='toogle-search'>
                                <!-- <i class='fa fa-thin fa-magnifying-glass fa-xl'></i> -->
                                <i class='fa fa-search fa-lg' aria-hidden='true'></i>
                            </div>
                            <p>Търсене</p>
                        </a>
                    </div>
                    <div id='cart-header' class='cart'> <a href='/shopping-cart.html' class='add-to-cart'>
                            <i class='fa fa-thin fa-cart-shopping fa-lg'></i>
                            <em class='cart-sum'>(0)</em>
                        </a>
                    </div>
                </div>
    
            </div>
    
        </header>
    
        <nav>
            <ul class='main-menu'>
               <!-- adding items from server -->
            </ul>
        </nav>
    
        <div class='main'>
       
            <div class='galeryContainer'>
    
                <div class='wrapper'>
                    <img class='galeryImage' src='/template/simple/imgs/hobi-gobleni_3_1920x500.jpg'>
                    <img class='galeryImage' src='/template/simple/imgs/goblen_1_1920x500.jpg'>
                    <img class='galeryImage' src='/template/simple/imgs/ezgif.com-resize.jpg'>
                </div>
    
            </div>
    
            <div class='gs-grid-wrap gs-anim-block animated'>
                <div class='gs-grid-item with-hover gs-elem done' data-pid='31'>
    
                    <div class='gs-grid-item with-hover gs-elem done' data-pid='45'>
                        <div class='gs-item-data'>
                            <div class='gs-item-image'>
                                <span class='gs-tags'>
                                </span>
                                <a href='/rachno-napraven-gerdan-1.html' class='gs-item-view gs-single-view'>
                                    <img src='/media/8/61.png' alt='Ръчно направен гердан '>
                                </a>
                                <a data-quick-view-btn=' href='#' onclick='QuickView.showInfo(event, this)'
                                    class='gs-qw-button' data-id='45'>
                                    <span class='icon-ico_search'></span>
                                    <em>Бърз преглед</em>
                                </a>
                            </div>
                            <div class='gs-item-text'>
                                <a href='/rachno-napraven-gerdan-1.html'>
                                    Ръчно направен гердан
                                </a>
                                <div class='gs-item-price'>
                                    <a href='/rachno-napraven-gerdan-1.html'>
                                        <span class='gs-new-price'>18,00 лв.</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
        
            </div>
    
            <footer>
                <div class='footer-wrap'>
    
                    <div class='footer-main'>
                        <div class='footer-nav'>
                            <nav class='footer-menu'>
                                <a href='/catalog.html' class='gn-catalog-details-0' title='Продукти'>Продукти</a>
                                <a href='/faq.html' class='gn-faq-list-0' title='FAQ'>FAQ</a>
                                <a href='/contact-information.html' class='gn-content-details-2'
                                    title='Контакти'>Контакти</a>
                                <a href='/about-cookies.html' class='gn-content-details-7'
                                    title='Информация за бисквитки'>Информация за бисквитки</a>
                                <a href='/login.html' class='gn-user-login-0' title='Вход за клиенти'>Вход за клиенти</a>
                            </nav>
                            <p>При спор, който не може да бъде решен съвместно с избрания онлайн магазин, можете да
                                използвате
                                сайта <a rel='nofollow' target='_blank'
                                    href='https://webgate.ec.europa.eu/odr/main/index.cfm?event=main.home.show&amp;lng=BG'
                                    style='display:inline;margin:0;padding:0;text-decoration: underline;color: inherit;'>ОРС</a>.<br>Всички
                                продукти в страницата подлежат на актуализация. Информацията в страницата може да бъде
                                променяна
                                по всяко време, като не е задължително промените да бъдат анонсирани в страницата.</p>
                        </div>
    
                        <div class='footer-right'>
                            <div class='footer-contact'>
                                <ul>
                                    <li>
                                        <a href='tel:0892375731' class='phone-number'>
                                            <span>Телефон:</span>
                                            <p>0892375731</p>
                                        </a>
                                    </li>
                                    <li>
                                        <div class='footer-socials'>
                                            <a href='mailto:detelina_shop@abv.bg'><span>detelina_shop@abv.bg</span></a>
                                            <a href='https://www.facebook.com/profile.php?id=61551918767888&amp;is_tour_completed=true'
                                                target='_blank'><span>Facebook</span></a>
                                            <a href='https://www.instagram.com/detelina.i.vie/'
                                                target='_blank'><span>Instagram</span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                    </div>
    
                    <div class='copy-text'>
                        <span class='copy-ft'>Copyright © 2023. All Rights Reserved</span>
                    </div>
    
                </div>
            </footer>
    </body>
    
    <script src='/template/simple/js/main.js'></script>
    <script src='/js/main.js'></script>
    
    </html>";

    return $html;
}
