$('.input-group.date').datepicker({
    language: "es-ES",
    orientation: "bottom right",
});


$('.fechas-center').slick({
  centerMode: true,
   arrows: true,
  centerPadding: '60px',
  slidesToShow: 7,
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

$("[data-toggle=tooltip]").tooltip();