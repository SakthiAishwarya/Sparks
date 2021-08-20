<?php 

session_start();
include 'connection.php';

$q="select * from customers";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>

<html>
<head>
	<title>
   Customer Details
	</title>
    <title>LifeStyle Stores</title>
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
		width: 80%;
        font-weight:bold ;
        color:darkgreen;
        
		}

		h2{
		font-family: monospace;
		font-size:37px;
		}
		
		td, th {
		border: 2px solid black;
		border-radius: 1px;
		text-align: center;
		padding: 15px;
		}

		tr:nth-child(odd) {
		background-color: gold;
		}
        tr:nth-child(even){
            background-color: chocolate;
        }
        
	</style>
</head>

<body >
    <?php
    require "./includes/header.php";
    ?>
	
<br>	  
    <h2 style="color:brown;text-align: center;font-family: cursive;">Customer Details</h2>
    <table class="flat-table flat-table-1" align=center style="font-family: serif;color: black; font-weight:bold;">
		<thead>
			<th>CUSTOMER ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>BALANCE</th>
		</thead>
		<tbody>
		<tr align = center>
				
			<?php  
				while($row=mysqli_fetch_array($result)){
			?>
			
			<td><?php echo  $row["C_ID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
		<tr align = center>
	<?php }
	?>
		</tr>

        
		</tbody>
	</table>
<?php
require "./includes/footer.php";
?>	
	
</body>
</html>