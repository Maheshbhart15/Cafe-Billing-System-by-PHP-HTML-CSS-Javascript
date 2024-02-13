<html>
<head>
<fieldset style="border:3px solid black;
 background:url(bg17.jpg); background-repeat:no-repeat; 
background-size:1000px 490px; font-size:15pt;
font-family:comic sans ms; ">
 

<h3> Total Bill </h3>
</br>
</head>
<body>

<div>
<a href="mainpage.html">Main Page</a>
</br></br>

<input type="submit"  value="Place Order" onclick="function111();">
</br></br>
</div>
<div>
<?php

if( $_SERVER['REQUEST_METHOD'] ==='POST'){
if(empty($_POST['addcart1']))
{
	echo"</br>";
}else{
	 echo "Panipuri (Rs:20 * qty) :".((int)$_POST['item1']*(int)$_POST['no1']);
}

echo"</br>";
if(empty($_POST['addcart1']))
{
	echo"</br>";
}else{
	echo "Dosa (Rs:30 * qty) :".((int)$_POST['item2']*(int)$_POST['no2']);


}

echo"</br>";
if(empty($_POST['addcart1']))
{
	echo"</br>";
}else{
	echo "Coffee (Rs:15 * qty) :".((int)$_POST['item3']*(int)$_POST['no3']);


}

echo"</br>";
if(empty($_POST['addcart1']))
{
	echo"</br>";
}else{
	echo "Cake (Rs:250 * qty) :".((int)$_POST['item4']*(int)$_POST['no4']);


}

echo"</br>";
if(empty($_POST['addcart1']))
{
	echo"</br>";
}else{
	echo "Vadapav (Rs:15 * qty) :".((int)$_POST['item5']*(int)$_POST['no5']);


}
echo"</br>";
if(empty($_POST['addcart1']))
{
	echo"</br>";
}else{
	echo "Paratha (Rs:30 * qty) :".((int)$_POST['item6']*(int)$_POST['no6']);


}echo"</br>";
if(empty($_POST['addcart1']))
{
	echo"</br>";
}else{
	echo "Ice_cream(Rs:50 * qty) :".((int)$_POST['item7']*(int)$_POST['no7']);
   echo"</br>";

}

if(empty($_POST['addcart1']))
{
	echo"</br>";
}else{
echo"Total:".((int)$_POST['item1']*(int)$_POST['no1'])+((int)$_POST['item2']*(int)$_POST['no2'])+((int)$_POST['item3']*(int)$_POST['no3'])+((int)$_POST['item4']*(int)$_POST['no4']+((int)$_POST['item5']*(int)$_POST['no5'])+(int)$_POST['item6']*(int)$_POST['no6'])+((int)$_POST['item7']*(int)$_POST['no7']);
}
}

?>
</body>
<script>
function function111() {
  alert("Your order is on the way");
}
</script>

</html>