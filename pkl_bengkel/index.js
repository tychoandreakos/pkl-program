$(window).scroll(function () {
    var $this = $(this),
        $head = $('.topbar');
        $menu = $('.navbar');
    if ($this.scrollTop() > 50) {
       $menu.addClass(['scroll-nav', 'navbar-dark']);
       $menu.removeClass(['bg-light','navbar-light']);
    } else {
        $menu.removeClass(['scroll-nav', 'navbar-dark']);
        $menu.addClass(['bg-light','navbar-light']);
    }
});

//smooth

$('.top').click(function(){

    $("html, body").animate({ scrollTop: $(this.hash).offset().top }, 1000);

    return false;

   });



