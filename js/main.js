const selectElement = function (element){
    return document.querySelector(element);
}

let menuToggler = selectElement('.menuToggle');
let body = selectElement('body');

menuToggler.addEventListener('click', function(){
    body.classList.toggle('open');
});



function togglePop(){
    popupBox.classList.toggle('open-popup');
    toBlur.classList.toggle('blur-body');

};

function to_position(divid){
    $('html, body').animate({scrollTop:$(divid).position().top - 50 }, '500');
}


$(".home-link").click(function(){
    to_position('#home');    
  });

$(".about-link").click(function(){
    to_position('#about-us');    
  });
$(".contact-link").click(function(){
    to_position('#contact-us');    
  });
$(".quiz-link").click(function(){
    to_position('#quizzes');    
  });
