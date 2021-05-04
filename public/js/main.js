const menuOpen = document.querySelector("#menu-show");
const menuCancel = document.querySelector("#menu-cancel");
const content = document.querySelector(".content");

menuOpen.addEventListener('click', ()=>{
    content.classList.add("active");
    menuOpen.classList.remove("show");
    document.querySelector('#menu-show').style.display = 'none';
});

menuCancel.addEventListener('click', ()=>{
    document.querySelector('#menu-show').style.display = 'block';
    content.classList.remove("active");
    menuOpen.classList.remove("show");
});

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }





/*====== slideshow =========*/
const slideImage = document.querySelectorAll('.slide-image');
const slideContainer = document.querySelector('.slides-container');
const nextBtn = document.querySelector('.next-btn');
const prevBtn = document.querySelector('.prev-btn');
const navDots = document.querySelector('.navigation-dots');

let numberOfImages = slideImage.length;
let slideWidth = slideImage[0].clientWidth;
let currentSlide = 0;

//set up  the slider

function init(){
    /*
    slideImage[0] = 0
    slideImage[1] = 100%
    slideImage[2] = 200%
    */

    slideImage.forEach((img, i)=>{
        img.style.left = i * 100 + "%";
    });

    slideImage[0].classList.add("active");

    createNavDots();
}

init();

//create nav Dot

function createNavDots(){
    for(let i =0; i < numberOfImages; i++){
        const dot = document.createElement('div');
        dot.classList.add("single-dot");
        navDots.appendChild(dot);

        dot.addEventListener('click' , ()=>{
            goToSlide(i);
        })
    }
    navDots.children[0].classList.add("active")
}

//next btn
nextBtn.addEventListener('click', ()=>{
    if(currentSlide >= numberOfImages - 1){
        goToSlide(0);
        return;
    }
    currentSlide++;
    goToSlide(currentSlide);
})

function goToSlide(slideNumber){
    slideContainer.style.transform = "translateX(-" + slideWidth * slideNumber + "px)";

    currentSlide = slideNumber;
    setActiveClass();
}

//prev btn
prevBtn.addEventListener('click', ()=>{
    if(currentSlide <= 0){
        goToSlide(numberOfImages - 1);
        
        return;
    }
    currentSlide--;
    goToSlide(currentSlide);
})

function goToSlide(slideNumber){
    slideContainer.style.transform = "translateX(-" + slideWidth * slideNumber + "px)";

    currentSlide = slideNumber;
    setActiveClass();
}

//navigation Dots
function setActiveClass(){
    //set active class for slide Images

    let currentActive = document.querySelector(".slide-image.active");
    currentActive.classList.remove("active");
    slideImage[currentSlide].classList.add("active");

    //set active class for slide Images

    let currentDot = document.querySelector(".single-dot.active");
    currentDot.classList.remove("active");
    navDots.children[currentSlide].classList.add("active");

}

/*====== slideshow =========*/