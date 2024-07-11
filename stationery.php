<?php include "INCLUDES/header.php"  ?>
<?php include "INCLUDES/navbar.php"  ?><br><br><br><br><br><br>

<div class="stationery">
    <section class="stat1">
        <p>NEED STATIONERY?? WE GOT YOU COVERED!</P>
    </section>
    <section class="stat2">
    <div class="stat-img " id="statimgBox">
        <button class="stat2but1"><a href="make payments.php">BUY</a></button><BR>
        <img src="IMG\erasers.jfif" id="statimg" >
        <span onclick="closestatimg()">X</span>
        <button class="stat2but2" onclick="alertuser()"><a href="add to cart.php">ADD TO CART</a></button>
    </div>

        <div class="statdiv1">
            <img src="IMG\erasers.jfif" onclick="openstatimg(this.src)">
            <img src="IMG\erasers1.jfif" onclick="openstatimg(this.src)">
            <img src="IMG\pens1.jfif" onclick="openstatimg(this.src)">
            <img src="IMG\pens4.png" onclick="openstatimg(this.src)">
            <img src="IMG\pens3.jpg" onclick="openstatimg(this.src)">
            <img src="IMG\pens2.jpg" onclick="openstatimg(this.src)">
            <img src="IMG\pens5.jfif" onclick="openstatimg(this.src)">
            <img src="IMG\erasers.jfif" onclick="openstatimg(this.src)">
            <img src="IMG\erasers1.jfif" onclick="openstatimg(this.src)">
            <img src="IMG\sharp.png" onclick="openstatimg(this.src)">
            <img src="IMG\sharp1.jfif" onclick="openstatimg(this.src)">
            <img src="IMG\sharp2.jfif" onclick="openstatimg(this.src)">
            <img src="IMG\station1.jfif" onclick="openstatimg(this.src)">
            <img src="IMG\station2.jfif" onclick="openstatimg(this.src)">
            <img src="IMG\station3.jpg" onclick="openstatimg(this.src)">
            <img src="IMG\file.jpg" onclick="openstatimg(this.src)">
            <img src="IMG\tacks.jfif" onclick="openstatimg(this.src)">
            <img src="IMG\rulers.jfif" onclick="openstatimg(this.src)">
            <img src="IMG\file2.jpg" onclick="openstatimg(this.src)">
            <img src="IMG\tacks1.jfif" onclick="openstatimg(this.src)">
        </div>
        

 
 <script> 

var statimgBox =document.getElementById("statimgBox");
var statimg =document.getElementById("statimg");

function openstatimg (pic){
    statimgBox.style.display ="flex";
    statimg.src = pic;
}

function closestatimg(){
    statimgBox.style.display ="none";
}

function alertuser(){
    alert("ADDED");
}
 </script> 

    </section>
</div>

<?php include "INCLUDES/footer.php"  ?>