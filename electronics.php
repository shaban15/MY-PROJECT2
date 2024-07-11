<?php include "INCLUDES/header.php"  ?>
<?php include "INCLUDES/navbar.php"  ?><br><br><br><br><br><br>

<div class="electronics">
    <section class="elec1">
        <p>NEED ELECTRONICS?? WE GOT YOU COVERED!</P>
    </section>
    <section class="elec2">
    <div class="elec-img " id="elecimgBox">
        <button class="elec2but1"><a href="make payments.php">BUY</a></button><BR>
        <img src="IMG\blender.jfif" id="elecimg" >
        <span onclick="closeelecimg()">X</span>
        <button class="elec2but2" onclick="alertuser()"><a href="add to cart.php">ADD TO CART</a></button>
    </div>
        <div class="elecdiv1">
         <img src="IMG\blender.jfif" onclick="openelecimg(this.src)">  
         <img src="IMG\elecjug.jfif" onclick="openelecimg(this.src)"> 
         <img src="IMG\eleckettle.jfif"  onclick="openelecimg(this.src)"> 
         <img src="IMG\fridge.png"  onclick="openelecimg(this.src)"> 
         <img src="IMG\microwave.jpg"  onclick="openelecimg(this.src)"> 
         <img src="IMG\mixer.jpg"  onclick="openelecimg(this.src)"> 
         <img src="IMG\waterdispenser.jfif" onclick="openelecimg(this.src)">  
        </div>
    </section>
</div>
<script>
    
  var elecimgBox =document.getElementById("elecimgBox");
var elecimg =document.getElementById("elecimg");

function openelecimg (pic){
    elecimgBox.style.display ="flex";
    elecimg.src = pic;
}

function closeelecimg(){
    elecimgBox.style.display ="none";
}

function alertuser(){
    alert("ADDED");
}
</script>
<?php include "INCLUDES/footer.php"  ?>