function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  //-----------------------------------------------------------------//
//to set the first videos
  var slideIndex = 1;
  //to display the first videos
showSlides(slideIndex);

//to make the next and prev buttons works by adding or subtracts one
function plusSlides(n) {
  showSlides(slideIndex += n);
}



function showSlides(n) {
  var i;
   //method returns a collection of all elements with the class name.
  var slides = document.getElementsByClassName("mySlides");

  if (n > slides.length) {slideIndex = 1}   
  //working the preveous button
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
   // hides all elements with the class name "mySlides"
      slides[i].style.display = "none";  
  }
  //displays the element with the slideIndex
   slides[slideIndex-1].style.display = "block";  
  
}
//-----------------------------------------------------------------//

function validateform(){  
  var name=document.myform.userName.value;  
    if ( name==""){  
    alert("Name can't be blank");  
    return false;  
  }}
  function messagevalidattion(){  
    var message=document.myform.message.value;  
      if ( message==""){  
      alert("Story Section can't be Empty");  
      return false;  
    }}

  

  function CheckEmail(){
    var x=document.myform.userEmail.value;  
    var atposition=x.indexOf("@");  
    var dotposition=x.IndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
      alert("Please enter a valid e-mail address");  
      return false; } 

  }  
 
//-----------------------------------------------------------------//
  //add go to top button in main page

  var mybutton = document.getElementById("topbtn");

  // When the user scrolls down px from the top of the document, show the button
  //onscroll event
  window.onscroll = function() {scrollFunction()};
  
  function scrollFunction() {
    //scrollTop property sets or returns the number of pixels an element's content is scrolled
    //For HTML documents the returned object is the <html> element
    if ( document.documentElement.scrollTop > 100) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
        document.documentElement.scrollTop = 0;
  }

//-----------------------------------------------------------------//
  
  //add the animation section for the main text 
  //a ready library 
  var textWrapper = document.querySelector('.ml9 .letters');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
  
  anime.timeline({loop: true})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
  }).add({
    targets: '.ml9',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
  