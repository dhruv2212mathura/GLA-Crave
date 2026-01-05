<!DOCTYPE html>
<html lang="en">
<?php
if(empty($_SESSION["user_id"]))
{
	header('location:login.php');
}
else{

										  
												foreach ($_SESSION["cart_item"] as $item)
												{
											
												$item_total += ($item["price"]*$item["quantity"]);
												
													if($_POST['submit'])
													{
						
													$SQL="insert into users_orders(u_id,title,quantity,price) values('".$_SESSION["user_id"]."','".$item["title"]."','".$item["quantity"]."','".$item["price"]."')";
						
														mysqli_query($db,$SQL);
														
                                                        
                                                        unset($_SESSION["cart_item"]);
                                                        unset($item["title"]);
                                                        unset($item["quantity"]);
                                                        unset($item["price"]);
														$success = "Thank you. Your order has been placed!";

                                                        function_alert();

														
														
													}
												}
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Checkout</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>
<body>
    
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Charge <?php echo '$'.$itemPrice; ?> with Stripe</h3>
        
        <!-- Product Info -->
        <p><b>Item Name:</b> <?php echo $itemName; ?></p>
        <p><b>Price:</b> <?php echo '$'.$itemPrice.' '.$currency; ?></p>
    </div>
    <div class="panel-body">
        <!-- Display status message -->
        <div id="paymentResponse" class="hidden"></div>
        
        <!-- Display a payment form -->
        <form id="paymentFrm" class="hidden">
            <div class="form-group">
                <label>NAME</label>
                <input type="text" id="name" class="field" placeholder="Enter name" required="" autofocus="">
            </div>
            <div class="form-group">
                <label>EMAIL</label>
                <input type="email" id="email" class="field" placeholder="Enter email" required="">
            </div>
            
            <div id="paymentElement">
                <!--Stripe.js injects the Payment Element-->
            </div>
            
            <!-- Form submit button -->
            <button id="submitBtn" class="btn btn-success">
                <div class="spinner hidden" id="spinner"></div>
                <span id="buttonText">Pay Now</span>
            </button>
        </form>
        
        <!-- Display processing notification -->
        <div id="frmProcess" class="hidden">
            <span class="ring"></span> Processing...
        </div>
        
        <!-- Display re-initiate button -->
        <div id="payReinit" class="hidden">
            <button class="btn btn-primary" onClick="window.location.href=window.location.href.split('?')[0]"><i class="rload"></i>Re-initiate Payment</button>
        </div>
    </div>
</div>
</body>

</html>

<?php
}
?>