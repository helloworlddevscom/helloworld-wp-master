/**
 * Created by danlinn on 10/5/16.
 */

(function($){
  $.ready(function(){

  });
  function stickyMobile() {
    if ($(window).width()<992) {
      $('body').addClass('sticky');
    }
  }
})(jQuery);
