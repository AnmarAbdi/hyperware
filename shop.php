<?php
  include 'header.php';
  ?>
<head>
	<link rel="stylesheet" href="shop.css">
		

</head>
<body>
	<?php
	
	
	?>
	





<button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
  <form method="post" action="ordered.php" class="form-container">
    <h1>Order Item</h1>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>

    <label for="psw"><b>Card Number</b></label>
    <input type="password" placeholder="Enter Card Number" name="psw" required>

	<label for="address"><b>CVV</b></label>
    <input type="password" placeholder="Enter CVV" name="psw" required>

    <button type="submit" class="btn">Place Order</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>






<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "350px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
	function openLogin() {
		document.getElementById("myLogin").style.width = "350px";
	}

	function closeLogin() {
		document.getElementById("myLogin").style.width = "0";
	}
	function openForm() {
  		document.getElementById("myForm").style.display = "block";
	}

	function closeForm() {
		document.getElementById("myForm").style.display = "none";
	}
</script>


<?php
        include "footer.php";
    ?>