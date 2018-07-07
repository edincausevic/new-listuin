$( document ).ready(function() {

  // MENU IMAGE ANIMATION
  var imgActive = 0;
  setInterval(function(){

    $('.js-msImg').removeClass('u-show-o');
    $($('#menuScreen').children()[imgActive]).addClass('u-show-o');
    imgActive++;
    if (imgActive > $('#menuScreen').children().length - 1) {
      imgActive = 0;
    }
  }, 7000);
  
  // TOGGLE ASIDE NAVIGATION
  $('#toggleMenuBtn').on('click', showMenu);
  $('#manuBack').on('click', hideMenu);
  $('#mainMenu').on('click', '.btn', function() {
    if($(this).hasClass('js--menuTitle')) { return false;};
    hideMenu();
  })

  function showMenu() {
    $('#mainMenu').toggleClass('showMenu');
    $('#manuBack').fadeIn(200);
  }

  function hideMenu() {
    $('#mainMenu').toggleClass('showMenu');
    $('#manuBack').fadeOut(200);
  }

  // TOGGLE MENUS IN ASIDE NAVIGATION
  $('.js--menuTitle').on('click', function() {
    $(this).next().slideToggle();
  })

  // SET ACTIVE MENU
  var page = window.location.hash.slice(8);
  var pageMenus = $('.btn--submenu');

  $.each(pageMenus, function(i, el) { 
    if($(el).text() === page) {
      $(el).addClass('btn--submenu-active'); // add active class on submenu
      $('#mainTitle').text($(el).closest('.mainMenu__submenu').prev().text()); // add h1 title
      $(el).closest('.mainMenu__submenu').addClass('u-show'); // show menu on load
    }
  })

  // TOGGLE DROPDOWN MENU AND HIDE IT ON BODY CLICK
  $(document).on('click', function(e) {
    var userMenuBtn = $('.js-user-menu-btn');

    if($(e.target).hasClass('js--um')) {
      userMenuBtn.next().toggle("fast");
      userMenuBtn.toggleClass('btn--dropdown-active');
    }else {
      userMenuBtn.next().hide("fast");
      userMenuBtn.removeClass('btn--dropdown-active');
    }
  })

  

});