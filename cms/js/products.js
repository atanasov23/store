
$.get(`/cms/php/products`, function (data) {
    const response = JSON.parse(data);

    $(".items-container").append(`<a href="/cms/product/details?catId=${response[0][1]}" class="btn-add-new"> 
    <div class="col add-product">
    добави продукт
    </div> </a>`);

    for (let res of response) {
        $(".items-container").append(`
        <a href="/cms/product/details?Id=${res[0]}">
        <div class="item-image-wrapper">
                        <div class="item-image" style="background-image: url(/images/${res[5]})"></div>
   
                <div class="item-title">Ръчно направен гердан </div>
            </div>
            </a>
        `);
    }
});

$(".link-wrapper").each(function () {
    $(this).on("click", loadContent);
});

function loadContent(page) {
    page.preventDefault();

    const url = page.currentTarget.children[0].getAttribute("href");

    history.pushState("", "", url);

    $.get(`/cms/php/products?id=${url}`, function (data) {
        const response = JSON.parse(data);

        $(".items-container").empty();

        $(".items-container").append(`<a href="/cms/product/details?catId=${response[0][1]}" class="btn-add-new"> 
               <div class="col add-product">
               добави продукт
               </div> </a>`);

        for (let res of response) {
            $(".items-container").append(`
                   <a href="/cms/product/details?Id=${res[0]}">
                   <div class="item-image-wrapper">
                                   <div class="item-image" style="background-image: url(/images/${res[5]})"></div>
              
                           <div class="item-title">Ръчно направен гердан </div>
                       </div>
                       </a>
                   `);
        }
    });
}
