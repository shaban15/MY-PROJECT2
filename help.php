
<?php include "INCLUDES/header.php"  ?>
<?php include "INCLUDES/navbar.php"  ?><br><br><br><br><br><br>

<div class="help">
  <section class="helpsec1">
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Orders and Delivery</button>
        <div id="myDropdown" class="dropdown-content">
          <a href="price&product">Price and product</a>
          <a href="order&placement">Order placement</a>
          <a href="delivery&tracking">Delivery and tracking</a>
    </div>
    </div>

    <div class="dropdown1">
      <button onclick="myFunction1()" class="dropbtn1">Payment and Account</button>
      <div id="myDropdown1" class="dropdown-content1">
        <a href="making payments">How to make payments</a>
        <a href="accounts and reg">Account and registration</a>
        <a href="paym options">Payment options</a>
      </div>
    </div>

    <div class="dropdown2">
      <button onclick="myFunction2()" class="dropbtn2">Return and refund</button>
      <div id="myDropdown2" class="dropdown-content2">
        <a href="return guide">Return guide</a>
        <a href="warranty">Warranty</a>
        <a href="return">Return policies</a>
      </div>
    </div>
  </section>


  <section class="helpsec2" >
   <form class ="form1">
   <h4>Let us get to know you problem</h4><br>
   <input type="text" class="in1" placeholder="Input your name" id="name"><br><br>
   <input type="text" class="in2" placeholder="Input email" id="email"><br><br>
   <input type="text" class="in3" placeholder="Input your telephone number" id="phone number"><br><br>
   <input type="text holder" class="in4" placeholder="how can we help you" id="tholder"><br><br>
   <button class="submit">Submit</button>
   <button class="reset">Cancel</button>
   </form>
  </section>
</div>

<?php include "INCLUDES/footer.php"  ?>