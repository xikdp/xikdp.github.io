<?php
  $notify = '';
  $notifyClass = '';
  
  if(isset($_POST['submit'])){
      // Membuat variabl untuk menerima data dari form
      $email = $_POST['email'];
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $sm = $_POST['sm'];

      $toEmail = 'dandakomang09@gmail.com'; // Ganti dengan alamat email yang Anda inginkan
      $emailSubject = 'Pesan website dari '.$name;
      $htmlContent = '<h2> via Form Kontak Website</h2>
          <h4>Nama</h4><p>'.$name.'</p>
          <h4>Email</h4><p>'.$email.'</p>
          <h4>Phone</h4><p>'.$phone.'</p>
          <h4>Short Message</h4><p>'.$sm.'</p>';
  
      // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
            // Header tambahan
      $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
  
      // Kirim email
      if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
          $notify = 'Pesan Anda sudah terkirim dengan sukses !';
          $notifyClass = 'succdiv';
      }else{
          $notify = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
          $notifyClass = 'errordiv';
      }
?>

<!DOCTYPE html>
  <html>
    <title>xikdp</title>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- My CSS -->
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body id="xikdp" class="scrollspy">
      <!-- navbar -->
      <div class="navbar-fixed">
        <nav class="teal darken-3">
          <div class="container">
            <div class="nav-wrapper">
              <a href="#xikdp" class="brand-logo">Xikdp</a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="#about">About</a></li>
                <li><a href="#exp">Experience</a></li>
                <li><a href="#pr">Professional</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- side nav -->
        <ul class="sidenav" id="mobile-demo">
          <li><a href="#about">About</a></li>
          <li><a href="#exp">Experience</a></li>
          <li><a href="#pr">Professional</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>

      <!-- slider -->
      <section id="slider">
        <div class="slider">
          <ul class="slides">
            <li>
              <img src="img/slider/2.jpg"> <!-- random image -->
              <div class="caption left-align">
                <img src="img/pasfoto/1.jpg" id="pasfoto">
                <h3>I'M <br/> I KOMANG DANDA PRIYOWITTESA</h3>
                <h5 class="light grey-text text-lighten-3">Web Front-end Developer<br/>and<br/> UI Designer</h5>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- about -->
      <section id="about" class="about scrollspy">
        <div class="container">
          <div class="row">
            <h3 class="center light grey-text text-darken-2">About</h3>
            <div class="col m6 light">
              <h5>Description</h5>
              <p>Hi ! I am I Komang Danda P, I am student of Software Engineering. I've skilled at html5,css,materialize css,bootstrap css,javascript native,php native,adobe xd,adobe photoshop,ms.Excel. I learn to develop a website as Front-end developer and i still learn about front-end website, make UI design using Adobe XD or Figma, and Data entry using Microsoft Excel.</p>
              <a href="" class="waves-effect waves-light btn cv">Download CV</a>
            </div>
            <div class="col m6">
              <p>WEB FRONTEND DEVELOPMENT</p>
              <div class="progress">
                <div class="determinate blue" style="width: 80%"></div>
              </div>
              <p>WEB BACKEND DEVELOPMENT</p>
              <div class="progress">
                <div class="determinate blue" style="width: 65%"></div>
              </div>
              <p>USER INTERFACE DESIGN</p>
              <div class="progress">
                <div class="determinate blue" style="width: 85%"></div>
              </div>
              <p>DATA ENTRY</p>
              <div class="progress">
                <div class="determinate blue" style="width: 85%"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Experience -->

    <section id="exp" class="scrollspy">
    <div class="parallax-container">
      <div class="parallax">
        <img src="img/slider/3.jpg">
      </div>
      <div class="container experience">
        <h3 class="center light white-text">Experience</h3>
      
        <div class="row">
          <div class="col m6 left">
            <h5 class="light white-text ">Dinas Kominfo Provsu </br>2017-2018 January-March</h5>
            <p class="intern white-text">Internship member at Dinas Kominfo Provsu for 3 months. I learned about front-end develop theory. And then after got the theory about front-end develop, i got Data Entry Project. In this place, I learned how their manage time for their project, what the user needs, make the project accord requirements.</p>
          </div>
          <div class="col m6 left">
            <h5 class="light white-text">Stasiun Klimatologi Sampali Medan </br>2017-2018 April-June</h5>
            <p class="intern white-text">Internship member at Stasiun Klimatologi Sampali for 3 months. I learned about make SMS Gateway, and finish in 1 months. And then worked on a project developed a website Stasiun Klimatologi Sampali. In this place, i learned how to work on real project.</p>
          </div>
        </div>
      </div>
    </div>
    </section>

    <!-- services -->
    <section id="pr" class="pr scrollspy grey lighten-3">
      <div class="container">
        <h3 class="center light grey-text text-darken-3">Professional</h3><br>
        <!-- row 1 -->
        <div class="row">
          <div class="col m3 s12">
            <div class="card-panel center professional" id="big">
              <img src="img/icon/ps.png" style="height: 60px;">
              <h5>Adobe Photoshop</h5>
              <p>Skilled using Adobe Photoshop</p>
            </div>
          </div>

          <div class="col m3 s12">
            <div class="card-panel center professional" id="big">
              <img src="img/icon/xd.png" style="height: 60px;">
              <h5>Adobe XD</h5><br/>
              <p>Skilled using Adobe XD</p>
            </div>
          </div>

          <div class="col m3 s12">
            <div class="card-panel center professional" id="big">
              <img src="img/icon/figma.png" style="height: 60px;">
              <h5>Figma</h5><br/>
              <p>Skilled using Figma</p>
            </div>
          </div>

          <div class="col m3 s12">
            <div class="card-panel center professional" id="big">
              <img src="img/icon/excel.png" style="height: 60px;">
              <h5>Microsoft Excel</h5><br/>
              <p>Skilled using Microsoft Excel</p>
            </div>
          </div>
        </div>

        <!-- row 2 -->
        <div class="row">
          <div class="col m3 s12">
            <div class="card-panel center professional" id="big">
              <img src="img/icon/html5.png" style="height: 60px">
              <h5>HTML <br>5</h5>
              <p>Skilled using HTML5</p>
            </div>
          </div>

          <div class="col m3 s12">
            <div class="card-panel center professional" id="big">
              <img src="img/icon/css.png" style="height: 60px">
              <h5>CSS <br>3</h5>
              <p>Skilled using Css, with framework materialize, and bootstrap</p>
            </div>
          </div>

          <div class="col m3 s12">
            <div class="card-panel center professional" id="big">
              <img src="img/icon/js.png" style="height: 60px;">
              <h5>Javascript<br>&nbsp;</h5>
              <p>Skilled using Javascript native</p>
            </div>
          </div>

          <div class="col m3 s12">
            <div class="card-panel center professional" id="big">
              <img src="img/icon/php.png" style="height: 60px;">
              <h5>PHP <br>&nbsp</h5>
              <p>Skilled using PHP native</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- portfolio -->
    <section id="portfolio" class="portfolio scrollspy">
      <div class="container">
        <h3 class="light center grey-text text-darken-3">Portfolio</h3><br/>
        <!-- gallery 1 -->
        <div class="row">
          <div class="col m3 s12">
            <img src="img/portfolio/1.jpg" class="responsive-img card materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/2.jpg" class="responsive-img card materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/3.png" class="responsive-img card materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/4.png" class="responsive-img card materialboxed">
          </div>
        </div>
        <!-- gallery 2 -->
        <div class="row">
          <div class="col m3 s12">
            <img src="img/portfolio/5.jpg" class="responsive-img card materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/12.png" class="responsive-img card materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/14.png" class="responsive-img card materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/15.png" class="responsive-img card materialboxed">
          </div>
        </div>
        <!-- more info -->
        <div class="row">
          <div class="col m4 s12 center"></div>
          <div class="col m4 s12 center">
            <a class="waves-effect waves-light btn" href="http://gg.gg/ikomangdanda"><i class="material-icons right">forward</i>More Pictures</a><br/>
          </div>
          <div class="col m4 s12 center"></div>
        </div>
      </div>
    </section>

    <!-- contact us -->
    <section id="contact" class="contact grey lighten-3 scrollspy">
      <div class="container">
        <h3 class="light grey-text text-darken-3 center">
          Contact
        </h3><br/>
        <div class="row">
          <div class="col m6 s12">
            <div class="card-panel teal lighten-2 white-text center panel_contact"><br/>
              <i class="material-icons">mail</i>
              <h5>Contact</h5><br/>
              <p>If you want to hire me or invite me on your job, please contact me in this social media or you can send me the email by fill this form.</p><br/>
              <a href="" class="sosmed"><img src="img/icon/instagram2.png" style="height: 20px"></a>
              <a href="" class="sosmed"><img src="img/icon/fb.png" style="height: 20px"></a>
              <a href="" class="sosmed"><img src="img/icon/twitter2.png" style="height: 20px"></a>
              <a href="" class="sosmed"><img src="img/icon/linkedin.png" style="height: 20px"></a>
              <a href="https://wa.me/082267396716" class="sosmed"><img src="img/icon/wa.png" style="height: 25px;"></a><br/>
            </div>
          </div>
          <div class="col m6 s12">
            <form>
              <div class="card-panel">
                <div class="input-field">
                  <input type="text" name="name" id="name" class="validate" required>
                  <label for="name">Name</label>
                </div>
                <div class="input-field">
                  <input type="email" name="email" id="email" class="validate" required>
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input type="text" name="phone" id="phone" class="validate" required>
                  <label for="phone">Phone</label>
                </div>
                <div class="input-field">
                  <textarea name="sm" id="sm" class="materialize-textarea"></textarea>
                  <label for="sm">Short Message</label>
                </div>
                <button type="submit" class="btn teal lighten-2 send">SEND</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="teal darken-3 white-text center">
      <p>I Komang Danda P &copy; 2020</p>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slideR = document.querySelectorAll('.slider');
        M.Slider.init(slideR, {
          indicators: false,
          height: 500,
          duration: 2500,
          interval: 5000
        });

        const scrollspy = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scrollspy, {
          scrollOffset: 60
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const mbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(mbox);
      </script>
    </body>
  </html>
