<html>

<head>
	<title>Fomrad</title>
	<link rel="stylesheet" type="text/css" href="main.css"/>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, user-scalable=no">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>
<body>

  <div id="logo"></div>
  <a href="#section9"><div id="contact-button">Write us</div></a>
  <div id="header">
  </div>
  <div id="everything">
  	<div class="section" id="section0">
      <div class="parent">
        <div id="title"><h1>Having artists work for your ideas <div id="dot"></div></h1>
        <div id="arrow">&darr;</div></div>
      </div>
    </div>

  	<div class="section" id="section1">
      <div id="paragraph">
        <div id="sub-title">ABOUT US</div><br>
        <div style="opacity:0.7;">We are a company that strives to provide exquisite online and offline services for a wide range of needs. With years of experience behind us and with the determination only passionate people have, we have grown into being a service providing company that truly wants to satisfy every single client that comes our way.</div>
      </div>
    </div>

  	<div class="section" id="section2">
      <div class="parent">
      <div id="paragraph-2">
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>Design <div id="dot"></div></h1>
        <div id="details">Graphic, web, branding, flyers, banners, etc</div></div>
      </div>
    </div>
    </div>

  	<div class="section" id="section3">
      <div class="parent">
      <div id="paragraph-2" class="sticky" style="z-index: 70;">
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>Painting & Drawing <div id="dot"></div></h1></div>
      </div>
    </div>
    </div>

    <div class="section" id="section4">
      <div class="parent">
      <div id="paragraph-2" class="sticky" style="z-index: 70;">
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>Music production <div id="dot"></div></h1></div>
      </div>
    </div>
    </div>

    <div class="section" id="section5">
      <div class="parent">
      <div id="paragraph-2" class="sticky" style="z-index: 70;">
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>Translations <div id="dot"></div></h1>
        <div id="details">To and from a variety of languages (German, Spanish, Italian, English, Russian etc)</div>
      </div>
      </div>
    </div>
    </div>

    <div class="section" id="section6">
      <div class="parent">
      <div id="paragraph-2" class="sticky" style="z-index: 70;">
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>Website copywriting <div id="dot"></div></h1></div>
      </div>
    </div>
    </div>

    <div class="section" id="section7">
      <div class="parent">
      <div id="paragraph-2" class="sticky" style="z-index: 70;">
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>Data entry <div id="dot"></div></h1></div>
      </div>
    </div>
    </div>

    <div class="section" id="section8">
      <div class="parent">
      <div id="paragraph-2" class="paragraph-2-8" class="sticky" style="z-index: 70;">
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>SEO Tasks <div id="dot"></div></h1></div>
      </div>
    </div>
    </div>

    <div class="special" id="section9">
      <div class="parent">
      <!--<div id="paragraph-2" style="z-index: 70;">-->
      <div id="c-form">
        <div id="c-text">Take a deep breath and write us!</div><br>
        <form>
          <input class="c-field" type="text" placeholder="Full name"><br>
          <input class="c-field" type="text" placeholder="Company / Organization"><br>
          <input class="c-field" type="text" placeholder="Email"><br>
          <textarea class="c-textarea" rows="9" placeholder="Describe your project..."></textarea><br>
          <input id="c-send" type="submit" value="Send">
        </form>
      </div>
      <!--</div>-->
    </div>
  </div>

  <div class="footer" id="section10">
    <div class="parent">
    <div id="footer-content">
      <img style="opacity:0.3;margin-left: -12px;" src="img/fomrad-t.png" width="130px" height="auto"><br>
    <div style="margin-top: -5px;">&copy;2015 Fomrad</div>
    <!--<div style="position:absolute;right:0;">CONTENT</div>-->
    </div>
  </div>
  </div>
  </div>

  <script>
  $('a').click(function(){
  $('html, body').animate({
      scrollTop: $( $(this).attr('href') ).offset().top
  }, 500);
  return false;
});
  </script>

  <script>
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
</script>

<script>
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
</script>

  <script>
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 10) {
          $("#logo, #header, #contact-button").addClass("scroll");
        }
        else {
          $("#logo, #header, #contact-button").removeClass("scroll");
        }
      });
  </script>
  <script>
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
          $("#header").addClass("shadow");
        }
        else {
          $("#header").removeClass("shadow");
        }
      });
  </script>

  <script type="text/javascript">
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
  </script>

</body>
</html>
