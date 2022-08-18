
var slider = new tns({
  container: '.project-images',
  autoplay: true,
  items: 4,
  slideBy: 'page',
  mode: "carousel",
  gutter: 20,
  edgePadding: 20,
  center:false,
  autoWidth: false,
  fixedWidth: false,
  mouseDrag: true,
  swipeAngle: 15,
  loop: true,
  speed: 250,
  nav: false,
  slideBy: 1,
  controls:false,
  nav: false,
  autoplayButton:false,
  autoplayButtonOutput: false,
  lazyload: false,
  preventScrollOnTouch: 'auto',
  responsive: {
    0: {
      items:1
    },
    550: {
      items: 2
    },
    860: {
      items: 3
    },
    1200: {
      items: 4
    }
  }
});