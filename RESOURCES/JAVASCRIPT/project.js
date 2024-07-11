// help page js
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdown = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdown.length; i++) {
      var openDropdown = dropdown[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show1");
  }

  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn1')) {
      var dropdown1 = document.getElementsByClassName("dropdown-content1");
      var i;
      for (i = 0; i < dropdown1.length; i++) {
        var openDropdown1 = dropdown1[i];
        if (openDropdown1.classList.contains('show1')) {
          openDropdown1.classList.remove('show1');
        }
      }
    }
  }

  function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show2");
  }

  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn2')) {
      var myDropdown2 = document.getElementsByClassName("dropdown-content2");
      var i;
      for (i = 0; i < myDropdown2.length; i++) {
        var openDropdown2 = myDropdown2[i];
        if (openDropdown2.classList.contains('show2')) {
          openDropdown2.classList.remove('show2');
        }
      }
    }
  }


  var sportimgBox =document.getElementById("sportimgBox");
var sportimg =document.getElementById("sportimg");

function opensportimg (pic){
    sportimgBox.style.display ="flex";
    sportimg.src = pic;
}

function closesportimg(){
    sportimgBox.style.display ="none";
}

function alertuser(){
    alert("ADDED");
}