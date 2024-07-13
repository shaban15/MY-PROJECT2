<?php include "INCLUDES/header.php"  ?>
<?php include "INCLUDES/navbar.php"  ?><br><br><br><br><br><br>

<section class="fun2">
    <div class="fun-img " id="funimgBox">
        <button class="fun2but1"><a href="make payments.php">BUY</a></button><BR>
        <img src="IMG\fun1.jpg" id="funimg" >
        <span onclick="closefunimg()">X</span>
        <button class="fun2but2" onclick="alertuser()"><a href="add to cart.php">ADD TO CART</a></button>
    </div>
    <div class="fundiv1">
        <img src="IMG\fun1.jfif" onclick="openfunimg(this.src)">
        <img src="IMG\fun2.jfif" onclick="openfunimg(this.src)">
        <img src="IMG\fun3.jpeg" onclick="openfunimg(this.src)">
        <img src="IMG\fun4.jpg" onclick="openfunimg(this.src)">
        <img src="IMG\fun5.jpg" onclick="openfunimg(this.src)">
        <img src="IMG\fun6.jfif" onclick="openfunimg(this.src)">
        <img src="IMG\fun7.jpg" onclick="openfunimg(this.src)">
        <img src="IMG\fun8.jfif" onclick="openfunimg(this.src)">
    </div>

    <script>
        var funimgBox =document.getElementById("funimgBox");
var funimg =document.getElementById("fashimg");

function openfunimg (pic){
    funimgBox.style.display ="flex";
    funimg.src = pic;
}

function closefunimg(){
    funimgBox.style.display ="none";
}

function alertuser(){
    alert("ADDED");
}
</script>

</section>

<?php include "INCLUDES/footer.php"  ?>