<html>

<head>
	<title>Fomrad</title>
	<link rel="stylesheet" type="text/css" href="index.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <script src="javascript/jquery.min.js"></script>
  <script src="javascript/jquery.scrollorama.js"></script>
  <script src="javascript/index.js"></script>
<link rel="icon" href="img/icon.png">
    <meta property="og:image"
content="img/logo.png" />
<meta property="og:description" content="We are a company that strives to provide exquisite online and offline services for a wide range of needs" />
<meta name="theme-color" content="#4a266a">
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

  	<div class="section hash" id="section1" href="about" >
      <div id="paragraph">
        <div id="sub-title">ABOUT US</div><br>
        <div style="opacity:0.7;">We are a company that strives to provide exquisite online and offline services for a wide range of needs. With years of experience behind us and with the determination only passionate people have, we have grown into being a service providing company that truly wants to satisfy every single client that comes our way.</div>
      </div>
    </div>

  	<div class="section hash" id="section2" href="design">
      <div class="parent">
      <div id="paragraph-2">
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>Design <div id="dot"></div></h1>
        <div id="details">Graphic, web, branding, flyers, banners, etc</div></div>
      </div>
    </div>
    </div>

  	<div class="section hash" id="section3" href="drawing">
      <div class="parent">
      <div id="paragraph-2" class="sticky" style="z-index: 70;">
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>Painting & Drawing <div id="dot"></div></h1></div>
      </div>
    </div>
    </div>

    <div class="section hash" id="section4" href="music">
      <div class="parent">
      <div id="paragraph-2" class="sticky" style="z-index: 70;" >
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>Music production <div id="dot"></div></h1></div>
      </div>
    </div>
    </div>

    <div class="section hash" id="section5" href="translations">
      <div class="parent">
      <div id="paragraph-2" class="sticky" style="z-index: 70;">
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>Translations <div id="dot"></div></h1>
        <div id="details">To and from a variety of languages (German, Spanish, Italian, English, Russian etc)</div>
      </div>
      </div>
    </div>
    </div>

    <div class="section hash" id="section6" href="copywriting">
      <div class="parent">
      <div id="paragraph-2" class="sticky" style="z-index: 70;">
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>Website copywriting <div id="dot"></div></h1></div>
      </div>
    </div>
    </div>

    <div class="section hash" id="section7" href="data">
      <div class="parent">
      <div id="paragraph-2" class="sticky" style="z-index: 70;">
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>Data entry <div id="dot"></div></h1></div>
      </div>
    </div>
    </div>

    <div class="section hash" id="section8" href="seo">
      <div class="parent">
      <div id="paragraph-2" class="paragraph-2-8" class="sticky" style="z-index: 70;">
        <div id="sub-title">WE CAN HELP YOU WITH</div>
        <div id="category"><h1>SEO Tasks <div id="dot"></div></h1></div>
      </div>
    </div>
    </div>

    <div class="special hash" id="section9" href="contact">
      <div class="parent">
      <!--<div id="paragraph-2" style="z-index: 70;">-->
      <div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div>
      <div id="c-form">
        <div id="c-text">Take a deep breath and write us!</div><br>
        <form action="#section9">
          <input class="c-field" id="txt1" type="text" placeholder="Full name" r><br>
          <input class="c-field" id="txt2" type="text" placeholder="Company / Organization"><br>
          <input class="c-field" id="txt3" type="text" placeholder="Email"><br>
          <textarea class="c-textarea" id="txt4" rows="9" placeholder="Describe your project..."></textarea><br>
          <input id="c-send" type="submit" value="Send" onclick='verif(document.getElementById("txt1").value,document.getElementById("txt2").value,document.getElementById("txt3").value,document.getElementById("txt4").value);Alert.render("Please, enter a valid e-mail adress.")'>
        </form>
      </div>
      <!--</div>-->
    </div>
  </div>

  <?php include 'php/footer.php'?>
 
</body>
</html>
