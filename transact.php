<?php 

	session_start();
	include 'connection.php';

	if(isset($_GET['Name'])){
		$Name=$_GET['Name'];
	}

	$q="SELECT * From customers WHERE Name='$Name'";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	$_SESSION['senderName']=$Name;
?>

<html>
<head>
	<title>transact</title>
	    <!-- link to Bootstrap minified css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h1{
		font-family: sans-serif;
		font-size:40px;
		}
		
		td, th {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(odd) {
		background-color: cyan;	
		}
	</style>
</head>

<body >
<?php
require "./includes/header.php";
?>	
<br>
<br>
<br>
<br>
<br>

	<div>
		<h1 style="font-family:serif;text-align:center;color: orange;font-weight:bold;"><u><i>Account Details</i></u></h1>
		<table style="background-color:palegreen; font-weight:bold;">
           <th>CUSTOMER ID</th>
           <th>NAME </th>
           <th>EMAIL</th>
		   <th>CURRENT BALANCE</th>
           <tr>
		   
			<?php  
				$row=mysqli_fetch_array($result)
			?>
			
             
			<td><?php echo  $row["C_ID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
           </tr>

        </table>
	</div>
        
	<?php echo "<form method='post' action='transaction.php?Name=$Name'>"?>
    <br>
    <br>
    <br>
    <br>
	<h3 style="font-family: cursive;color: brown;text-align:center;">Select the user to whom you want to transfer money from the dropdown list</h3>
	<table border="0px" style="background-color:yellow;font-weight:bold;">
		<tr>
		<td>Transfer To:</td>
		<td><select name="user">
			<option>--Select--</option>
   
			<?php  
				$q1="select * from customers";
				$result1=mysqli_query($con,$q1);
				while($row=mysqli_fetch_array($result1)){
			?>

			<option value="<?php echo $row['Name']; ?>"> <?php echo $row["Name"]; ?></option>

			<?php }
			?>
			
            </select></td></tr> 
			<tr><td>Amount:</td><td><input type="text" name="Amount"></td></tr>
			<tr><td></td><td><input type="submit" name="submit" value="Submit" align=center style="margin-top: 10px; width:6em; height:2em; font-size:15px; background-color: skyblue; font-weight: bold;"></td></tr>
	</table>
</form>  
<?php
require "./includes/footer.php";
?>


</body>
</html>