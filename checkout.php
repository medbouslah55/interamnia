<?php 
require('header.php');
if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0){
	?>
	<script>
		window.location.href='index.php';
	</script>
	<?php
}

if(isset($_POST['submit'])){
    if($_POST['add_radio']=='user_address'){
        $address=$_SESSION['USER_ADDRESS'];
        $city=$_SESSION['USER_CITY'];
        $pincode=$_SESSION['USER_ZIP'];
    }else{
        $address=get_safe_value($con,$_POST['address']);
        $city=get_safe_value($con,$_POST['city']);
        $pincode=get_safe_value($con,$_POST['zip']);
    }
	$payment_type=get_safe_value($con,$_POST['payment_type']);
    $user_id=$_SESSION['USER_ID'];
    $user_email=$_SESSION['USER_EMAIL'];
    $user_name=$_SESSION['USER_LAST_NAME'] . ' ' . $_SESSION['USER_FIRST_NAME'];
	foreach($_SESSION['cart'] as $key=>$val){
		$productArr=get_product($con,'','',$key);
		$price=$productArr[0]['prix_produit'];
		$qty=$val['qty'];
		$cart_total=$cart_total+($price*$qty);
		
    }
    $ship_id=$_POST['ship-method'];
    $res_ship=mysqli_query($con,"SELECT `type`, `fees` FROM `shipping_detail` WHERE id='$ship_id'");
    while($row_ship=mysqli_fetch_assoc($res_ship)){
    $ship_type=$row_ship['type'];
    $ship_fees=$row_ship['fees'];
    }
    $total_price=$cart_total+$ship_fees;
	$payment_status='pending';
	if($payment_type=='cod'){
		$payment_status='success';
	}
	$order_status='1';
	$added_on=date('Y-m-d h:i:s');
	
	$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		
	
	mysqli_query($con,"insert into `order`(user_id,address,city,pincode,payment_type,payment_status,order_status,added_on,total_price,txnid,shipping_type,shipping_fees) values('$user_id','$address','$city','$pincode','$payment_type','$payment_status','$order_status','$added_on','$total_price','$txnid','$ship_type','$ship_fees')");
	
	$order_id=mysqli_insert_id($con);
	
	foreach($_SESSION['cart'] as $key=>$val){
		$productArr=get_product($con,'','',$key);
		$price=$productArr[0]['prix_produit'];
		$qty=$val['qty'];
		
		mysqli_query($con,"insert into `order_detail`(order_id,product_id,qty,price) values('$order_id','$key','$qty','$price')");
	}
	
	unset($_SESSION['cart']);
	
	if($payment_type=='payu'){
		// $MERCHANT_KEY = "gtKFFx"; 
		// $SALT = "eCwWELxi";
		// $hash_string = '';
		// //$PAYU_BASE_URL = "https://secure.payu.in";
		// $PAYU_BASE_URL = "https://test.payu.in";
		// $action = '';
		// $posted = array();
		// if(!empty($_POST)) {
		//   foreach($_POST as $key => $value) {    
		// 	$posted[$key] = $value; 
		//   }
		// }
		
		// $userArr=mysqli_fetch_assoc(mysqli_query($con,"select * from users where id='$user_id'"));
		
		// $formError = 0;
		// $posted['txnid']=$txnid;
		// $posted['amount']=$total_price;
		// $posted['firstname']=$userArr['name'];
		// $posted['email']=$userArr['email'];
		// $posted['phone']=$userArr['mobile'];
		// $posted['productinfo']="productinfo";
		// $posted['key']=$MERCHANT_KEY ;
		// $hash = '';
		// $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
		// if(empty($posted['hash']) && sizeof($posted) > 0) {
		//   if(
		// 		  empty($posted['key'])
		// 		  || empty($posted['txnid'])
		// 		  || empty($posted['amount'])
		// 		  || empty($posted['firstname'])
		// 		  || empty($posted['email'])
		// 		  || empty($posted['phone'])
		// 		  || empty($posted['productinfo'])
				 
		//   ) {
		// 	$formError = 1;
		//   } else {    
		// 	$hashVarsSeq = explode('|', $hashSequence);
		// 	foreach($hashVarsSeq as $hash_var) {
		// 	  $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
		// 	  $hash_string .= '|';
		// 	}
		// 	$hash_string .= $SALT;
		// 	$hash = strtolower(hash('sha512', $hash_string));
		// 	$action = $PAYU_BASE_URL . '/_payment';
		//   }
		// } elseif(!empty($posted['hash'])) {
		//   $hash = $posted['hash'];
		//   $action = $PAYU_BASE_URL . '/_payment';
		// }


		// $formHtml ='<form method="post" name="payuForm" id="payuForm" action="'.$action.'"><input type="hidden" name="key" value="'.$MERCHANT_KEY.'" /><input type="hidden" name="hash" value="'.$hash.'"/><input type="hidden" name="txnid" value="'.$posted['txnid'].'" /><input name="amount" type="hidden" value="'.$posted['amount'].'" /><input type="hidden" name="firstname" id="firstname" value="'.$posted['firstname'].'" /><input type="hidden" name="email" id="email" value="'.$posted['email'].'" /><input type="hidden" name="phone" value="'.$posted['phone'].'" /><textarea name="productinfo" style="display:none;">'.$posted['productinfo'].'</textarea><input type="hidden" name="surl" value="http://127.0.0.1/php/ecom/payment_complete.php" /><input type="hidden" name="furl" value="http://127.0.0.1/php/ecom/payment_fail.php"/><input type="submit" style="display:none;"/></form>';
		// echo $formHtml;
		// echo '<script>document.getElementById("payuForm").submit();</script>';
	}else{	

        ?>
        <?php
            if(isset($_SESSION['USER_TYPE']) && $_SESSION['USER_TYPE']=='guest'){
                unset($_SESSION['USER_ID']);
                unset($_SESSION['USER_TYPE']);
            }
        ?>
		<script>
			// window.location.href='thank_you.php';
		</script>
		<?php
    }
    // allow for demo mode testing of emails
	define("DEMO", false); // setting to TRUE will stop the email from sending.

	// set the location of the template file to be loaded
	$template_file = "./email_templates/order.php";

	// set the email 'from' information
	$email_from = "ARTISAN order <order@artisan.tn>";

	// create a list of the variables to be swapped in the html template
	$swap_var = array(
		"{SITE_ADDR}" => "http://localhost",
		"{EMAIL_LOGO}" => "https://i.imgur.com/C22l4gX.png",
		"{EMAIL_TITLE}" => "Votre commande a été enregistrée",
		"{CUSTOM_URL}" => "https://www.heytuts.com/web-dev/php/send-emails-with-php-from-localhost-with-sendmail",
		"{CUSTOM_IMG}" => "https://i1.wp.com/www.heytuts.com/wp-content/uploads/2019/05/thumbnail_Send-emails-with-php-from-localhost-with-SendMail.png",
		"{TO_NAME}" => "$user_name",
		"{ORDER_ID}" => "$order_id",
		"{ORDER_DATE}" => "$added_on",
		"{ORDER_TOTAL}" => "$total_price",
		"{SHIPPING_ADD}" => "$address",
		"{SHIPPING_INFO}" => "$city, $pincode",
		"{TO_EMAIL}" => "$user_email"
    );


	// create the email headers to being the email
	$email_headers = "From: ".$email_from."\r\nReply-To: ".$email_from."\r\n";
	$email_headers .= "MIME-Version: 1.0\r\n";
	$email_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // load the email to and subject from the $swap_var
	$email_to = $swap_var['{TO_EMAIL}'];
	$email_subject = $swap_var['{EMAIL_TITLE}']; // you can add time() to get unique subjects for testing: time();

	// load in the template file for processing (after we make sure it exists)
	if (file_exists($template_file))
		$email_message = file_get_contents($template_file);
	else
		die ("Unable to locate your template file");

	// search and replace for predefined variables, like SITE_ADDR, {NAME}, {lOGO}, {CUSTOM_URL} etc
	foreach (array_keys($swap_var) as $key){
		if (strlen($key) > 2 && trim($swap_var[$key]) != '')
			$email_message = str_replace($key, $swap_var[$key], $email_message);
    }


    // check if the email script is in demo mode, if it is then dont actually send an email
	if (DEMO)
		die("<hr /><center>This is a demo of the HTML email to be sent. No email was sent. </center>");

	// send the email out to the user	
	mail($email_to, $email_subject, $email_message, $email_headers);

}
?>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">checkout</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="checkout-wrap ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="checkout__inner">
                            <div class="accordion-list">
                                <div class="accordion">
                                    <?php if((isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']=='yes') || (isset($_SESSION['USER_TYPE']) && $_SESSION['USER_TYPE']=='guest')){}else{ ?>
                                    <div class="accordion__title">
                                        Checkout Method
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__body__form">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="checkout-method">
                                                        <form action="#">
                                                            <div class="checkout-method__single">
                                                                <h5 class="checkout-method__title"><i class="zmdi zmdi-caret-right"></i>CHECKOUT AS A GUEST OR REGISTER</h5>
                                                                <p class="checkout-method__subtitle">Please enter your Email:</p>
                                                                <div class="checkout-method__login single-input">
                                                                    <label for="user-email">Email Address</label>
                                                                    <input type="email" id="email" name="email">
                                                                    <div class="dark-btn">
                                                                        <a onclick="add_guest()">continue</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="checkout-method__single">
                                                                <h5 class="checkout-method__title"><i class="zmdi zmdi-caret-right"></i>REGISTER AND SAVE TIME</h5>
                                                                <p class="checkout-method__subtitle">Register with us for future convenience:</p>
                                                                <div class="single-input">
                                                                    <label for="register-method-1">Fast and easy check out</label>
                                                                </div>
                                                                <div class="single-input">
                                                                    <label for="register-method-2">Easy access to your order history and status</label>
                                                                </div>
                                                                <br>
                                                                <div class="dark-btn">
                                                                <a href="login.php">SignUp</a>
                                                            </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="checkout-method__login">
                                                        <form id="login-form" method="post">
                                                            <h5 class="checkout-method__title">Login</h5>
                                                            <h5 class="checkout-method__title">Already Registered?</h5>
                                                            <p class="checkout-method__subtitle">Please login below:</p>
                                                            <div class="single-input">
                                                                <label for="user-email">Email Address</label>
                                                                <input type="email" name="login_email" id="login_email">
                                                                <span class="field_error" id="login_email_error"></span>
                                                            </div>
                                                            <div class="single-input">
                                                                <label for="user-pass">Password</label>
                                                                <input type="password" name="login_password" id="login_password">
                                                                <span class="field_error" id="login_password_error"></span>
                                                            </div>
                                                            <p class="require">* Required fields</p>
                                                            <a href="#">Forgot Passwords?</a>
                                                            <div class="dark-btn">
                                                                <button type="button" class="fv-btn" onclick="user_login()">Login</button>
                                                            </div>
                                                        </form>
                                                        <div class="form-output login_msg">
                                                            <p class="form-messege field_error"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <form method="post">
                                    <div class="accordion__title">
                                        shipping information
                                    </div>
                                    <div class="accordion__body">
                                        <div class="shipinfo">
                                            <h3 class="shipinfo__title">Shipping Address</h3>
                                            <input type="radio" value="user_address" name="add_radio"> Ship to this address:
                                            <?php if(isset($_SESSION['USER_LOGIN'])){ ?>
                                            <p><b>Address:</b> <?php echo $_SESSION["USER_FIRST_NAME"]?> <?php echo $_SESSION["USER_LAST_NAME"]?> | <?php echo $_SESSION["USER_COUNTRY"]?>,<small><?php echo $_SESSION["USER_CITY"]?></small> | <?php echo $_SESSION["USER_ADDRESS"]?>,<small><?php echo $_SESSION["USER_ZIP"]?></small> | <?php echo $_SESSION["USER_PHONE"]?></p>
                                            <?php }else{ ?><p><b>You have no address as a guest user !</b></p> <?php } ?>
                                            <input type="radio" value="another_address" name="add_radio"> Ship to another address:<br>
                                            <a href="#" class="ship-to-another-trigger"><i class="zmdi zmdi-long-arrow-right"></i>Ship to another address</a>
                                            <div class="ship-to-another-content">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="single-input mt-0">
                                                                <select name="bil-country" id="another-bil-country">
                                                                    <option value="select">Select your country</option>
                                                                    <option value="Tunisie">Tunisie</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="First name" name="firstname">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Last name" name="lastname">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Street Address" name="address">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Apartment/Block/House (optional)" name="address_optional">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="City/State" name="city">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Post code/ zip" name="zip">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Phone number" name="phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__title">
                                        shipping method
                                    </div>
                                    <div class="accordion__body">
                                        <div class="shipmethod">
                                                <?php
                                                $res=mysqli_query($con,"SELECT `id`, `type`, `fees` FROM `shipping_detail` WHERE status='1'");
                                                while($row=mysqli_fetch_assoc($res)){
                                                ?>
                                                <div class="single-input">
                                                    <p>
                                                        <input type="radio" name="ship-method" id="ship-normal" value="<?php echo $row['id']?>" onclick="add_ship_fees(<?php  echo $totalPrice; ?>,<?php echo $row['fees']?>)">
                                                        <label for="ship-normal"><?php echo $row['type']?></label>
                                                    </p>
                                                    <p>$<?php echo $row['fees']?></p>
                                                </div>
                                                <?php } ?>
                                        </div>
                                    </div>
                                    <div class="accordion__title">
                                        Billing Information
                                    </div>
                                    <div class="accordion__body">
                                        <div class="bilinfo">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input mt-0">
                                                            <select name="bil-country" id="bil-country">
                                                                <option value="select">Select your country</option>
                                                                <option value="arb">Arab Emirates</option>
                                                                <option value="ban">Bangladesh</option>
                                                                <option value="ind">India</option>
                                                                <option value="uk">United Kingdom</option>
                                                                <option value="usa">United States</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="First name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Last name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Company name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Street Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Apartment/Block/House (optional)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="City/State">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Post code/ zip">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="email" placeholder="Email address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Phone number">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="accordion__title">
                                        payment information
                                    </div>
                                    <div class="accordion__body">
                                        <div class="paymentinfo">
                                            <div class="single-method">
                                            <input type="radio" name="payment_type" value="COD" required/>Payment à la livraison
                                            </div>
                                            <div class="single-method">
                                                <a href="#" class="paymentinfo-credit-trigger"><i class="zmdi zmdi-long-arrow-right"></i>Credit Card</a>
                                            </div>
                                            <div class="paymentinfo-credit-content">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="single-input mt-0">
                                                                <input type="text" placeholder="Name on card">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <select name="bil-country" id="payment-info-type">
                                                                    <option value="select">Card type</option>
                                                                    <option value="card-1">Card type 1</option>
                                                                    <option value="card-2">Card type 2</option>
                                                                    <option value="card-3">Card type 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Credit Card Number*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <select>
                                                                    <option>Select Month</option>
                                                                    <option>Jan</option>
                                                                    <option>Feb</option>
                                                                    <option>Mar</option>
                                                                    <option>Apr</option>
                                                                    <option>May</option>
                                                                    <option>Jun</option>
                                                                    <option>Jul</option>
                                                                    <option>Aug</option>
                                                                    <option>Sep</option>
                                                                    <option>Oct</option>
                                                                    <option>Nov</option>
                                                                    <option>Dec</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <select>
                                                                    <option>Select Year</option>
                                                                    <option>2015</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                    <option>2019</option>
                                                                    <option>2020</option>
                                                                    <option>2021</option>
                                                                    <option>2022</option>
                                                                    <option>2023</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Card verification number*">
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit"/>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="order-details">
                            <h5 class="order-details__title">Your Order</h5>
                            <?php
                                    if(isset($_SESSION['cart'])){
                                        foreach($_SESSION['cart'] as $key=>$val){
                                        $productArr=get_product($con,'','',$key);
                                        $pid=$productArr[0]['id_produit'];
                                        $pname=$productArr[0]['nom_produit'];
                                        $mrp=$productArr[0]['prix_produit'];
                                        $price=$productArr[0]['prix_produit'];
                                        $image=$productArr[0]['photo_produit'];
                                        $qty=$val['qty'];
                                    ?>
                            <div class="order-details__item">
                                <div class="single-item">
                                    <div class="single-item__thumb">
                                        <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>" alt="ordered item">
                                    </div>
                                    <div class="single-item__content">
                                        <a href="product-details.php?id=<?php echo $pid?>"><?php echo $pname?></a>
                                        <span class="price">$<?php echo $price?></span>
                                        <span class="price">x<?php echo $qty?></span>
                                    </div>
                                    <div class="single-item__remove">
                                        <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
                            </div>
                                        <?php } } ?>
                            <div class="order-details__count">
                                <div class="order-details__count__single">
                                    <h5>sub total</h5>
                                    <span class="price">$<?php  echo $totalPrice; ?></span>
                                </div>
                                <!-- <div class="order-details__count__single">
                                    <h5>Tax</h5>
                                    <span class="price">$9.00</span>
                                </div> -->
                                <div class="order-details__count__single">
                                    <h5>Shipping</h5>
                                    <span class="price" id="ship_fees">$0</span>
                                </div>
                            </div>
                            <div class="ordre-details__total">
                                <h5>Order total</h5>
                                <span class="price" id="totalprice">$<?php  echo $totalPrice; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
        <!-- Start Brand Area -->
        <div class="htc__brand__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ht__brand__inner">
                            <ul class="brand__list owl-carousel clearfix">
                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/3.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/4.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area -->
        <!-- Start Footer Area -->
        <?php require('footer.php')?>