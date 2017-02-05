$(document).ready(function() {
  //choose gallery
  chooseGallery();
  $("#select-gallery").change(function() {
    chooseGallery();
  });

  function chooseGallery() {
    $(".kindergarten-gallery").removeClass("active").hide();
    if ($('#select-gallery').val() == 'gallery1') {
      $(".kindergarten-gallery1").addClass("active").fadeIn().slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
          breakpoint: 992,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 767,
          settings: {
            slidesToShow: 2
          }
        }]
      });
    } else if ($('#select-gallery').val() == 'gallery2') {
      $(".kindergarten-gallery2").addClass("active").fadeIn().slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
          breakpoint: 992,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 767,
          settings: {
            slidesToShow: 2
          }
        }]
      });
    } else if ($('#select-gallery').val() == 'gallery3') {
      $(".kindergarten-gallery3").addClass("active").fadeIn().slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
          breakpoint: 992,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 767,
          settings: {
            slidesToShow: 2
          }
        }]
      });
    } else if ($('#select-gallery').val() == 'gallery4') {
      $(".kindergarten-gallery4").addClass("active").fadeIn().slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
          breakpoint: 992,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 767,
          settings: {
            slidesToShow: 2
          }
        }]
      });
    } else if ($('#select-gallery').val() == 'gallery5') {
      $(".kindergarten-gallery5").addClass("active").fadeIn().slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
          breakpoint: 992,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 767,
          settings: {
            slidesToShow: 2
          }
        }]
      });
    }
  }
  //end gallery
  //hamburger menu
  $(".hamburger").click(function() {
    $(this).toggleClass("is-active");
    if ($(this).hasClass("is-active")) {
      $(".h-menu__list").slideDown();
    } else {
      $(".h-menu__list").slideUp();
    }
  });
  //gallery
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });
  //****************
  //slider teachers
  if ($(".teachers-slider")) {
    $('.teachers-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      speed: 600,
      asNavFor: '.teachers-slider-nav'
    });
    $('.teachers-slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.teachers-slider',
      dots: false,
      centerMode: true,
      focusOnSelect: true,
      arrows: true,
      responsive: [{
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    });
  } else {}
  //slider news
  if ($(".news-slider")) {
    $('.news-slider').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true,
      responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  } else {}
  //slider question
  if ($(".question-slider")) {
    $('.question-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true
    });
  } else {}
  //slider partners
  if ($(".partners-slider")) {
    $('.partners-slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      arrows: true,
      responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 5
        }
      }, {
        breakpoint: 767,
        settings: {
          slidesToShow: 3
        }
      }, {
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  } else {}
  //slider press
  if ($(".press-slider")) {
    $('.press-slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false,
      responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          arrows: true
        }
      }, {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          arrows: true
        }
      }, {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          arrows: true
        }
      }]
    });
  } else {}
  //slider comments
  if ($(".comments-slider")) {
    $('.comments-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true
    });
  } else {}
  //slider kindergarten
  if ($(".kindergarten-slider")) {
    $('.kindergarten-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      initialSlide: 2,
      fade: true,
      speed: 600,
      asNavFor: '.kindergarten-slider-nav'
    });
    $('.kindergarten-slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      initialSlide: 2,
      asNavFor: '.kindergarten-slider',
      dots: false,
      centerMode: true,
      focusOnSelect: true,
      arrows: true,
      responsive: [{
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true
        }
      }]
    });
  } else {}

  //slider kindergarten-video
  if ($(".kindergarten-video")) {
    $('.kindergarten-video').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true,
      responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 1
        }
      }]
    });
  } else {}
  //slider kindergarten-gallery
  if ($(".kindergarten-gallery")) {
    $('.kindergarten-gallery').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows: true,
      responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 3
        }
      }, {
        breakpoint: 767,
        settings: {
          slidesToShow: 2
        }
      }]
    });
  } else {}
  /**********end sliders***********/
  //map
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
      // How zoomed in you want the map to start at (always required)
      zoom: 14,
      scrollwheel: false,
      // The latitude and longitude to center the map (always required)
      center: new google.maps.LatLng(53.904729, 27.532251),

      // How you would like to style the map.
      // This is where you would paste any style found on Snazzy Maps.
      styles: [{
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [{
          "saturation": "65"
        }, {
          "lightness": "6"
        }, {
          "gamma": "0.86"
        }, {
          "weight": "1.19"
        }, {
          "hue": "#ffc400"
        }]
      }]
    };

    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    if ($('body').hasClass('kontakty-2')) {
      var mapElement = document.getElementById('map');

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);

      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(53.904729, 27.532251),
        map: map,
        title: 'ул. Клары Цеткин, 51а',
        icon: '/wp-content/themes/wp-kinders/img/marker.png'
      });
    }


  }
});
