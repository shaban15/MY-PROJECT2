<?php include "INCLUDES/header.php"  ?>
<?php include "INCLUDES/navbar.php"  ?><br><br><br><br><br><br>

<div class="machinery">
    <section class="mach1">
        <p>NEED MACHINES?? WE GOT YOU COVERED!</P>
    </section>
    <section class="mach2">
    <div class="mach-img " id="machimgBox">
        <button class="mach2but1"><a href="make payments.php">BUY</a></button><BR>
        <img src="IMG\mach1.jpg" id="machimg" >
        <span onclick="closemachimg()">X</span>
        <button class="mach2but2" onclick="alertuser()"><a href="add to cart.php">ADD TO CART</a></button>
    </div>
        <div class="machdiv1">
            <img src="IMG\mach1.jfif" onclick="openmachimg(this.src)">
            <img src="IMG\mach2.jfif" onclick="openmachimg(this.src)">
            <img src="IMG\mach3.jfif" onclick="openmachimg(this.src)">
            <img src="IMG\mach4.jfif" onclick="openmachimg(this.src)">
            <img src="IMG\mach5.jfif" onclick="openmachimg(this.src)">
            <img src="IMG\mach6.jfif" onclick="openmachimg(this.src)">
            <img src="IMG\mach7.jfif" onclick="openmachimg(this.src)">
            <img src="IMG\mach8.jfif" onclick="openmachimg(this.src)">
</div>

<script>
        var machimgBox =document.getElementById("machimgBox");
var machimg =document.getElementById("machimg");

function openmachimg (pic){
    machimgBox.style.display ="flex";
    machimg.src = pic;
}

function closemachimg(){
    machimgBox.style.display ="none";
}

function alertuser(){
    alert("ADDED");
}
</script>

</section>


<?php include "INCLUDES/footer.php"  ?>