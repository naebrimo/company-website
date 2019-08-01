if(window.pageYOffset <= $('header:first-child').outerHeight())
{
    $('a#goTopBtn').removeClass('show');
}
else
{
    if(!$('a#goTopBtn').hasClass('show'))
    {
        $('a#goTopBtn').toggleClass('show');
    }
}
