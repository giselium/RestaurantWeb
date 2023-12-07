<?php
	include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<style type="text/css">
		
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		table td {
			transition: all .5s;
		}

		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th,
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}
	</style>
</head>
<body background="templates/green.jpg" style="background-size:cover">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      	<div class="collapse navbar-collapse" id="myNavbarToggler2">
        	<ul class="nav justify-content-center">
  				<a href="admin.php" class="btn btn-secondary text-dark"style="font-size: 25px;background-color: transparent;"> Back </a>
  				<a href="home.php" class="btn btn-secondary text-dark"style="font-size: 25px;background-color: transparent;"> Logout </a>
			</ul>
    	</div>
    </nav>

    <br>
    <center>
    	<h style = "font-size: 50px; color: white;"> Booking Meja </h>
	</center>
	<br>
	<br>
	
    <div class="container">
		<div class = "col-md-6">

  		    <?php
  		    	for ($i=0;$i<15;$i++)
  		    	{
  		    		?>
  		    			<button onclick="book(<?php echo $i+1;?>)" id="meja<?php echo ($i+1);?>" class = "" style = "height: 100px; width: 100px;"> Table <?php echo ($i+1)?> </button>
  		    		<?php
  		    	}
  		    ?>
  			
		</div>

		<div class = "col-md-3">    		
  			<div class="card bg-dark text-white" style="height: 200px; width: 250px;">
  				<img class="card-img-top" src="red.jpg" alt="Card image cap">
  				<div class="card-body">
  					<center>
    					<p class="card-text"> Meja Reserved / 0</p>
    				</center>
  				</div>
			</div>
		</div>
		<div class = "col-md-3">    		
			<div class="card bg-dark text-white" style="height: 200px; width: 250px;">
  				<img class="card-img-top" src="green.jpg" alt="Card image cap">
  				<div class="card-body">
  					<center>
    					<p class="card-text"> Meja Kosong / 1</p>
    				</center>
  				</div>
			</div>
		</div>
	</div>     	
	<br>
	<br>
	<div class ="container">
		<table class="data-table bg-dark text-white" style="background: transparent;">
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Meja</th>
				<th>Status</th>
			</tr>
			</thead>
			<tbody>

			<?php
				include('lihatmeja.php');
				$no = 1;
				while ($row = mysqli_fetch_array($query))
				{	
				echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['Id_user'].'</td>
					<td>'.$row['id_meja'].'</td>
					<td>'.$row['status'].'</td>
					</tr>';
				$no++;
				}?>

			</tbody>
		</table>
	</div>

	<script>

		<?php
			$user=$_SESSION["user"];
		?>
		var arrMeja=[];
		var user=<?php echo $user["id"];?>;
		function book(id)
		{
			
				$.ajax({
						type: "GET",
						url: "bookmeja2.php",
						data:{id},
						dataType:"json",
						success : function(result){
							if (result.status=="0")
							{
								$("#meja"+result.id).css("background-color","#FF0000");	
							}
							else {
								$("#meja"+result.id).css("background-color","#00FF00");	
							}
							
						}
				});	
			
		}

		$(document).ready(function()
			{
				$.ajax({
						type: "GET",
						url: "getmeja.php",
						dataType:"json",
						success : function(result){
							console.log(result);
							var data=result.arr;
							for (var i=0;i<data.length;i++)
							{
								if (data[i].status=='0')
								{
									arrMeja[data[i].id_meja]=0;

									$("#meja"+data[i].id_meja).css("background-color","#FF0000");	
								}
								else {
									arrMeja[data[i].id_meja]=1;

									$("#meja"+data[i].id_meja).css("background-color","#00FF00");	
								}
								
							}
						}
				});	
			});

	</script>

</body>
</html>