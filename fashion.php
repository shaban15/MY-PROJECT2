<?php include "INCLUDES/header.php"  ?>
<?php include "INCLUDES/navbar.php"  ?><br><br><br><br><br><br>

    <section class="fash1">
        <p>A FASHION LOVER?? WE GOT YOU COVERED!</P>
    </section> 
    <section class="fash2">
    <div class="fash-img " id="fashimgBox">
        <button class="fash2but1"><a href="make payments.php">BUY</a></button><BR>
        <img src="IMG\fash1.jpg" id="fashimg" >
        <span onclick="closefashimg()">X</span>
        <button class="fash2but2" onclick="alertuser()"><a href="add to cart.php">ADD TO CART</a></button>
    </div>
        <div class="fashdiv1">
            <img src="IMG\fash1.jpg" onclick="openfashimg(this.src)">
            <img src="IMG\fash2.jpg" onclick="openfashimg(this.src)">
            <img src="IMG\fash3.jpg" onclick="openfashimg(this.src)">
            <img src="IMG\fash4.jfif" onclick="openfashimg(this.src)">
            <img src="IMG\fash5.jfif" onclick="openfashimg(this.src)">
            <img src="IMG\fash6.jfif" onclick="openfashimg(this.src)">
            <img src="IMG\fash7.jfif" onclick="openfashimg(this.src)">
            <img src="IMG\fash8.jfif" onclick="openfashimg(this.src)">
        </div>

<script>
        var fashimgBox =document.getElementById("fashimgBox");
var fashimg =document.getElementById("fashimg");

function openfashimg (pic){
    fashimgBox.style.display ="flex";
    fashimg.src = pic;
}

function closefashimg(){
    fashimgBox.style.display ="none";
}

function alertuser(){
    alert("ADDED");
}s
</script>

    </section>


 
<?php include "INCLUDES/footer.php"  ?>