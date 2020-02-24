






var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});


/*..........testimonial section.........*/
$('.testimonial_owlCarousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    autoplay:false,   
    smartSpeed: 3000, 
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})




$(document).ready(function(){

if($('.brands_slider').length)
{
var brandsSlider = $('.brands_slider');

brandsSlider.owlCarousel(
{
loop:true,
autoplay:true,
autoplayTimeout:1000,
nav:false,
dots:false,
autoWidth:true,
items:8,
margin:42
});

if($('.brands_prev').length)
{
var prev = $('.brands_prev');
prev.on('click', function()
{
brandsSlider.trigger('prev.owl.carousel');
});
}

if($('.brands_next').length)
{
var next = $('.brands_next');
next.on('click', function()
{
brandsSlider.trigger('next.owl.carousel');
});
}
}


});

/*............about page if click open with cntent.............*/
$('#show_hide1').on('click', function(e){
  e.preventDefault();
  $('#overview_lead1 p').css('height', 'auto');
});

$('#show_hide2').on('click', function(e){
  e.preventDefault();
  $('#overview_lead2 p').css('height', 'auto'); 
});

$('#show_hide3').on('click', function(e){
  e.preventDefault();
  $('#overview_lead3 p').css('height', 'auto');
});

$('#show_hide4').on('click', function(e){
  e.preventDefault();
  $('#overview_lead4 p').css('height', 'auto'); 
});


/*........image_zoom......*/
$.fn.imageZoom = function() {
  "use strict";
  this.each(function() {
    var $this = $(this),
      $thumb = $this.find(".iz-js-thumb"),
      thumbWith = $thumb.width(),
      thumbHeight = $thumb.height(),
      // read out data-larg-size for large image dimension
      imageData = $this.data("large-size"),
      imageArr = imageData.split("x"),
      largeImageWidth = imageArr[0],
      largeImageHeight = imageArr[1],
      $imageZoom = $this.find(".iz-js-zoom"),
      imageZoomWidth = $imageZoom.width(),
      imageZoomHeight = $imageZoom.height(),
      $imageZoomPic = $imageZoom.find(".iz-js-zoom-pic"),
      // offsetCorrectionX = imageZoomWidth / 2,
      // offsetCorrectionY = imageZoomHeight / 2,
      zoomFactorX = largeImageWidth / thumbWith,
      zoomFactorY = largeImageHeight / thumbHeight,
      // build image path. e.g 'pathtoimage/imagename' + imageData + '.jpg'
      imagePath = "images/slider1.png"/* + imageData*/;

    $this.css({
      width: thumbWith
    });
    // position zoom-container next to thumbnail
    $imageZoom.css({
      top: 0,
      left: thumbWith
    });
    // set dimension of large image based on data-large-size values
    $imageZoomPic
      .css({
        width: largeImageWidth,
        height: largeImageHeight
      })
      .attr("src", imagePath);
    // move large image depending on mouse position over thumb
    $thumb.on("mousemove pointermove", function(e) {
      var getOffset = $(this).offset(),
        elemOffX = e.pageX - getOffset.left,
        elemOffY = e.pageY - getOffset.top;
      $imageZoomPic.css({
        "margin-left": -elemOffX * zoomFactorX,
        "margin-top": -elemOffY * zoomFactorY
      });
    });
  });
};

$(".iz-js-image-zoom").imageZoom();









