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

    <div class="products-main-container">
        <aside class="category-tree-wrapper" id="categoryTreeWrapper">
            <h2 class="catalog-title">Категории</h2>
            <div class="category-tree" id="categoryTree">

                <ul class="sortable-list ui-sortable" id="category-list">
                    <li class="cat-list-item">
                        <div id="cat_0" class="link-wrapper">
                            <a href="/cms/catalog/products?Id=0" class="category-link" title="Некатегоризирани продукти"><b>Некатегоризирани продукти</b></a>
                        </div>
                    </li>
                    <?php
                    include('/xampp/htdocs/shop/cms/php/config.php');

                    $sql = "SELECT * FROM categorie_names";

                    $query = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_array($query)) {
                        echo "<li id='$row[id]' class='cat-list-item sortable-item'>
                        <div class='link-wrapper' data-id=''>
                            <a href='/cms/catalog/products?id=$row[id]' class='category-link' title='$row[name]'><span
                                    class='cat-link-name fw-semibold'>$row[name]</span></a>
                            <a href='/cms/catalog/details?Id=&amp;editId=$row[id]'
                                class='btn btn-primary btn-sm settings-icon' id=edit_category title='Редакция на категория' >Редакция</a>
                            <i class='fas fa-eye view-icon' id=view-icon title='Направи невидима'></i>
                        </div>
                    </li>";
                    }
                    ?>
                </ul>
            </div>

            <form class="add-new-category my-3 me-2 pt-4" id="addNewCategory" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control fst-italic new-category" placeholder="Име на категорията" name="newCategory" data-validation="presence" />
                    <input class="btn btn-primary btn-sm" id="btn-sm" type="submit" value="Създай" />
                </div>
            </form>
        </aside>

        <div class="items-container">
            
        </div>
    </div>
</body>

<script src="/cms/js/products.js"></script>

</html>