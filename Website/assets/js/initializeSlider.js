/**
 * Created by Savy on 22-Nov-15.
 */
$(document).ready(function(){
    $('.autoplay').slick({
        accessibility:true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots:true
    });
});