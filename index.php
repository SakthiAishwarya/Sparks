<?php
	// if already logged in, go to products page
		require "connection.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>BANK</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			require './includes/header.php';
		?>
		<center>
			<br>
			<br>
    <div class="container">
      <div class="jumbotron">
          <h2>WE TAKE YOUR SECURITY SERIOUSLY !</h2>
          <p>Peace of mind for you as we have the most<br> advanced technology & protection</p>
          
      </div>
    </div>
  <br>
  <br>
  <br>
  <div class="container">
    <!---first row-->
    
    <div class="row text-center">
        <div class="col-md-3  col-sm-6">
            <div class="thumbnail">
                <img src="./images/transaction.jpg" alt="">
                <div class="caption">
                  <center>
                    <button class="btns btn-danger"><a href="transfermoney.php">Transaction</a></button>
                  </center>
                </div>
            </div>
        </div>
        <div class="col-md-3  col-sm-6">
          <div class="thumbnail">
              <img src="./images/customer1.png" alt="">
              <div class="caption">
                <center>
                  <button class="btns btn-danger"><a href="customer.php">Customer</a></button>
                </center>
              </div>
          </div>
        </div>
      <div class="col-md-3  col-sm-6">
        <div class="thumbnail">
            <img src="./images/bill.png" alt="">
            <div class="caption">
              <center>
                <button class="btns btn-danger"><a href="transactionhistory.php">History</a></button>
              </center>
            </div>
        </div>
      </div>
    <div class="col-md-3  col-sm-6">
      <div class="thumbnail">
          <img src="./images/save.png" alt="">
          <div class="caption">
            <center>
              <button class="btns btn-danger"><a href="savings.php">Savings</a></button>
            </center>
          </div>
      </div>
   </div>
   </div>
  </div>    
      
    </center>
	  <?php
	  require "./includes/footer.php";
	  ?>
		
		</body>
</html>