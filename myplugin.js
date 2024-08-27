jQuery(document).ready(function($) {
    $("#GoToTheTop1, #GoToTheTop2, #GoToTheTop3, #GoToTheTop4").on('click touchstart', function(e) {
      e.preventDefault();
      $("body,html").animate({ scrollTop: 0 }, 500);
      return false;
    });
  });
  
