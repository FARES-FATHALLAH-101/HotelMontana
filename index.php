<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
 <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>//images/logo0.png" />
  <title>HOTEL MONTANA</title>
  <?php  get_header() ?>
</head>


<body>
  <!-- header -->
  <div class="con">

    <header>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo0.webp" class="imag"></a>
      <nav>
        <ul>
          <li><a class="link" href="#home"> home </a></li>
          <li><a href="<?php echo get_template_directory_uri() . '/Our_Rooms/our_rooms.php'; ?>">our rooms </a></li>
          <li><a href="<?php echo get_template_directory_uri() . '/about_us/about.php'; ?>"> about us</a></li>
          <li><a href="<?php echo get_template_directory_uri() . '/Contact/contact.php'; ?>">Contact</a></li>
        </ul>
        <a href="<?php echo get_template_directory_uri() . '/booking/boking.php'; ?>"><button type="button">
            book a room
          </button>
        </a>
      </nav>
    </header>

    <div class="containr">
      <h1>More than a hotel... an experience</h1>
      <h2> <span>Hotel</span> for the whole family<br> all year round.</h2>
    </div>
  </div>
  <!-- end of header -->

  <!-- ROOMS -->

  <section>
    <h1>our rooms</h1>
    <div class="section-room">
      <div class="room1 room">
      <img class="img-responsiv img-resize" src="<?php echo get_template_directory_uri(); ?>/Our_Rooms/image/room1.jpeg">
        <div class="description">
          <h2>Double Room </h2>
          <p><span> 506.96 &#36; </span> /Pernight</p>
          <table>
            <tr>
              <td>Size:</td>
              <td>30 ft</td>
            </tr>
            <tr>
              <td>Capacity:</td>
              <td> Max persion 2</td>
            </tr>
            <tr>
              <td>Bed:</td>
              <td>King Beds
              </td>
            </tr>
            <tr>
              <td> Services:</td>
              <td>Wifi, Television,<br><br> Bathroom,...</td>
            </tr>
          </table>
          <a href="#">more details</a>
        </div>
      </div>
      <div class="room2 room">
        <img class="img-responsiv img-resize" src="<?php echo get_template_directory_uri(); ?>/Our_Rooms/image/room2.jpeg">
        <div class="description">
          <h2>Room With View</h2>


          <p><span> 272.32 &#36; </span> /Pernight</p>
          <table>
            <tr>
              <td>Size:</td>
              <td> 30 ft</td>
            </tr>
            <tr>
              <td>Capacity:</td>
              <td>Max persion 3</td>
            </tr>
            <tr>
              <td>Bed:</td>
              <td>King Beds
              </td>
            </tr>
            <tr>
              <td>Services: </td>
              <td>Wifi, Television,<br><br> Bathroom,...</td>
            </tr>
          </table>
          <a href="#">more details</a>

        </div>
      </div>
      <div class="room3 room">
        <img class="img-responsiv img-resize" src="<?php echo get_template_directory_uri(); ?>/Our_Rooms/image/room3.jpeg">
        <div class="description">
          <h2>Premium King Room</h2>
          <p><span> 674.29 &#36; </span> /Pernight</p>
          <table>
            <tr>
              <td>Size:</td>
              <td> 30 ft</td>
            </tr>
            <tr>
              <td>Capacity:</td>
              <td> Max persion 2</td>
            </tr>
            <tr>
              <td>Bed:</td>
              <td>King Beds
              </td>
            </tr>
            <tr>
              <td>Services: </td>
              <td>Wifi, Television,<br><br> Bathroom,...</td>
            </tr>
          </table>
          <a href="#">more details</a>

        </div>
      </div>
      <div class="room4 room">
        <img class="img-responsiv img-resize" src="<?php echo get_template_directory_uri(); ?>/Our_Rooms/image/room4.jpeg">
        <div class="description">
          <h2>Deluxe Room</h2>
          <p><span> 515.89 &#36;</span> /Pernight </p>
          <table>
            <tr>
              <td>Size:</td>
              <td> 30 ft</td>
            </tr>
            <tr>
              <td>Capacity:</td>
              <td>Max persion 2</td>
            </tr>
            <tr>
              <td>Bed:</td>
              <td>King Beds
              </td>
            </tr>
            <tr>
              <td>Services: </td>
              <td>Wifi, Television,<br><br> Bathroom,...</td>
            </tr>
          </table>
          <a href="#">more details</a>

        </div>
      </div>
      <div class="room5 room">
        <img class="img-responsiv img-resize" src="<?php echo get_template_directory_uri(); ?>/Our_Rooms/image/room5.jpeg">
        <div class="description">
          <h2>Luxury Room </h2>

          <p><span> 335.71 &#36; </span> /Pernight</p>
          <table>
            <tr>
              <td>Size:</td>
              <td> 30 ft</td>
            </tr>
            <tr>
              <td>Capacity:</td>
              <td>Max persion 3</td>
            </tr>
            <tr>
              <td>Bed:</td>
              <td> King Beds</td>

            </tr>
            <tr>
              <td>Services: </td>
              <td>Wifi, Television, <br><br>Bathroom,...</td>
            </tr>
          </table>
          <a href="#">more details</a>

        </div>
      </div>
      <div class="room5 room">
        <img class="img-responsiv img-resize" src="<?php echo get_template_directory_uri(); ?>/Our_Rooms/image/room6.jpeg">
        <div class="description">
          <h2>Family Room</h2>
          <p><span> 672.32 &#36; </span> /Pernight</p>
          <table>
            <tr>
              <td>Size:</td>
              <td> 30 ft</td>
            </tr>
            <tr>
              <td>Capacity:</td>
              <td>Max persion 5</td>
            </tr>
            <tr>
              <td>Bed:</td>
              <td>King Beds</td>
            </tr>
            <tr>
              <td>Services: </td>
              <td>Wifi, Television,<br><br> Bathroom,...</td>
            </tr>
          </table>
          <a href="#">more details</a>

        </div>
      </div>
    </div>
  </section>

  <!-- end of rooms -->

  <!-- ABOUT US -->
  <div class="content1">
    <div class="cont_img">
      <img class="img1" src="<?php echo get_template_directory_uri(); ?>/img/cont1.jpg">
      <img class="img2" src="<?php echo get_template_directory_uri(); ?>/img/cont2.jpg">
    </div>
    <div class="cont_text">
     
      <h1> <span> about</span> us</h1>
      <p>In the heart of the ochre city, in the popular Hivernage district,
        the Dellarosa <br> Boutique-Hotel and Spa enjoys an exceptional geographical location.
        Close <br> to all major points of interest including the centre of Guéliz and only <br> a 10-minute walk
        from the famous Place Jemae El Fna... </p>
      <a href="#">learn more </a>
    </div>
  </div>
  <div class="content2">
    <video autoplay muted loop>
      <source src="<?php echo get_template_directory_uri(); ?>/img/video.mp4" type="video/mp4">
    </video>
  </div>
<!-- end of about -->

  <!-- GALLERY -->

  <div class="cont_ainer">
    <div class="gallery">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/img5.jpg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="images"><img src="<?php echo get_template_directory_uri(); ?>/img/icons8-instagram-50.png"></div>
      </div>
    </div>


    <div class="gallery">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/img2.jpeg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="images"><img src="<?php echo get_template_directory_uri(); ?>/img/icons8-instagram-50.png"></div>

      </div>
    </div>
    <div class="gallery">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/img3.jpeg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="images"><img src="<?php echo get_template_directory_uri(); ?>/img/icons8-instagram-50.png"></div>

      </div>
    </div>
    <div class="gallery">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/img4.jpeg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="images"><img src="<?php echo get_template_directory_uri(); ?>/img/icons8-instagram-50.png"></div>

      </div>
    </div>
    <div class="gallery">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/img1.jpeg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="images"><img src="<?php echo get_template_directory_uri(); ?>/img/icons8-instagram-50.png"></div>

      </div>
    </div>

  </div>
  <!-- end of gallery -->
  <!-- footer -->
  <footer>
    <div class="foot_con">
      <div class="adrs fo_m">
        <h3>Address</h3>
        <p>200, Green road, Mongla,</p>
        <p>New Yor City USA</p>
        <a href="./Contact/contact.php">Get Direction</a>

      </div>




      <div class="resrv fo_m">
        <h3> Reservation</h3>
        <p> 0624-320271</p>
        <p>reservation@gmail.com</p>
      </div>



      <div class="nave fo_m">
        <h3>Navigation</h3>
        <a href="#index"> Home</a>
        <a href="<?php echo get_template_directory_uri() . '/Our_Rooms/our_rooms.php'; ?>"> our rooms</a>
        <a href="<?php echo get_template_directory_uri() . '/about_us/about.php';?>">about us</a>

      </div>



      <div class="newsl">
        <h3>Newsletter</h3>
        <form>
          <input type="email" name="email" id="email" placeholder="Enter your mail">
          <button type="button">sign up</button>
        </form>
        <p>Subscribe newsletter to get updates</p>
      </div>
    </div>
    <div class="foo_cpyr">
      <div>
        <p>Copyright ©2022 Montana Hotels Guides by  <a href="#"
            style="color: rgb(102, 174, 252);">FARES</p>
      </div>
      <div class="copy_socia">
        <a href="#faceboock"><img src="<?php echo get_template_directory_uri() .'/images/faceboock.png';?>"></a>
        <a href="#twitter"><img src="<?php echo get_template_directory_uri() .'/images/twitter.png;'?>"></a>
        <a href="#instagram"><img src="<?php echo get_template_directory_uri() .'/images/instagram.png;'?>"></a>
      </div>

    </div>
  </footer>
  <?php  get_footer() ?>
  <!-- end of footer -->


</body>

</html>