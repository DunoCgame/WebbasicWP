var posimg=0;

var slidesWive = document.getElementsByClassName("mySlides");
var slidesContainer = document.getElementById("ContainderSlideShow");


if(slidesWive.length<2){
	
	slidesContainer.style.display="none";
	
}else{
	
	slidesContainer.style.display="block";
}


function Slide(n){
	
	var slides = document.getElementsByClassName("mySlides");

		if (n >= slides.length){ posimg = 0}    
		  if (n < 0) {posimg = slides.length}
	  
			  for(var i=0; i<slides.length; i++){
					// slides[i].style.background = "blue";
					slides[i].style.display = "none";
			  }
			  
			  	  console.log("i",posimg);
				  console.log("slides.length",slides.length);
	
			  
			  // slides[posimg].style.background = "red";
			  slides[posimg].style.display= "block";
	

}
  function plusSlidesprev(n) {
  Slide( posimg += n);
 
}
 function plusSlidesnext(n) {
  Slide( posimg -= n);
 
}


Slide(posimg);

