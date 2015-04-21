$("document").ready(function(){

$('.center').slick({
  centerMode: true,
  centerPadding: '120px',
  slidesToShow: 1,
  infinite: true,
  autoplay: true,
  dots: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 3,
        infinite: true,
        autoplay: true,
        
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 1,
        autoplay: true,
        infinite: true,
        
      }
    }
  ]
});
});