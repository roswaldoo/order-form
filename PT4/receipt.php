<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<style>
		h1{
			color: white;
			font-size: 30px;
			text-align: center;
		}
		img{
			width: 40%;
			height: 40%;
			margin-top: 20px;
			margin-left: 30%;
		}
		body{
                background-image: url(bg.jpg);
                background-repeat: no-repeat;
                background-size: cover;
        }
	</style>
		<img src="https://media.tenor.com/XMKo44xCzSoAAAAC/pizza-dough.gif">
<?php
		echo"<h1>YOUR ORDER IS GETTING READY!</h1>";



        if (isset($_GET['size'])) {
        	$food=$_GET['size'];
        	$discount=$_GET['discount'];
        	$c=count($food);
        	$price= 0.0;
        	}

        	for ($i=0; $i <$c ; $i++) { 
        		if ($food[$i]==1) {
        			$price=$price+150;
        			echo "<h1>You've placed a Solo pizza.";
        		}
        	}
        		for ($i=0; $i <$c ; $i++) { 
        		if ($food[$i]==2) {
        			$price=$price+200;
        			echo "<h1>You've placed a Medium Pizza";
        		}
        	}
        		for ($i=0; $i <$c ; $i++) { 
        		if ($food[$i]==3) {
        			$price=$price+250;
        			echo "<h1>You've placed a large Pizza";
        		}
        	}
        		for ($i=0; $i <$c ; $i++) { 
        		if ($food[$i]==4) {
        			$price=$price+300;
        			echo "<h1>You've placed a XL Pizza";
        		}
        		if ($discount[$i]==5) {
        			$price=$price-0.2;
        			echo"<h1>You've Discounted 20% ";
        		}
        	}
        	echo"<h1>The total price is: Php".$price;
                  
    ?>
</body>
</html>