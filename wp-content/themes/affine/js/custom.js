$(window).on('load', function () {
  $('.loaderScreen').fadeOut(5000);
  setTimeout(() => {
    $('#loaderAnim').addClass('openActive');
  }, 3000);
  setTimeout(() => {
    $(".bodyHolder").fadeIn(6000);
    $(".bodyHolder").addClass('openActive');
  }, 5000);
});
if ($("#loaderAnim").length) {
  var loaderAnim = lottie.loadAnimation({
    container: document.getElementById('loaderAnim'), // Required
    path: site_url + '/wp-content/themes/affine/js/json/loader.json', // Required
    renderer: 'svg', // Required
    loop: false, // Optional
    autoplay: true, // Optional
    name: "loaderAnim", // Name for future reference. Optional.
  });
}
if ($("#robotAnim").length) {
  var robotAnim = lottie.loadAnimation({
    container: document.getElementById('robotAnim'), // Required
    path: site_url + '/wp-content/themes/affine/js/json/robot-anim.json', // Required
    renderer: 'svg', // Required
    loop: true, // Optional
    autoplay: true, // Optional
    name: "robotAnim", // Name for future reference. Optional.
  });
}
if ($("#ae-banner").length) {
  var robotAnim = lottie.loadAnimation({
    container: document.getElementById('ae-banner'), // Required
    path: site_url + '/wp-content/themes/affine/js/json/ae-banner.json', // Required
    renderer: 'svg', // Required
    loop: false, // Optional
    autoplay: true, // Optional
    name: "ae-banner", // Name for future reference. Optional.
  });
}
if ($("#ae-banner-mob").length) {
  var robotAnim = lottie.loadAnimation({
    container: document.getElementById('ae-banner-mob'), // Required
    path: site_url + '/wp-content/themes/affine/js/json/ae-banner-mob.json', // Required
    renderer: 'svg', // Required
    loop: false, // Optional
    autoplay: true, // Optional
    name: "ae-banner-mob", // Name for future reference. Optional.
  });
}
if ($("#manu-banner").length) {
  var robotAnim = lottie.loadAnimation({
    container: document.getElementById('manu-banner'), // Required
    path: site_url + '/wp-content/themes/affine/js/json/manu-banner.json', // Required
    renderer: 'svg', // Required
    loop: false, // Optional
    autoplay: true, // Optional
    name: "manu-banner", // Name for future reference. Optional.
  });
}
if ($("#manu-banner-mob").length) {
  var robotAnim = lottie.loadAnimation({
    container: document.getElementById('manu-banner-mob'), // Required
    path: site_url + '/wp-content/themes/affine/js/json/manu-banner-mob.json', // Required
    renderer: 'svg', // Required
    loop: false, // Optional
    autoplay: true, // Optional
    name: "manu-banner-mob", // Name for future reference. Optional.
  });
}
window.addEventListener('load', async () => {
  let video = document.querySelector('video[muted][autoplay]');
  try {
    await video.play();
  } catch (err) {
    video.controls = true;
  }
});

window.onscroll = () => {
  const nav = document.querySelector('#header');
  if (this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
};


$('.menu').click (function(){
  $(this).toggleClass('open');
  $('#menu').toggleClass('open');
});

function openTab(evt, cityName) {
  $('.tabcontent').hide();
  $('#'+ cityName).show();
  $('.tablinks').removeClass('active');
  evt.currentTarget.className += " active";
}

function openTabJourney(evt, cityName) {
  $('.tabcontenttwo').hide();
  $('#'+ cityName).show();
  $('.rewindSlider').slick('setPosition');
  $('.rewindSlider').slick('refresh');
  $('.tablinksdates').removeClass('active');
  evt.currentTarget.className += " active";
}

$(document).ready(function () {
  $('.homeSlider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnFocus:false,
    pauseOnHover:false,
    asNavFor: '.homeSlider-nav'
  });

  $('.homeSlider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.homeSlider-for',
    dots: false,
    vertical:true,
    // verticalSwiping:true,
    focusOnSelect: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 900,
        settings: {
          infinite: false,
          slidesToShow: 3.25,
          slidesToScroll: 1,
          vertical: false,
          arrows: false,
        }
      }
    ]
  });

  $('.innovationSlider').slick({
    dots: false,
    infinite: true,
    arrows:false,
    autoplay: true,
    autoplaySpeed: 5000,
    // speed: 10000,
    // cssEase: 'linear',
    slidesToShow: 2,
    slidesToScroll: 1,
    vertical:true,
    verticalSwiping:true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.businessSlider').slick({
    dots: false,
    infinite: true,
    arrows:false,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 10000,
    cssEase: 'linear',
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
        }
      }
    ]
  });

  $('.excellenceSlider').slick({
    dots: false,
    infinite: false,
    arrows:true,
    // variableWidth: true,
    // autoplay: true,
    // autoplaySpeed: 0,
    // speed: 10000,
    // cssEase: 'linear',
    slidesToShow: 4.5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1600,
        settings: {
          slidesToShow: 3.5,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 1.5,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2.5,
          slidesToScroll: 1,
          dots: true,
          arrows:false,
        }
      },
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows:false,
        }
      }
    ]
  });

  $('.lifeSlider').slick({
    dots: false,
    infinite: false,
    arrows:true,
    prevArrow: $(".lifeSliderBack"),
    nextArrow: $(".lifeSliderForward"),
    slidesToShow: 4.5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2.5,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 900,
        settings: {
          dots: true, 
          slidesToShow: 2.5,
          slidesToScroll: 1,                  
        }
      },
      {
        breakpoint: 640,
        settings: {
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.rewindSlider').slick({
    dots: true,
    infinite: false,
    arrows:true,
    prevArrow: $(".rewindSliderBack"),
    nextArrow: $(".rewindSliderForward"),
    slidesToShow: 1,
    slidesToScroll: 1
  });
  
  $('.trendsSlider').slick({
    dots: false,
    infinite: true,
    arrows:false,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  $('.mobileJourneySlider').slick({
    dots: true,
    infinite: false,
    arrows:false,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  $('.mobileJourneyImgSlider').slick({
    dots: false,
    infinite: false,
    arrows:false,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  $('.exploreSlider').slick({
    dots: false,
    infinite: false,
    arrows:true,
    prevArrow: $(".exploreSliderBack"),
    nextArrow: $(".exploreSliderForward"),
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 900,
        settings: {
          dots: true, 
          slidesToShow: 2,
          slidesToScroll: 1,                  
        }
      },
      {
        breakpoint: 640,
        settings: {
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.caseStudiesSlider').slick({
    dots: true,
    infinite: true,
    arrows:false,
    // autoplay: true,
    // autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  $('.thoughtBoxSlider').slick({
    dots: false,
    infinite: false,
    arrows:true,
    prevArrow: $(".thoughtSliderBack"),
    nextArrow: $(".thoughtSliderForward"),
    slidesToShow: 4.5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2.5,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 900,
        settings: {
          dots: true, 
          slidesToShow: 2,
          slidesToScroll: 1,                  
        }
      },
      {
        breakpoint: 640,
        settings: {
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.interestedSlider').slick({
    dots: false,
    infinite: false,
    arrows:true,
    prevArrow: $(".interestedSliderBack"),
    nextArrow: $(".interestedSliderForward"),
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 900,
        settings: {
          dots: true, 
          slidesToShow: 2,
          slidesToScroll: 1,                  
        }
      },
      {
        breakpoint: 640,
        settings: {
          dots: true, 
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.dataSlider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.dataSlider-nav',
    responsive: [
      {
        breakpoint: 900,
        settings: {
          dots: true,                  
        }
      }
    ]
  });
  $('.dataSlider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.dataSlider-for',
    dots: false,
    arrows: true,
    prevArrow: $(".dataSliderBack"),
    nextArrow: $(".dataSliderForward"),
    focusOnSelect: true,
    vertical: true
  });

  $(".filter li").on('click', function(){
    $('ul.filter li').removeClass('active');
    $(this).toggleClass('active');
    var filter = $(this).data('filter');
    $(".dataSlider-nav").slick('slickUnfilter');
    $(".dataSlider-for").slick('slickUnfilter');
    
    if(filter == 'week'){
      $(".dataSlider-nav").slick('slickFilter','.week');
      $(".dataSlider-for").slick('slickFilter','.week');
    }
    else if(filter == 'month'){
      $(".dataSlider-nav").slick('slickFilter','.month');
      $(".dataSlider-for").slick('slickFilter','.month');
    }
    else if(filter == 'year'){
      $(".dataSlider-nav").slick('slickFilter','.year');
      $(".dataSlider-for").slick('slickFilter','.year');
    }
    else if(filter == 'all'){      
      $(".dataSlider-nav").slick('slickUnfilter');
      $(".dataSlider-for").slick('slickUnfilter');
    }
    
  })


  $('.careerjobSlider').slick({
    dots: false,
    infinite: false,
    arrows:false,
    slidesToShow: 1.5,
    slidesToScroll: 1,
  });

  if (screen && screen.width < 900) {
    $('.dev-laern').slick({
      dots: true,
      infinite: false,
      arrows:false,
      slidesToShow: 1,
      slidesToScroll: 1,
    });

    $('.aiAllHolder').slick({
      dots: true,
      infinite: false,
      arrows:false,
      slidesToShow: 1,
      slidesToScroll: 1,
    });

    $('.serviceAreasHolder').slick({
      dots: true,
      infinite: false,
      arrows:false,
      slidesToShow: 1,
      slidesToScroll: 1,
    });

  }

  $('.shiringSlider').slick({
    dots: true,
    infinite: false,
    arrows:false,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  $('.coeVisionSlider').slick({
    dots: false,
    infinite: false,
    arrows:true,
    prevArrow: $(".coeVisionSliderBack"),
    nextArrow: $(".coeVisionSliderForward"),
    slidesToShow: 1,
    slidesToScroll: 1
  });

  $('.coeGamingSlider').slick({
    dots: false,
    infinite: true,
    arrows:false,
    // autoplay: true,
    // autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  $('.expertAESlider').slick({
    dots: true,
    infinite: false,
    arrows:false,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  $('.expertsManuSlider').slick({
    dots: false,
    infinite: false,
    arrows:true,
    prevArrow: $(".lifeSliderBack"),
    nextArrow: $(".lifeSliderForward"),
    slidesToShow: 3.5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2.5,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 900,
        settings: {
          dots: true, 
          slidesToShow: 1,
          slidesToScroll: 1,                  
        }
      }
    ]
  });

  $('.cpgBannerSlider').slick({
    dots: true,
    infinite: true,
    arrows:false,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  $('.serviceSlider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: false,
    fade: true,
    asNavFor: '.serviceSlider-nav',
    responsive: [
      {
        breakpoint: 900,
        settings: {
          dots: true,                 
        }
      }
    ]
  });
  $('.serviceSlider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.serviceSlider-for',
    dots: false,
    infinite: false,
    focusOnSelect: true,
    arrows:true,
    prevArrow: $(".serviceSliderBack"),
    nextArrow: $(".serviceSliderForward"),
    responsive: [
      {
        breakpoint: 1800,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1290,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      // {
      //   breakpoint: 640,
      //   settings: {
      //     dots: true, 
      //     slidesToShow: 2,
      //     slidesToScroll: 1,                  
      //   }
      // }
    ]
  });

  // init Isotope
  var $grid = $('.grid').isotope({
    itemSelector: '.excellence-grid',
  });

  // store filter for each group
  var filters = {};

  $('.filters').on('click', '.filter', function (event) {
    var $button = $(event.currentTarget);
    // get group key
    var $buttonGroup = $button.parents('.button-group');
    var filterGroup = $buttonGroup.attr('data-filter-group');
    // set filter for group
    filters[filterGroup] = $button.attr('data-filter');
    // combine filters
    var filterValue = concatValues(filters);
    // set filter for Isotope
    $grid.isotope({ filter: filterValue });
  });

  // change is-checked class on buttons
  $('.button-group').each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', '.filter', function (event) {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      var $button = $(event.currentTarget);
      $button.addClass('is-checked');
    });
  });

  // flatten object by concatting values
  function concatValues(obj) {
    var value = '';
    for (var prop in obj) {
      value += obj[prop];
    }
    return value;
  }

  $(document).ready(function () {
    $('#ourHolder').show();
    $('#sgan-input').trigger('click')
  });

  if (screen && screen.width > 900) {
    skrollr.init({
      forceHeight: false
    });
  }
});


if (screen && screen.width > 900) {
  var controller = new ScrollMagic.Controller();
  $(function () {
    //var tween = TweenMax.to(".block-list", 1, {className: "+=scrollend"});

    var $block_list = $('.block-list'),
      $block_item = $block_list.find('.block-list__item'),
      block_list_width = $block_list.outerWidth(),
      block_item_width = $block_item.outerWidth(),
      total_width = block_item_width * $block_item.length,
      travel_distance = total_width - block_list_width + 20;

    var scene = new ScrollMagic.Scene({
      triggerElement: "#second",
      duration: '200%',
      triggerHook: 0
    })
      .setPin('.block-list')
      //.setTween(tween)
      .addTo(controller);

    scene.on('progress', function (e) {
      var progress = e.progress,
        move = travel_distance * progress + "px";
      $block_list.css({
        transform: "translateX(" + move + ")"
      });
    });
  });
}

$( ".mobileExcellenceFilter" ).click(function() {
  $( ".filterHolderInner" ).toggleClass('active');
});

$( ".addressDiv" ).click(function() {
  $(".active").removeClass("active")
  $(this).toggleClass('active');
});

$( ".subAddress li" ).click(function() {
  $(".subActive").removeClass("subActive")
  $(this).toggleClass('subActive');
});

$( ".indiaAddress" ).click(function() {
  $(".indiaMap").addClass("activateMap")
  $(".usaMap").removeClass("activateMap")
  $(".singaporeMap").removeClass("activateMap")
});

$( ".usaAddress" ).click(function() {
  $(".indiaMap").removeClass("activateMap")
  $(".usaMap").addClass("activateMap")
  $(".singaporeMap").removeClass("activateMap")
});

$( ".singaporeAddress" ).click(function() {
  $(".indiaMap").removeClass("activateMap")
  $(".usaMap").removeClass("activateMap")
  $(".singaporeMap").addClass("activateMap")
});
// india
$( ".openHyderabad" ).click(function() {
  $(".popUpHyderabad").addClass("activateMapPopup")
  $(".popUpBengaluru").removeClass("activateMapPopup")
  $(".popUpAhmedabad").removeClass("activateMapPopup")
});

$( ".openBengaluru" ).click(function() {
  $(".popUpHyderabad").removeClass("activateMapPopup")
  $(".popUpBengaluru").addClass("activateMapPopup")
  $(".popUpAhmedabad").removeClass("activateMapPopup")
});
$( ".openAhmedabad" ).click(function() {
  $(".popUpHyderabad").removeClass("activateMapPopup")
  $(".popUpAhmedabad").addClass("activateMapPopup")
  $(".popUpBengaluru").removeClass("activateMapPopup")
});
// usa
$( ".openNewYork" ).click(function() {
  $(".popUpNewYork").addClass("activateMapPopup")
  $(".popUpGeorgia").removeClass("activateMapPopup")
  $(".popUpBellevue").removeClass("activateMapPopup")
  $(".popUpSanMateo").removeClass("activateMapPopup")
  $(".popUpOregon").removeClass("activateMapPopup")
  $(".popUpLosAngeles").removeClass("activateMapPopup")
  $(".popUpSantaMonica").removeClass("activateMapPopup")
});
$( ".openGeorgia" ).click(function() {
  $(".popUpNewYork").removeClass("activateMapPopup")
  $(".popUpGeorgia").addClass("activateMapPopup")
  $(".popUpBellevue").removeClass("activateMapPopup")
  $(".popUpSanMateo").removeClass("activateMapPopup")
  $(".popUpOregon").removeClass("activateMapPopup")
  $(".popUpLosAngeles").removeClass("activateMapPopup")
  $(".popUpSantaMonica").removeClass("activateMapPopup")
});
$( ".openBellevue" ).click(function() {
  $(".popUpNewYork").removeClass("activateMapPopup")
  $(".popUpGeorgia").removeClass("activateMapPopup")
  $(".popUpBellevue").addClass("activateMapPopup")
  $(".popUpSanMateo").removeClass("activateMapPopup")
  $(".popUpOregon").removeClass("activateMapPopup")
  $(".popUpLosAngeles").removeClass("activateMapPopup")
  $(".popUpSantaMonica").removeClass("activateMapPopup")
});
$( ".openSanMateo" ).click(function() {
  $(".popUpNewYork").removeClass("activateMapPopup")
  $(".popUpGeorgia").removeClass("activateMapPopup")
  $(".popUpBellevue").removeClass("activateMapPopup")
  $(".popUpSanMateo").addClass("activateMapPopup")
  $(".popUpOregon").removeClass("activateMapPopup")
  $(".popUpLosAngeles").removeClass("activateMapPopup")
  $(".popUpSantaMonica").removeClass("activateMapPopup")
});
$( ".openOregon" ).click(function() {
  $(".popUpNewYork").removeClass("activateMapPopup")
  $(".popUpGeorgia").removeClass("activateMapPopup")
  $(".popUpBellevue").removeClass("activateMapPopup")
  $(".popUpSanMateo").removeClass("activateMapPopup")
  $(".popUpOregon").addClass("activateMapPopup")
  $(".popUpLosAngeles").removeClass("activateMapPopup")
  $(".popUpSantaMonica").removeClass("activateMapPopup")
});
$( ".openLosAngeles" ).click(function() {
  $(".popUpNewYork").removeClass("activateMapPopup")
  $(".popUpGeorgia").removeClass("activateMapPopup")
  $(".popUpBellevue").removeClass("activateMapPopup")
  $(".popUpSanMateo").removeClass("activateMapPopup")
  $(".popUpOregon").removeClass("activateMapPopup")
  $(".popUpLosAngeles").addClass("activateMapPopup")
  $(".popUpSantaMonica").removeClass("activateMapPopup")
});
$( ".openSantaMonica" ).click(function() {
  $(".popUpNewYork").removeClass("activateMapPopup")
  $(".popUpGeorgia").removeClass("activateMapPopup")
  $(".popUpBellevue").removeClass("activateMapPopup")
  $(".popUpSanMateo").removeClass("activateMapPopup")
  $(".popUpOregon").removeClass("activateMapPopup")
  $(".popUpLosAngeles").removeClass("activateMapPopup")
  $(".popUpSantaMonica").addClass("activateMapPopup")
});

// singapore
$( ".openSingapore" ).click(function() {
  $(".popUpSingapore").addClass("activateMapPopup")
});


if (screen && screen.width < 900) {
  $(".menuClassDown").click(function (e) {    
    var buttonTextWithSpaces = $(this).text();
    var buttonText = buttonTextWithSpaces.replace(/^\s+|\s+$/g, '')
    $('.allTopicText').html(buttonText);
    // console.log(buttonText)
    var newImageUrl = $(this).find('.coloredIcon').attr('src');
    // console.log(newImageUrl)
    $('.allTopicImage').attr('src',newImageUrl);
    $( ".filterHolderInner" ).removeClass('active');  
  });
}

$(".mobileInnerMenu h3").click(function () {
  $(this).hasClass("active") ? ($(this).parent().find(".mobileInnerSubMenu").slideUp(),
    $(this).removeClass("active")) : ($(".mobileInnerSubMenu").slideUp(),
      $(".active").removeClass("active"),
      $(this).parent().find(".mobileInnerSubMenu").slideDown(),
      $(this).parent().find("h3").addClass("active"))
});



$(".menuClassDown").click(function (e) {    
  var buttonTextWithSpaces = $(this).text();
  var buttonText = buttonTextWithSpaces.replace(/^\s+|\s+$/g, '')
  $('.filterTextVal').html(buttonText);
  // console.log(buttonText)
});


// BUTTON EFFECT
$(".sparkleBtn").click(function(){
  var self = this;
  $(self).addClass("pressed")
  setTimeout(function() {
    $(self).removeClass("pressed");
  }, 350);
});


$(".homeSliderNavHolder").mouseover(function() {
  $(".navSliderArrow").addClass('openSliderNav');
  $(".homeSliderNavHolder").addClass('openSliderNav');
});

$(".homeSliderNavHolder").mouseout(function() {
  $(".navSliderArrow").removeClass('openSliderNav');
  $(".homeSliderNavHolder").removeClass('openSliderNav');
});

$(".findUs").mouseover(function() {
  $(".findUs").addClass('showFindUs');
});

$(".findUs").mouseout(function() {
  $(".findUs").removeClass('showFindUs');
});

$(document).ready(function() {
  var prevScrollTop = $(window).scrollTop()
  
  $(window).on('scroll', function(e) {
    // var $src = $('.main-div');
    var currentScrollTop = $(this).scrollTop()

    if (currentScrollTop  > 600) {
      $(".findUs").addClass('active');
    } 
    else {
      $(".findUs").removeClass('active');      
    }
  });
});

$( ".shareChallengeIcon" ).click(function() {
  $(".shareChallengeSocial").toggleClass("active")
});

$(document).ready(function() {
  $('#filterOptions li a').click(function() {
    // fetch the class of the clicked item
    var ourClass = $(this).attr('class');

    // reset the active class on all the buttons
    $('#filterOptions li').removeClass('active');
    // update the active state on our clicked button
    $(this).parent().addClass('active');

    if(ourClass == 'all') {
      // show all our items
      $('#ourHolder').children('div.item').show();
    }
    else {
      // hide all elements that don't share ourClass
      $('#ourHolder').children('div:not(.' + ourClass + ')').hide();
      // show all elements that do share ourClass
      $('#ourHolder').children('div.' + ourClass).show();
    }
    return false;
  });
});


$( ".mobilechooseTopicFilter" ).click(function() {
  $( "ul#filterOptions" ).toggleClass('active');
  $( "ul.filter" ).toggleClass('active');
});


if (screen && screen.width < 900) {
  $("ul#filterOptions li a").click(function (e) {    
    var buttonTextWithSpaces = $(this).html();
    var buttonText = buttonTextWithSpaces.replace(/^\s+|\s+$/g, '')
    // console.log(buttonText)
    $('.showFilterMob').html(buttonText);
    $( "ul#filterOptions" ).removeClass('active');  
  });

  $("ul.filter li").click(function (e) {    
    var buttonTextWithSpaces = $(this).html();
    var buttonText = buttonTextWithSpaces.replace(/^\s+|\s+$/g, '')
    // console.log(buttonText)
    $('.showFilterMob').html(buttonText);
    $( "ul.filter" ).removeClass('active');  
  });

  $(".filter li").on('click', function(){
    $('ul.filter li').removeClass('active');
    $(this).toggleClass('active');
    var filter = $(this).data('filter');
    $(".dataSlider-for").slick('slickUnfilter');
    
    if(filter == 'week'){
      $(".dataSlider-for").slick('slickFilter','.week');
    }
    else if(filter == 'month'){
      $(".dataSlider-for").slick('slickFilter','.month');
    }
    else if(filter == 'year'){
      $(".dataSlider-for").slick('slickFilter','.year');
    }
    else if(filter == 'all'){      
      $(".dataSlider-for").slick('slickUnfilter');
    }
    
  })
}

$('.searchDiv input').keyup(function () {
  $( ".searchResultDiv" ).addClass('active');
});

$( ".catFilterInnerHolder" ).click(function() {
  $(this).find(".catFilterType").toggleClass('active');
  $(this).find(".catFilters").toggleClass('active');
});

window.onload = function() {
  $('.squareBox').addClass('active');
  $('.squareBox .dotBox').addClass('activeDots');
  setTimeout(() => {
    $('.circle-1').addClass('active');
    $('.blueAffineLogo').fadeIn();
  }, 1000);
  setTimeout(() => {
    $('.AEBannerInnerImg').addClass('active');
    $('.dataBaseImages img').addClass('active');
  }, 2000);
  setTimeout(() => {
    $('.AEBannerInnerText').addClass('active');
  }, 3000);
  setTimeout(() => {
    $('.manuAnimation').fadeOut();
    $('.manuBannerImg').css('opacity', '1');
  }, 6000);
  setTimeout(() => {
    $('.cloudAnimation').fadeOut();
    $('.cloudBannerImg').css('opacity', '1');
  }, 8000);
  setTimeout(() => {
    $('.indcpgAnimation').fadeOut();
    $('.indcpgBannerImg').css('opacity', '1');
  }, 6000);
  setTimeout(() => {
    $('.indmanuAnimation').fadeOut();
    $('.indmanuBannerImg').css('opacity', '1');
  }, 6000);
  setTimeout(() => {
    $('.indHitechAnimation').fadeOut();
    $('.indHitechBannerImg').css('opacity', '1');
  }, 2600);
  setTimeout(() => {
    $('.indGameAnimation').fadeOut();
    $('.indGameBannerImg').css('opacity', '1');
  }, 3500);
  setTimeout(() => {
    $('.gameAnimation').fadeOut();
    $('.coeGamingImg').css('opacity', '1');
  }, 6000);
};

$(document).ready(function(){
  $(".choseTopicContent").slice(0, 3).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".choseTopicContent:hidden").slice(0, 3).slideDown();
    if($(".choseTopicContent:hidden").length == 0) {
      $("#loadMore").hide();
    }
  });  
})

$( ".gameTypeCta" ).click(function() {
  $('.active').removeClass("active")
  $(this).addClass("active")
});


$( ".toWrongState" ).click(function() {
  $('.wrongState').show();
  $('.gameStepOne').hide();
});

// $( ".toGiftForm" ).click(function() {
//   $('.gaamingGiftHolder').show();
//   $('.wrongState').hide();
// });

$( ".toSendState" ).click(function() {
  $('.sendState').show();
  $('.gaamingGiftHolder').hide();
});

// $( ".clientRoboSvg" ).click(function() {
//   $('.clientGift').show();
//   $('.clientGame').hide();
// });

$( ".toGiftForm" ).click(function() {
  $('#showClientForm').show();
  $('.clientGift').hide();
});

// spin slot machine
var counter = 0;
$('#btn-example6').click(function() {
  $('.tryAgainText').hide();
  counter++;
  function randomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }
  var rndInt = randomNumber(2, 5)
  if (counter < rndInt){
    $('#example6 ul').playSpin({
      time: 500,
    });
  }else{
    Math.random();
    var randNumber = Math.floor(Math.random() * 10) + 1;
    $('#example6 ul').playSpin({
      endNum: [randNumber, randNumber, randNumber],
    });
  }
});

// modal on click open
$( ".modalGameBtn" ).click(function() {
    var attr = $(this).attr('data-attr');
    if(attr == 'client'){
      $('#strtBtn').attr('data-target','#clientModal');
    }else{
      $('#strtBtn').attr('data-target','#ProfessionalModal');
    }
});

$( ".netflixFilter li").click(function() {
  $('.active').removeClass("active")
  $(this).addClass("active")
});

const filter = (element) => {
let target = element.dataset.filtertarget;
resetFilterButtons();
setFilterButtonActive(target);
$('.excellenceSlider').slick('slickUnfilter');
if (target !== "all") {
    $('.excellenceSlider').slick('slickFilter', `.${target}`);
}
};

const resetFilterButtons = () => {
    document.querySelectorAll(".filter-bttn ").forEach(filterBttn => {
        filterBttn.classList.remove("active");
    });
};

const setFilterButtonActive = (target) => {
console.log(target);
document.querySelector(`[data-filtertarget=${target}]`).classList.add("active");
};