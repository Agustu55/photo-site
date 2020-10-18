// Get the Modal
var modal1 = document.getElementById("modal1");
var modal2 = document.getElementById("modal2");


// Get the image from the document
var img1 = document.getElementById("img1");
var img2 = document.getElementById("img2");


// get the modal image content
var modalImg1 = document.getElementById("modalimg1");
var modalImg2 = document.getElementById("modalimg2");


// function to add image to the modal on click
img1.onclick = function() {
  modal1.style.display = "block";
  modalImg1.src = this.src;
}

img2.onclick = function() {
  modal2.style.display = "block";
  modalImg2.src = this.src;
}

// Get the <span> element that closes the modal
var close1 = document.getElementsByClassName("close1")[0];
var close2 = document.getElementsByClassName("close2")[0];


// when the user clicks on <span> (x), close the modal
close1.onclick = function() {
  modal1.style.display = "none";
}
close2.onclick = function() {
  modal2.style.display = "none";
}
