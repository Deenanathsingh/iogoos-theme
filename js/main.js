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
// number count for stats, using jQuery animate

$('.counting').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');
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