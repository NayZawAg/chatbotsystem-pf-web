$(function(){

  // TOP Slider
  var slider = tns({
    "items": 1,
    "controls": true,
    "controlsText": [" ", " "],
    "gutter": 10,
    "nav": true,
    "responsive": {
      "600": {
        "items": 4,
        "controls": true,
        "edgePadding": 30
      }
    },
    "container": "#mainTopLs-content__container",
    "swipeAngle": false,
    "speed": 400,
  });

  $(window).scroll(function() {
    var value = $(this).scrollTop(); //スクロールの値を取得
    $('#scrollValue').text(value);
  });


  // Privacy Agreement
  $('#submit').prop('disabled', true);

  $('#privacyagreement').on('click', function() {
    if ($(this).prop('checked') == false) {
      $('#submit').prop('disabled', true);
    } else {
      $('#submit').prop('disabled', false);
    }
  });

  $("#privacyagreement").change(function() {
    $("#contactUserForm-submit__input").toggleClass("active", this.checked)
  }).change();

  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.getElementById("to_top").style.display = "block";
    } else {
      document.getElementById("to_top").style.display = "none";
    }
  }
  $('a[href^="#"]').SmoothScroll({
    duration: 1000,
    easing  : 'easeOutQuint'
  });

  var $dropdown = $('#dropdown-menu');
  var $lang_dropdown = $('#lang-dropdown-menu');
  var $dropdown_overlay = $('#dropdown-overlay');
  var $hamburger = $('#hamburger-btn');

  $('#sp-language').click(function(){
    toggleLanguage();
  })
  $('a[href^=".hamburger-menu"]').click(function(){
    toggleMenu();
  })

  $hamburger.click(function(){
    toggleMenu();
  });

  $dropdown_overlay.click(function(){
    toggleMenu();
  });

  $('.dropdown-menu__item').click(function(){
    toggleMenu();
  });

  function toggleMenu() {
    $hamburger.toggleClass('active');
    $dropdown_overlay.fadeToggle();
    $dropdown.slideToggle();
  }

  function toggleLanguage() {
    $dropdown_overlay.fadeToggle();
    $lang_dropdown.slideToggle();
  }

  $('#language_option').on('change', function () {
    var url = $(this).val(); 
    if (url) { 
      window.location = url; 
    }
    return false;
  });
  
  $("#tourism").on("click", function(e){
    e.preventDefault();
    clearBaloons();
    var $balloon = $('#sec1-smxs1');

    if($balloon.hasClass("opacity_0")){
      toggleClass($balloon,'opacity_0','opacity_1');
    }
    else{
      toggleClass($balloon,'opacity_1','opacity_0');
    }
    
  });

  $("#shopping").on("click", function(e){
    e.preventDefault();
    clearBaloons();
    var $balloon = $('#sec1-smxs2');
    $balloon.removeClass('opacity_0');
    $balloon.addClass('opacity_1');
  });

  $("#lodging").on("click",function(e){
    e.preventDefault();
    clearBaloons();
    var $balloon = $('#sec1-smxs3');
    $balloon.removeClass('opacity_0');
    $balloon.addClass('opacity_1');
  })

  $("#foods").on("click",function(e){
    e.preventDefault();
    clearBaloons();
    var $balloon = $('#sec1-smxs4');
    $balloon.removeClass('opacity_0');
    $balloon.addClass('opacity_1');
  })

  $("#trip").on("click",function(e){
    e.preventDefault();
    clearBaloons();
    var $balloon = $('#sec1-smxs5');
    $balloon.removeClass('opacity_0');
    $balloon.addClass('opacity_1');
  })

  $("#preparation").on("click",function(e){
    e.preventDefault();
    clearBaloons();
    var $balloon = $('#sec1-smxs6');
    $balloon.removeClass('opacity_0');
    $balloon.addClass('opacity_1');
  })

  $("#immigration").on("click",function(e){
    e.preventDefault();
    clearBaloons();
    var $balloon = $('#sec1-smxs7');
    $balloon.removeClass('opacity_0');
    $balloon.addClass('opacity_1');
  })

  $("#sec1-smxs1").on("click",function(e){
    e.preventDefault();
    $( this ).removeClass('opacity_1');
    $( this ).addClass('opacity_0');
  });

  $("#sec1-smxs2").on("click",function(e){
    e.preventDefault();
    $( this ).removeClass('opacity_1');
    $( this ).addClass('opacity_0');
  });

  $("#sec1-smxs3").on("click",function(e){
    e.preventDefault();
    $( this ).removeClass('opacity_1');
    $( this ).addClass('opacity_0');
  });

  $("#sec1-smxs4").on("click",function(e){
    e.preventDefault();
    $( this ).removeClass('opacity_1');
    $( this ).addClass('opacity_0');
  });

  $("#sec1-smxs5").on("click",function(e){
    e.preventDefault();
    $( this ).removeClass('opacity_1');
    $( this ).addClass('opacity_0');
  });

  $("#sec1-smxs6").on("click",function(e){
    e.preventDefault();
    $( this ).removeClass('opacity_1');
    $( this ).addClass('opacity_0');
  });

  $("#sec1-smxs7").on("click",function(e){
    e.preventDefault();
    $( this ).removeClass('opacity_1');
    $( this ).addClass('opacity_0');
  });

  function clearBaloons(){
    $('.future').each(function() {
      $( this ).removeClass('opacity_1').addClass('opacity_0');
    });
  }

  function toggleClass(element,toRemove,toAdd,isCurrent){
    element.removeClass(toRemove).addClass(toAdd);
  }

  $('map').imageMapResize();



  $(".header-language__img").on("click", function() {
    $('.header-language__item').toggleClass('open');
  });

  $('.animated').css('visibility','hidden');
  $(window).scroll(function(){
   var windowHeight = $(window).height(),
       topWindow = $(window).scrollTop();
   $('.animated').each(function(){
    var targetPosition = $(this).offset().top;
    var urlHash = location.hash;
    if(topWindow > targetPosition - windowHeight + 100 && urlHash != '#concept'){
     $(this).addClass("fadeInDown");
    }
   });
  });

  var urlHash = location.hash;

  if(urlHash){
    if (urlHash == '#concept') {
       $('.animated').css("visibility", "");
    }
  }

  // default
  cookie_area_height = $('.check-cookie').outerHeight(true);
  $('#header').css('margin-top', cookie_area_height);
  $('.header-language').css('margin-top', cookie_area_height);


  $(window).on('load resize', function(){
    cookie_area_height = $('.check-cookie').outerHeight(true);
    $('#header').css('margin-top', cookie_area_height);
    $('.header-language').css('margin-top', cookie_area_height);

    if ($(window).outerWidth(true) <= 992) {
      $('.main').css('margin-top', 0);
    } else {
      //$('.main').css('margin-top', cookie_area_height);
    }
  });
});