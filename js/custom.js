$(function() {

    $('.all_tags').owlCarousel({
        items: 7,
        navText: ''
    });

    $('.show_tags').on('click',function () {
        $(this).css('display','none');
        $('.all_tags .owl-stage').css('width','100%');
        $('.all_tags').css('width','100%');
        $('.all_tags').css('padding-left',"20px");
        $('.owl-nav').css('display','none');
    });

});