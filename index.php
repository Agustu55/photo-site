<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title></title>
  </head>
  <body>
    <div class="header">
      <h1>gus stevens</h1>
      <ul>
        <li><a href="about.html">about</a></li>
        <li><a href="gallery.html">gallery</a></li>
        <li><a href="prints.html">prints</a></li>
      </ul>
      <p>welcome to my website. it's not that good but it has some of my pictures and i'm stoked about that.</p>
    </div>

    <div class="body">
      <p><a href="gallery.html" >my photos</a> &lt- click here to look at them all </p>
    </div>

    <div class="select-photos">
      <h4>here are some of my favorites</h4>

      <div class="container">
        <!-- The Modal Trigger -->
        <img id="img1" class="img1" src = img/m1.jpg alt="image 1">
        <!-- The Modal Trigger -->
        <img id="img2" class="img2" src = img/m2.jpg alt="image 2">

        <img class="img3" src = img/s3.jpg alt="Image 3">
        <img class="img4" src = img/s4.jpg alt="Image 4">
        <img class="img5" src = img/s5.jpg alt="Image 5">
        <img class="img6" src = img/s6.jpg alt="Image 6">
        <img class="img7" src = img/s7.jpg alt="Image 7">
        <img class="img8" src = img/s8.jpg alt="Image 8">
        <img class="img9" src = img/s9.jpg alt="Image 9">
      </div>

      <div class="modal-container">
        <!-- Modal 1 -->
        <div id="modal1" class="modal">
          <span class="close1"></span>
          <img id="modalimg1" class="modal-content">
        </div>

        <!-- Modal 2 -->
        <div id="modal2" class="modal">
          <span class="close2"></span>
          <img id="modalimg2" class="modal-content">
        </div>

        <script src="js/loadImage.js"></script>



      </div>
  </body>
</html>






<!-- <div class="container">
  <div class="img1">1</div>
  <div class="img2">2</div>
  <div class="img3">3</div>
  <div class="img4">4</div>
  <div class="img5">5</div>
  <div class="img6">6</div>
  <div class="img7">7</div>
  <div class="img8">8</div>
  <div class="img9">9</div>
</div> -->
