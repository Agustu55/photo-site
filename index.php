<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
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
      <?php include 'all_pics.php';?>
    </div>
  </body>
</html>