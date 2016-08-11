function myColorFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function mySizeFunction() {
    document.getElementById("Size").classList.toggle("show");
}

function myMoneyFunction() {
    document.getElementById("Money").classList.toggle("show");
}

function myMoney1Function() {
    document.getElementById("Money1").classList.toggle("show");
}

function myLanguageFunction() {
    document.getElementById("Language").classList.toggle("show");
}

function myFAQFunction() {
    document.getElementById("FAQ").classList.toggle("show");
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

window.onclick = function(event) {
  if (!event.target.matches('.dropmy')) {

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

$(document).ready(function () {
  $('#top-slider').bxSlider({
    auto: true,
    nextSelector: '#top-slider-right',
    prevSelector: '#top-slider-left',
    nextText: ' ',
    prevText: ' ',
    autoControls: false
  });

  $('#bottom-slider').bxSlider({
    auto: true,
    nextSelector: '#bottom-slider-right',
    prevSelector: '#bottom-slider-left',
    nextText: ' ',
    prevText: ' ',
    autoControls: false,
    pagerCustom: '#bottom-slider-pager'
  });
  $('#carousel').bxSlider({
    mode: 'vertical',
    slideWidth: 258,
    minSlides: 4,
    maxSlides: 4,
    slideMargin: 10,
    moveSlides: 1,
    nextSelector: '#carousel-right',
    prevSelector: '#carousel-left',
    nextText: ' ',
    prevText: ' '
  });
});
