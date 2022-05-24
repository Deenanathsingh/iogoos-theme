// navigation-new.php  by ruma start
$(document).ready(function() {
    $(".togl-menu").click(function() {
        $(".mobile-sidebar-header").toggle();
    });
});
$(document).ready(function() {

    $(document).on('click', '.drp-wn', function() {
        if (!$(this).next().hasClass('show')) {
            $('.inner-dropdown').removeClass('show');
            $(this).next().addClass('show');
        } else if ($(this).next().hasClass('show')) {
            $(this).next().removeClass('show');
        }
        $(this).addClass('show');
        $(document).find(".drp-wn").not(this).removeClass('show');
        return false;
    });

});
// home page counter
$('.counting').each(function() {
    var $this = $(this),
        countTo = $this.attr('count');

    $({
        countNum: $this.text()
    }).animate({
        countNum: countTo
    }, {
        duration: 3000,
        easing: 'linear',
        step: function() {
            $this.text(Math.floor(this.countNum));
        },
        complete: function() {
            $this.text(this.countNum);
            //alert('finished');
        }
    });
});
// anout page Slick Slider
jQuery(".slick-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    arrows: true,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            adaptiveHeight: true,
        },
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        },
    }, ],
});


// homepage client slider
$('.thumb-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    vertical: true,
    arrows: false,
    verticalSwiping: true,
});