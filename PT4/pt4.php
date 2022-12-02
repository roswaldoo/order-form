<!DOCTYPE html>
<html>
<head>
        <title></title>
</head>
<body>
<style>

        body{
                background-image: url(bg.jpg);
                background-repeat: no-repeat;
                background-size: cover;
        }
        h1{
                text-align: center;
                color: white;
        }  
        #hawaiian{
                width: 250px;
                height: 200px;
                border-radius: 50%; 
        }
        #hamcheese{
                width: 300px;
                height: 200px; 
        }
        #peperoni{
                width: 250px;
                height: 200px;
                border-radius: 50%;
        }
        .menu{
                display: flex;
                flex-direction: row;
        }
        .order{
                color: white;
        }
        .flavor{
                color: white;
                
                text-align: center;
        }
        .form{
                max-width: 250px;
                display: block;
                left: 70%;
                transform: translate(-50%.-50%);
                box-shadow: 0 15px 20px ;
                padding: 30px;
                text-align: center;
                position: absolute;
                top: 100px;


        }
        .box{
                width: 250px;
                margin: 0 10px;
                color: white;
               
        }
        .box:hover{
                transform: scale(1.2);
                z-index: 1;

        }
        .price{
                color: white;
                tr
                flex-direction: row;
                

              
        }
</style>
        <h1>SIMPLE PIZZA ORDERING SYSTEM</h1>
        
<div class="menu" >
        <div class="box">
        <img id="hawaiian" src="hawaiian.png">HAWAIIAN 
        <p>Classic Hawaiian Pizza combines pizza sauce, cheese, cooked ham, and pineapple.</p>
        </div>
        <div class="box">
        <img id="hamcheese" src="hamcheese.png">HAM AND CHEESE
        <p>Classic combination of ham and cheese.</p>
        </div>
        <div class="box">
        <img id="peperoni" src="peperoni.png">PEPPERONI
        <p>A meat mixture of beef and pork that has been cured and seasoned with paprika and chili powder</p>
        </div>
</div> 
<h2 style="color: white;">PRICES LIST:</h2>
<div class="price">        
        <h3>SOLO: 150php</h3>
        <h3>MEDIUM: 200php</h3>
        <h3>LARGE: 250php</h3>
        <h3>XL: 300php</h3>
</div>
<div class="form">
<h2 style="color: white;" >ORDER FORM</h2>
<!--
<div class="row">
  <div class="column">
        Customer Name: <input type="text" name="fname"><br><br>
        Contact Number: <input type="text"name="num"><br><br>
        Address:<input type="text"name="address"><br><br>
  </div>
  <div class="column">
        <b>FLAVORS</b><br>
        <input type="checkbox" id="pizza1" value="hawaiian">hawaiian<br>
        <input type="checkbox" id="pizza2" value="ham and cheese">ham and cheese<br>
        <input type="checkbox" id="pizza3" value="peperoni">peperoni<br>

        <b>SIZES</b><br>
        <input type="radio" id="size1" name="size1" value="Solo">Solo (6 Slices)<br>
        <input type="radio" id="size2" name="size2" value="Medium">Medium (8 Slices<br>
        <input type="radio" id="size3" name="size3" value="Large">Large (10 Slices)<br>
        <input type="radio" id="size4" name="size4" value="XL">Extra Large (12 Slices)<br>
        <input type="submit" value="Submit">

  </div>
</div>
-->

<form name="myForm" action="receipt.php" onsubmit="return validateForm()" method="GET">
        Customer Name: <input type="text" name="name"><br><br>
        Contact Number: <input type="text"name="num"><br><br>
        Address: <br><input type="text"name="address"><br>
     


<div class="flavor">
        <b>FLAVORS</b><br>
        <input type="checkbox" name="<pizza"value="hawaiian">hawaiian<br>
        <input type="checkbox" name="<pizza"value="hamcheese">ham and cheese<br>
        <input type="checkbox" name="<pizza"value="pepperoni">pepperoni<br><br>
</div>
<div class="order">
        <b>SIZES</b><br>
        <input type="radio" name="size" value="1">Solo (6 Slices)<br>
        <input type="radio" name="size" value="2">Medium (8 Slices)<br>
        <input type="radio" name="size" value="3">Large (10 Slices)<br>
        <input type="radio" name="size" value="4">Extra Large (12 Slices)<br><br>
        <input type="checkbox" name="discount" value="5">ARE YOU A SENIOR CITIZEN?<br>
        <input type="submit" value="Submit">
</div>
</form>
</div>

<script>
function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  let y = document.forms["myForm"]["num"].value;
  let z = document.forms["myForm"]["address"].value;
  if (x == "" || y =="" || z =="") {
    alert("All Must be filled out");
    return false;
  }
}
</script>
</body>

</html>