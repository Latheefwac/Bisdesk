// var loc = window.location.href;
// var home = "http://server.local/developer/b/bisdesk/html/index.php";
// var home2 = "http://server.local/developer/b/bisdesk/html/";
// if (loc == home) {
//     $('.bd-header').removeClass("logged");
// }
// if (loc == home2) {
//     $('.bd-header').removeClass("logged");

// }

if ($('.innerpages').hasClass('product-details-page')) {
    $('body').addClass('mobile-bottom-55');
}
if ($('.innerpages').hasClass('search-result-page')) {
    $('.bd-footer').hide();
    $('body').addClass('mobile-bottom-55');
}

$('.sr-item-box .sr-ctn-bx').click(function(event) {
    event.stopPropagation();
    event.preventDefault();
    window.location.href = 'http://server.local/developer/b/bisdesk/html/product-detail.php';
});
$(".banner-search input").keyup(function(event) {
    $('.bd-search').removeClass('error');
    if (event.keyCode === 13) {
        $('.bd-search').removeClass('error');
        if ($(this).val() != "") {
            $(".banner-search .btn-search").click();
        } else {
            $('.bd-search').addClass('error');
        }
    }
});

$(".banner-search .btn-search").click(function(evt) {
    evt.stopPropagation();
    if ($(".banner-search input").val() != "") {
        window.location.href = "http://server.local/developer/b/bisdesk/html/product.php";
    } else {
        $('.bd-search').addClass('error');
    }
});
$(document).click(function() {
    $('.bd-search').removeClass('error');
});


var loc = window.location.href;
var loc_spl = loc.split('/');
if (loc_spl[loc_spl.length - 1] == '' || loc_spl[loc_spl.length - 1] == 'index.php') {
    $('.bd-header').removeClass("logged");
}
// } else if (loc_spl[loc_spl.length - 1] == 'newpage-1.html' || loc_spl[loc_spl.length - 1] == 'newpage-2.html' || loc_spl[loc_spl.length - 1] == 'newpage-3.html') {
//     $('.rz-header').addClass('admin-header');
//     $('.rz-header').addClass('inner-header');
// } else {
//     $('.rz-header').addClass('inner-header');
// }