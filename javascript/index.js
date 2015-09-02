//styling js----------------------->
  $('a').click(function(){
  $('html, body').animate({
      scrollTop: $( $(this).attr('href') ).offset().top
  }, 500);
  return false;
});
  $(function(){ // document ready
    var stickyTop = $('#section2').offset().top; // returns number
    $(window).scroll(function(){ // scroll event
      var windowTop = $(window).scrollTop(); // returns number
      if (stickyTop < windowTop) {
        //$('#paragraph-2').css({ position: 'fixed', top: 0 });
        $('#section2').css('background-attachment', 'fixed');
        $('#paragraph-2').addClass('sticky');
      }
      else {
        $('#section2').css('background-attachment','scroll');
        $('#paragraph-2').removeClass('sticky');
      }
    });

  });
$(function(){ // document ready
  var stickyTop = $('#section8').offset().top; // returns number
  $(window).scroll(function(){ // scroll event
    var windowTop = $(window).scrollTop(); // returns number
    if (stickyTop < windowTop) {
      //$('#paragraph-2').css({ position: 'fixed', top: 0 });
      $('#section8').css('background-attachment', 'scroll');
      $('.paragraph-2-8').removeClass('sticky');
      $('#paragraph-2').removeClass('sticky');
      $('#contact-button').removeClass('scroll');
    }
    else {
      $('#section8').css('background-attachment','fixed');
      $('.paragraph-2-8').addClass('sticky');
      $('#paragraph-2').addClass('sticky');
    }
  });

});
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 10) {
          $("#logo, #header, #contact-button").addClass("scroll");
        }
        else {
          $("#logo, #header, #contact-button").removeClass("scroll");
        }
      });
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
          $("#header").addClass("shadow");
        }
        else {
          $("#header").removeClass("shadow");
        }
      });

        $(window).scroll(function(e){
            parallax();
        });
        function parallax(){
            var scrolled = $(window).scrollTop();
         $('#title').css('margin-top',-(100+scrolled*0.5)+'px');
         $('#title').css('opacity', +(4-scrolled*0.00999));
         $('#section1').css('background-position-y', -(-70+scrolled*0.09)+'px');
         $('#paragraph').css('top', +(scrolled*0.5)+'px');
         $('#paragraph').css('opacity', -(3-scrolled*0.00999));
        }
//-------------------------------------------------------------------->

//details verification and email + AJAX ------------------------------>
function verif(name,company,email,description){
  $.ajax({
    type: 'POST',
    url: '/php/verif_email.php',
    data: {name:name, company:company, email:email, description:description},
    success: function(data){
      if(data!="OK")window.alert(data);
      else
      {
        window.alert("Thank you for choosing Fomrad. A message was sent to your email address with your project details. In order to proceed, you must confirm them using the link provided in the message.");
        document.getElementById("txt1").value="";
        document.getElementById("txt2").value="";
        document.getElementById("txt3").value="";
        document.getElementById("txt4").value="";
      }
    }
  });
}
//-------------------------------------------------------------------->

//anchor scrolling---------------------------------------------------->
$(function () {
    var currentHash = "#initial_hash"
    $(document).scroll(function () {
        $('.hash').each(function () {
            var top = window.pageYOffset;
            var distance = top - $(this).offset().top;
            var hash = $(this).attr('href');
            if (distance < 50 && distance > -50 && currentHash != hash) {
                window.location.hash = (hash);
                currentHash = hash;
            }
        });
    });
});
//--------------------------------------------------------------------->