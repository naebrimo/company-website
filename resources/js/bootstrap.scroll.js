/**
 * This is scroll snippets
 *
 */
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
function goTopBtnBehavior()
{
    if(window.pageYOffset <= $('header:first-child').outerHeight())
    {
        $('a#goTopBtn').removeClass('show');
    }
    else
    {
        if($('a#goTopBtn').hasClass('show'))
        {
            return false;
        }
        else
        {
            $('a#goTopBtn').toggleClass('show');
        }
    }
}
function navbarBehavior()
{
    urlHashBehavior();
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

$(window).on('scroll', function(){
    $('#navbarToggle').collapse('hide');
    navbarBehavior();
});
$(document).ready(function(){
    navbarBehavior();
    goTopBtnBehavior();
    $('body').scrollspy({ target: '#navbar-nav', offset: 0 });
    $('#navbarToggle').on('shown.bs.collapse', function (){
        if($('header:first-child > .navbar').hasClass('active'))
        {
            return false;
        }
        else
        {
            navbarBehavior();
        }
        $('header:first-child > .navbar').toggleClass('active');
    });

    $('#navbarToggle').on('hidden.bs.collapse', function () {
        navbarBehavior();
    });

    $('a[href^="#"]').on('click', function (e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

});
