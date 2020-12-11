$(window).on('load', function() {

$('.input-group.date').datepicker({
    language: "es-ES",
    orientation: "bottom right",
    todayHighlight: true
});

});


$("[data-toggle=tooltip]").tooltip();

$(window).on('load', function() {
$('.fechas-center').slick({
  centerMode: true,
   arrows: true,
  centerPadding: '30px',
  slidesToShow: 8,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
$('.inner-loader-css').css('display','block');
});

