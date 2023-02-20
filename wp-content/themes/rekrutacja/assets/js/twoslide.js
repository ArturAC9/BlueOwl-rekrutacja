document.addEventListener('DOMContentLoaded', function () {

    new Splide('#image', {
      type    : 'loop',
      perPage : 1,
      autoplay: false,
      pagination: true,
    }).mount();
  });
  
  document.addEventListener('DOMContentLoaded', function () {
    new Splide('#opinion', {
      type    : 'loop',
      perPage : 1,
      autoplay: true,
      pagination: true,
    }).mount();
  });