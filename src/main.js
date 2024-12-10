// import Swiper JS
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css/navigation';
// import Swiper styles
import 'swiper/css';

;((w, $) => {
  'use strict';

  const onSwipe = () => {
    let $a1Swipe = $('.a1-swiper');
    if($a1Swipe.length == 0) return;
    
    $a1Swipe.each((__index, el) => {
      console.log(el)
      new Swiper(el, {
        slidesPerView: 2,
        spaceBetween: 20,
        modules: [Navigation, Pagination],
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      })
    })
    
  }

  $(() => {
    onSwipe();
  })
})(window, jQuery)