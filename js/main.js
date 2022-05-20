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