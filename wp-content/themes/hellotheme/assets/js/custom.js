$(document).ready(function(){

    var addToCartText = $('.single_add_to_cart_button').text();
    $('.single_add_to_cart_button').html('<i class="fa fa-shopping-cart" aria-hidden="true"></i> '+addToCartText);

    $('main').css('margin-top', $('#header').outerHeight()+'px' );

    var topHeaderHeight = $('.topHeader').outerHeight();

    $(window).scroll(function() {
        if($(this).scrollTop() > topHeaderHeight)
        {
            $("#header").addClass("fixedHeader");
            $("#header").css('top',-topHeaderHeight+'px');
            
        }
        else if($(this).scrollTop() <= topHeaderHeight)
        {
            $("#header").removeClass("fixedHeader");
            $("#header").css('top','0');
            
        }     
    });



    $("#homeCarousels").carousel({
        interval: 6000,
    });

    var menu = new MmenuLight(
        document.querySelector( '#navbarSupportedContent' ),
        '(max-width: 1026px)'
    );

    var navigator = menu.navigation({
            selectedClass: 'Selected',
            slidingSubmenus: true,
            theme: 'light',
            title: 'Menu'
    });

    var drawer = menu.offcanvas({
         position: 'left'
    });


    document.querySelector( '.navbarToggler' ).addEventListener( 'click', evnt => {
        evnt.preventDefault();
        drawer.open();
    });



    $('.cat-parent').click(function(e){
        if(e.target.tagName!== "A"){
            console.log('clicked');
        }
    });








});





var acc = document.getElementsByClassName("sidebarTitle");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    var panelHeight = panel.style.maxHeight.slice(0, -2);
    panelHeight = parseInt(panelHeight);
    console.log(panelHeight);
    if (panelHeight > 1 || isNaN(panelHeight)) {
      panel.style.maxHeight = 0;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}