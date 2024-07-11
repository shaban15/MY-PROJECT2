<?php include "INCLUDES/header.php"  ?>
<?php include "INCLUDES/navbar.php"  ?><br><br><br><br><br><br>

<div class="sporting">
    <section class="sport1">
        <p>A SPORTS PERSON?? WE GOT YOU COVERED!</P>
    </section>
    <section class="sport2">
    <div class="sport-img " id="sportimgBox">
        <button class="sport2but1"><a href="make payments.php">BUY</a></button><BR>
        <img src="IMG\sport1.jfif" id="sportimg" >
        <span onclick="closesportimg()">X</span>
        <button class="sport2but2" onclick="alertuser()"><a href="add to cart.php">ADD TO CART</a></button>
    </div>
    <div class="sportdiv1">
        <img src="IMG\sport1.jfif" onclick="opensportimg(this.src)">
        <img src="IMG\sport3.jfif" onclick="opensportimg(this.src)">
        <img src="IMG\sport4.jpg" onclick="opensportimg(this.src)">
        <img src="IMG\sport5.jfif" onclick="opensportimg(this.src)">
        <img src="IMG\sport6.jpg" onclick="opensportimg(this.src)">
        <img src="IMG\sport7.jfif" onclick="opensportimg(this.src)">
        <img src="IMG\sport8.jfif" onclick="opensportimg(this.src)">
        <img src="IMG\sport9.jfif" onclick="opensportimg(this.src)">
        <img src="IMG\sport10.jfif" onclick="opensportimg(this.src)">
        <img src="IMG\sport11.jfif" onclick="opensportimg(this.src)">
        <img src="IMG\sport12.jfif" onclick="opensportimg(this.src)">
        <img src="IMG\sport13.jfif" onclick="opensportimg(this.src)">
    </div>
</div>
<script>
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
</script>
<?php include "INCLUDES/footer.php"  ?>