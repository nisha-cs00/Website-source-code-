<?php
session_start();
include('cartdb.php');

$status="";
if(isset($_POST['id']) && $_POST['id']!=""){
	$code=$_POST['id'];
	$result=mysqli_query($con,"Select * from products");
	$row=mysqli_fetch_assoc($result);
	$name=$row['product_name'];
	$code=$row['id'];
	$price=$row['price'];
	$image=$row['image'];

	$cartArray=array(
		$code=>array(
			'product_name'=>$name,
			'id'=>$code, 
			'price'=>$price,
			'quantity'=>1,
			'image'=>$image)
	);
	if(empty($_SESSION["shopping_cart"])) {
		$_SESSION["shopping_cart"]=$cartArray;
		$status="<div class='box'>Product is added to your cart!</div>";
	}
	else{
		$array_keys=array_keys($_SESSION["shopping_cart"]);
		if(in_array($code, $array_keys)) {
			$status="<div class='box' style='color:red;'>Product is already added to your cart!</div>";
		}
		else{
			$_SESSION["shopping_cart"]=array_merge($_SESSION["shopping_cart"],$cartArray);
			$status="<div class='box'>Product is added to  your cart!</div>";
		}
	}
}
?>
<?php
if(!empty($_SESSION["shopping_cart"])){
	$cart_count=count(array_keys($_SESSION["shopping_cart"]));
	?>
	<div class="cart_div">
		<a href="cart.php">Cart</a>
		</div>
		<?php
}
?>
<?php 
$result=mysqli_query($con,"Select * from products");
while($row=mysqli_fetch_assoc($result)){
	echo "<div class='product_wrapper'>
	<form method='post' action=''>
	<input type='hidden' name='id' value=".$row['id']."/>
	<div class='image'><img src='".$row['image']."'/></div>
	<div class='name'>".$row['product_name']."</div>
	<div class='price'>Rs.".$row['price']."</div>
	<button type='submit' class='buy'>Buy Now</button>
	</form>
	</div>";
}
mysqli_close($con);
?>
<head><link rel="stylesheet" type="text/css" href="cartstyle.css"></head>
<div style="clear:both;"></div>

<div class="message_box" style="margin: 10px 0px;">
	<?php echo $status; ?>
</div>
<a href="index.php">Home</a>