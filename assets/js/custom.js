const listElm = document.querySelector("#ajaxPost");
let ppp = 20; // Post per page
let pageNumber = 1;

function load_posts() {
    pageNumber++;
    let str =
        "&pageNumber=" + pageNumber + "&ppp=" + ppp + "&action=more_post_ajax";
    $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_posts.ajaxurl,
        data: str,
        success: function (data) {
            let $data = $(data);
            if ($data.length) {
                $("#ajaxPost").append($data);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            // $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        },
    });
    return false;
}

$(".loadmore").click(function () {
    console.log("hi")
    load_posts()
})