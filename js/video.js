// JavaScript Document

function openModal() {
    document.getElementsByClassName("slides") = "block";
    console.log(1);
}

var timeout;
var test=0;
var control=0;
function currentSlide(n){
    if(test!=n){
        test=n;
    }else{
        control=n;
        test=0;
    }

    showSlides(slideIndex = n);
}

function showSlides(n){

        var i;
        var slides = document.getElementsByClassName("slides");

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
    if(control==0){
        slides[slideIndex - 1].style.display = "block";
    }
    control =0;
}

