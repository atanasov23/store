showProducts();
createCategorie();
hrefEvent();

function hrefEvent() {

    $(".category-link").each(function () {
        $(this).on("click", loadContent);
    });
}

function loadContent(page) {
    page.preventDefault();

    const url = page.currentTarget.getAttribute("href");

    history.pushState("", "", url);

    const searchParams = new URLSearchParams(window.location.search);

    $.get(`/cms/php/products_view?id=${searchParams.get('id')}`, function (data) {

        const response = JSON.parse(data);

        $(".items-container").empty();

        if (response.length == 0) {

            $(".items-container").append(`<a href="/cms/product/details?catId=${url}" class="btn-add-new"> 
            <div class="col add-product">
            добави продукт
            </div> </a>`);
        } else {
            $(".items-container").append(`<a href="/cms/product/details?catId=${response[0][1]}" class="btn-add-new"> 
            <div class="col add-product">
            добави продукт
            </div> </a>`);
        }

        for (let res of response) {
            $(".items-container").append(`
               <a href="/cms/product/details?Id=${res[0]}">
               <div class="item-image-wrapper">
                               <div class="item-image" style="background-image: url(/images/${res[5]})"></div>
          
                       <div class="item-title">${res[2]}</div>
                   </div>
                   </a>
               `);
        }
    });
}

function showProducts() {

    /* from first categorie */
    $.get(`/cms/php/products_view`, function (data) {
        const response = JSON.parse(data);
        $(".items-container").append(`
    <a href="/cms/product/details?catId=${response[0][1]}" class="btn-add-new"> 
    <div class="col add-product">
    добави продукт
    </div> </a>`);

        for (let res of response) {
            $(".items-container").append(`
        <a href="/cms/product/details?Id=${res[0]}">
        <div class="item-image-wrapper">
                        <div class="item-image" style="background-image: url(/images/${res[5]})"></div>
                        <div class="item-title">${res[2]}</div>
            </div>
            </a>
        `);
        }
    });
}

function createCategorie() {
    $("#addNewCategory").submit((f) => {
        f.preventDefault();
        const data = new FormData(f.currentTarget);
        $.post(`/cms/php/create_categorie`, { data: data.get('newCategory') }, function (res) {
            $("#category-list").append(`<li id=${res} class='cat-list-item sortable-item'>
            <div class='link-wrapper' data-id=${res}>
                <a href='/cms/catalog/products?id=${res}' class='category-link' title='$row[name]'><span
                        class='cat-link-name fw-semibold'>${data.get('newCategory')}</span></a>
                <a href='/cms/catalog/details?Id=&amp;editId=${res}'
                    class='btn btn-primary btn-sm settings-icon' id=edit_category title='Редакция на категория' >Редакция</a>
                <i class='fas fa-eye view-icon' id=view-icon title='Направи невидима'></i>
            </div>
        </li>`)
            hrefEvent();
        });
    });
}