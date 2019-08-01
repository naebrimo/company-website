function urlHashBehavior()
{
    if(window.pageYOffset <= document.querySelector('header:first-child').offsetHeight)
    {
        window.location.hash = 'home';
    }
    $('.section').each(function(){
        if($(this).offset().top < window.pageYOffset + 10 && $(this).offset().top + $(this).height() > window.pageYOffset + 10)
        {
            window.location.hash = $(this).attr('id');
        }
    });
}
function navbarBehavior(){

    if($(window).scrollTop() > $('header:first-child').outerHeight())
    {
        if($('header:first-child > .navbar').hasClass('active'))
        {
            return false;
        }
        else
        {
            $('header:first-child > .navbar').toggleClass('active');
        }
    }
    else
    {
        $('header:first-child > .navbar').removeClass('active');
    }
}
$(document).ready(function(){
    urlHashBehavior();
    navbarBehavior();
});
