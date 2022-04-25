$(window).on("scroll", (function() {
    $(this).scrollTop() > 130 ? $(".header-part").addClass("active") : $(".header-part").removeClass("active")
})), $(window).on("scroll", (function() {
    $(this).scrollTop() > 700 ? $(".backtop").show() : $(".backtop").hide()
})), $((function() {
    $(".dropdown-link").click((function() {
        $(this).next().toggle(), $(this).toggleClass("active"), $(".dropdown-list:visible").length > 1 && ($(".dropdown-list:visible").hide(), $(this).next().show(), $(".dropdown-link").removeClass("active"), $(this).addClass("active"))
    }))
})), $(".nav-link").on("click", (function() {
    $(".nav-list li a").removeClass("active"), $(this).addClass("active")
})), $(".header-cate, .cate-btn").on("click", (function() {
    $("body").css("overflow", "hidden"), $(".category-sidebar").addClass("active"), $(".category-close").on("click", (function() {
        $("body").css("overflow", "inherit"), $(".category-sidebar").removeClass("active"), $(".backdrop").fadeOut()
    }))
})),
$(".header-cart, .cart-btn").on("click", (function() {
    $("body").css("overflow", "hidden"), $(".cart-sidebar").addClass("active"), $(".cart-close").on("click", (function() {
        $("body").css("overflow", "inherit"), $(".cart-sidebar").removeClass("active"), $(".backdrop").fadeOut()
    }))
})),
$(".header-wish, .wishlist-btn").on("click", (function() {
    $("body").css("overflow", "hidden"), $(".wishlist-sidebar").addClass("active"), $(".wishlist-close").on("click", (function() {
        $("body").css("overflow", "inherit"), $(".wishlist-sidebar").removeClass("active"), $(".backdrop").fadeOut()
    }))
})),
$(".header-cart, .header-cate, .cart-btn, .cate-btn, .header-wish, .wishlist-btn").on("click", (function() {
    $(".backdrop").fadeIn(), $(".backdrop").on("click", (function() {
        $(this).fadeOut(), $("body").css("overflow", "inherit"), $(".nav-sidebar").removeClass("active"), $(".cart-sidebar").removeClass("active"), $(".wishlist-sidebar").removeClass("active"), $(".category-sidebar").removeClass("active")
    }))
})),
$(".coupon-btn").on("click", (function() {
    $(this).hide(), $(".coupon-form").css("display", "flex")
})), $(".header-src").on("click", (function() {
    $(".header-form").toggleClass("active"), $(this).children(".fa-search").toggleClass("fa-times")
})), $(".action-plus").on("click", (function() {
    var e = $(this).closest(".product-action").children(".action-input").get(0).value++,
        c = $(this).closest(".product-action").children(".action-minus");
    e > 0 && c.removeAttr("disabled")
})),
$(".action-minus").on("click", (function() {
    if ($(this).closest(".product-action").children(".action-input").get(0).value >= 2) {
        $(this).closest(".product-action").children(".action-input").get(0).value--;
    } else if ($(this).closest(".product-action").children(".action-input").get(0).value < 2) {
        $(this).closest(".product-action").children(".action-input").get(0).value = 1;
    }
})),
$(".review-widget-btn").on("click", (function() {
    $(this).next(".review-widget-list").toggle()
})), $(".offer-select").on("click", (function() {
    $(this).text("Copied!")
})), $(".modal").on("shown.bs.modal", (function(e) {
    $(".preview-slider, .thumb-slider").slick("setPosition", 0)
})), $(".profile-card.schedule").on("click", (function() {
    $(".profile-card.schedule").removeClass("active"), $(this).addClass("active")
})), $(".profile-card.contact").on("click", (function() {
    $(".profile-card.contact").removeClass("active"), $(this).addClass("active")
})), $(".profile-card.address").on("click", (function() {
    $(".profile-card.address").removeClass("active"), $(this).addClass("active")
})), $(".payment-card.payment").on("click", (function() {
    $(".payment-card.payment").removeClass("active"), $(this).addClass("active")
}));
$('.list-filter').each(function() {
$(this).find('a').on('click', function(event) {
    event.preventDefault();
    $(this).parent().siblings().removeClass('active');
    $(this).parent().toggleClass('active');
    $(this).parents('.attr-detail').find('.current-size').text($(this).text());
    $(this).parents('.attr-detail').find('.current-color').text($(this).attr('data-color'));
});
});

function getValidateMessage(error) {
let errors = error.responseJSON.errors
let firstItem = Object.keys(errors)[0]
let firstItemMessage = errors[firstItem][0]
return firstItemMessage
}
$('.action-plus, .action-minus').on('click', function() {
const stock = $('.variant-attr')
let qty = $('#quantity').val()
stock.map(response => {
    let t_stock = parseInt(stock[response].attributes[1].value)
    if (qty > t_stock) {
        stock[response].classList.add('custom-disabled-alert')
        stock[response].parentElement.classList.remove('custom-data-tooltip')
    } else {
        stock[response].classList.remove('custom-disabled-alert')
        stock[response].parentElement.classList.add('custom-data-tooltip')
    }
})
let vPrice = $('.variant-price').attr('variant-price')
if (vPrice <= 0) {
    $('.variant-price').removeClass('custom-data-tooltip')
}
})
window.onload = function() {
document.querySelector(".preloader").style.display = "none";
const stock = $('.variant-attr')
let qty = $('#quantity').val()
stock.map(response => {
    let t_stock = parseInt(stock[response].attributes[1].nodeValue)
    if (qty > t_stock) {
        stock[response].classList.add('custom-disabled-alert')
        stock[response].parentElement.classList.remove('custom-data-tooltip')
    } else {
        stock[response].classList.remove('custom-disabled-alert')
        stock[response].parentElement.classList.add('custom-data-tooltip')
    }
})
let vPrice = $('.variant-price').attr('variant-price')
if (vPrice <= 0) {
    $('.variant-price').removeClass('custom-data-tooltip')
}
}
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});