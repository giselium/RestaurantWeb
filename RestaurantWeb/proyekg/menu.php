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
		
	</style>
</head>
<body background="templates/green.jpg" style="background-size:cover">

	<nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark">
    <div class="collapse navbar-collapse" id="myNavbarToggler2">
      <ul class="nav justify-content-center">
  			<div class="dropdown ">
  				<button class="btn btn-secondary dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 25px; background-color: transparent;"> Menu </button>
  				<div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
    				<a href="#food" class="dropdown-item bg-dark text-white" href="#Foods"> Foods </a>
    				<a href="#snack" class="dropdown-item bg-dark text-white" href="#Snacks"> Snacks </a>
    				<a href="#drinks" class="dropdown-item bg-dark text-white" href="#Drinks"> Drinks </a>
  				</div>
				</div>
  			<button type="button" class="btn btn-secondary text-white" style="font-size: 25px;background-color: transparent;" data-toggle="modal" data-target="#exampleModalLong" > Checkout </button>
  			<a href="bookingmeja.php" class="btn btn-secondary text-white"style="font-size: 25px;background-color: transparent;"> Booking </a>
  			<a href="saran.php" class="btn btn-secondary text-white"style="font-size: 25px;background-color: transparent;"> Saran </a>
  			<a href="home.php" class="btn btn-secondary text-white"style="font-size: 25px;background-color: transparent;"> Exit </a>
			</ul>
    </div>
   </nav>

    <div class="modal fade " id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-dark text-white">
            <h5 class="modal-title" id="exampleModalLongTitle" style="font-size: 20px;">Checkout</h5>
            
            <?php
            $user=$_SESSION["login"];
                $q = $connect->prepare("SELECT dp.*,m.food_name
                FROM detail_pesanan dp
                INNER JOIN pesanan p ON (dp.id_pesanan=p.id)
                INNER JOIN menu m ON (dp.id_menu=m.id)
                WHERE p.status=? AND p.user=?");
            	
                $q->execute(['P', $user]);
            ?>
           
      		</div>
      		<div class="modal-body bg-dark text-white">
         		<table class="table table-bordered bg-dark text-white">
            	<thead>
            		<tr>
            			<th>
            					Food
            			</th>
            			<th>
            					Price
            			</th>
            			<th>
            					Qty
            			</th>
            			<th>
            					Subtotal
            			</th>
						<th>
						</th>
            		</tr>
            	</thead>
            	<tbody>

            		<?php
            				
                            foreach ($q->fetchAll() as $row)
            				{
            					?>		
	            					<tr>
	            						<td>
	            							<?php
	            										echo $row["food_name"];
	            							?>
	            						</td>
	            						<td style="text-align:right">
	            							<?php
	            										echo number_format($row["harga"]);
	            							?>
	            						</td>
	            						<td>
	            							<?php
	            										echo $row["jumlah"];
	            							?>
	            						</td>
	            						<td style="text-align:right">
	            							<?php
	            										echo number_format($row["jumlah"]*$row["harga"]);
	            							?>
	            						</td>
										<td>
											<a href="removefood.php?id=<?php echo $row["id"];?>"> Remove </a>
										</td>
	            					</tr>
            					<?php
            				}
            		?>

            		</tbody>
            </table>
      		</div>
      		<div class="modal-footer bg-dark text-white">
        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        		<a href="confirm.php?confirm=ovo" class="btn btn-primary">Pay With OVO</a>
        		<a href="confirm.php?confirm=gopay" class="btn btn-primary">Pay With GoPay</a>
      		</div>
    		</div>
  		</div>
		</div>
    
		<div id="templateF" style="display:none">
			<div class ="col-md-4" style="padding:10px">
				<div class="card">
					<img src="xGambar" style="height:150px" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">xNama</h5>
						<form action="simpanbelanja.php" method="POST">
							<input type="hidden" name="id" value="xid"/>
							<p class="card-text"><input style="width:80px" type="number" name="jumlah">
							<button class="btn btn-primary">Buy</button>
				  	</form>
					</div>
				</div>
			</div>
		</div>

    <div id = "food">
    	<div class="row d-flex justify-content-center">
    		<div class="col-md-6" style = "background-color: transparent;">
    			<center>
						<h style = "font-size: 50px; color: white;"> Foods </h>
				</center>
				<hr>

				<div class="row" id="cfood">
				</div>
				
    		</div>
    	</div>
    </div>

    <div id = "snack">
    	<div class="row d-flex justify-content-center">
    		<div class="col-md-6" style = "background-color: transparent;">
    			<center>
						<h style = "font-size: 50px; color: white;"> Snacks </h>
				</center>
				<hr>

				<div class="row" id="csnack">
				</div>
				
    		</div>
    	</div>
    </div>

    <div id = "drinks">
    	<div class="row d-flex justify-content-center">
    		<div class="col-md-6" style = "background-color: transparent;">
    			<center>
						<h style = "font-size: 50px; color: white;"> Drinks </h>
				</center>
				<hr>

				<div class="row" id="cdrinks">
				</div>
				
    		</div>
    	</div>
    </div>
</body>

<script>

	$(document).ready(function()
		{
			var arrData=["food","snack","drinks"];
			for (var i=0;i<arrData.length;i++)
			{

				var param=arrData[i];
				$.ajax({
						type: "GET",
						url: "getmenu.php",
						data:{param},
						dataType:"json",
						success : function(result){
							var data=result.arr;
							var template=$("#templateF").html();

							var tempHTML="";
							for (var i=0;i<data.length;i++)
							{
								var tl=template;
								tl=tl.replace("xNama",data[i].food_name);
								tl=tl.replace("xid",data[i].id);
								tl=tl.replace("xGambar","Gambar/"+data[i].image);
								tempHTML=tempHTML+tl;
							}

							console.log("param "+result.param);
							$("#c"+result.param).html(tempHTML);
						}
				});	
			}
			
		});
	
</script>
<script>
        cart = [];
        text = '';
        function addtocart(nama, harga){
            list = [nama, harga];
            cart.push(list);
            var total=0;
            for (var i=0;i<cart.length;i++)
            {
                total=total+cart[i][1];
            }
            $("#ttl").html("total :  $"+total);
            $("#sc").append("<div>"+nama+"  $"+harga+"</div>");
            $("#scA").val(JSON.stringify(cart));
        }
    </script>
</html>