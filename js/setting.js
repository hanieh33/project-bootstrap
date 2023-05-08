$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('ari' +
            'a-expanded', 'false');
    });
});

$('#carousel-example').on('slide.bs.carousel', function (e) {

    /*
        CC 2.0 License Iatek LLC 2018
        Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item.item').length;

    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item.item').eq(i).appendTo('.carousel-inner.b');
            }
            else {
                $('.carousel-item.item').eq(0).appendTo('.carousel-inner.b');
            }
        }
    }
});


$(document).ready(function() {

    $('.slidedd').inewsticker({
        speed       : 2500,
        effect      : 'slide',
        dir         : 'rtl',
        font_size   : 13,
        color       : '#000',
        font_family : 'tahoma',
        delay_after : 1000
    });

});
$(document).ready(function(){
    $('#search').hide();
    $('.show-search').click(function(){
        $('#search').toggle(800);
    });
});

window.onscroll = function() {myFunction()};
var navbar = document.getElementById("n");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}



