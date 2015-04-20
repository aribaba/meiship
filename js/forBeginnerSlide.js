$("document").ready(function(){

$('.center').slick({
  centerMode: true,
  centerPadding: '100px',
  slidesToShow: 1,
  infinite: true,
  autoplay: true,
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