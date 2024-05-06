<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Електронен магазин - контролен панел</title>
    <link rel="stylesheet" href="/cms/css/main.css" />
    <script src="https://kit.fontawesome.com/7f6d4e14e7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
      <div class="main-container">
        <div class="header">
            <nav class="navBarTopmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-mail" id="nav-link-mail" aria-current="page">detelina_shop@abv.bg</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/cms/main/index">Начало</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/cms/messages/list">Съобщения</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="http://help.superhosting.bg/category/shopiko" target="_blank">Помощ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/cms/index/logout">Изход</a>
                    </li>
                </ul>
            </nav>
            <nav class="nav-mainMenu">
                <div class="navbar-collapse" id="navbarMainMenu">
             
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="/cms/catalog/products">
                               
                                <i class="fa-sharp fa-solid fa-table-cells fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Каталог</span>
                            </a>
                      
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/content/index">
                                <i class="fa fa-light fa-file-lines fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Страници</span>

                            </a>
                        
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/design/templates">
                                <i class="fa fa-solid fa-palette fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Дизайн</span>
                            </a>
                       
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/settings/basicNew">
                                <i class="fa fa-sharp fa-light fa-gear fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Настройки</span>

                            </a>
                      
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/orders/list">
                                <i class="fa fa-sharp fa-light fa-cart-shopping fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Поръчки</span>

                            </a>
                          
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/customer/index">
                                <i class="fa-solid fa-people-group fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Клиенти</span>

                            </a>
                       
                        </li>
                    <!--     <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/marketing/discounts">
                                <i class="fa-solid fa-bullhorn fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Маркетинг</span>

                            </a>
                        
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/reports/summary">
                                <i class="fa fa-solid fa-money-bill-trend-up fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Отчети</span>

                            </a>
                       
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="/cms/plugins/all">
                                <i class="fa-solid fa-box-open fa-2xl" style="color: #ffffff;"></i>
                                <span class="nav-link-text">Допълнения</span>

                            </a>
                     
                        </li> -->
                    </ul>
                    <div class="nav-preview-shop">
                        <a href="http://detelinaivie.bg" target="_blank" class="nav-preview-link bg-primary rounded">
                            <span>
                                <i class="fa fa-sharp fa-solid fa-shop fa-2xl" style="color: #ffffff;"></i>
                                <span class="pr-text">Преглед</span>
                            </span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <section class="page-section">
  <div class="dash-main-info">
    <div class="container-info">
      <div class="user-image">
        <span>D</span>
      </div>
      <div class="dash-user">
        <div class="greeting">
          Здравейте,
        </div>
        <h3 class="name active">
          <b class="font-name">
            detelina_shop@abv.bg
          </b>
        </h3>
        <a href="/cms/account/settings" class="user-profile-settings">Настройки
          на профила</a>
      </div>

      <div class="shop-info">
        <div class="col-sm-4">
          <div class="dash-user-status">
            <div class="stat">
              <div class="stat-info">
                <span>Domain:</span>
                <strong class="text-secondary fw-semibold">Свързан</strong>
              </div>
            </div>
            <div class="stat">
              <div class="stat-info">
                <span>Статус:</span>
                <strong class="text-secondary fw-semibold">Магазинът е активен</strong>
              </div>
              <div class="stat-action">
                <a href="/cms/settings/basicNew">Промени статуса на магазина</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-12 mt-4">
      <a
        href="http://detelinaivie.bg"
        target="_blank"
        class="btn btn-primary py-1 d-block rounded-0 view-shop"
      >detelinaivie.com</a>
    </div>
  </div>

  <div class="shop-stat">
    <div class="shop-items">
      <span>Продукти в магазина</span>
      <div class="shop-product">
        <div class="info">
          <span>37</span>
          <a href="">Към каталога</a>
        </div>
      </div>
    </div>
    <div class="new-orders">
      <span>Нови продукти</span>
      <div class="orders-info">
        <div class="info">
          <span>0</span>
          <a href="">Към поръчки</a>
        </div>
      </div>
    </div>
  </div>
</section>

</body>

</html>