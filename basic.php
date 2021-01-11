<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cart.css">
	<script type="text/javascript"></script>
</head>
<body>
<div class="wrap">

  <header class="cart-header cf">
    <strong>Items in Your Cart</strong>
    <span class="btn">Checkout</span>
  </header>

  <div class="cart-table">
    <ul>

<!-- begin simple product -->
      <li class="item">
        <div class="item-main cf">
          <div class="item-block ib-info cf">
            <img class="product-img" src="admin/uploads/a1.jpg" height="200px" width="200px" />
            <div class="ib-info-meta">
              <span class="title">black bag</span>
              <span class="itemno">101</span>
            </div>
          </div>

          <div class="item-block ib-qty">
            <input type="text" value="3" class="qty" />
            <span class="price"><span>x</span> $25.00</span>
          </div>

          <div class="item-block ib-total-price">
            <span class="tp-price">$75.00</span>
            <span class="tp-remove"><i class="i-cancel-circle"></i></span>
          </div>       

        </div>

        <div class="item-foot cf">
          <!-- <div class="if-message"><p>Space Reserved for item/promo related messaging</p></div> -->
          <div class="if-left"><span class="if-status">In Stock</span></div>
          <div class="if-right"><!-- <span class="blue-link">Subscription Options</span> | --><span class="blue-link">Add to Wishlist</span></div>
        </div>
      </li>
      
<!-- end bundle product -->
    </ul>
  </div>
  <div class="sub-table cf">
    <div class="summary-block">
      <div class="sb-promo">
        <input type="text" placeholder="Enter Promo Code" />
        <span class="btn">Apply</span>
      </div>        
      <ul>
        <li class="subtotal"><span class="sb-label">Subtotal</span><span class="sb-value">$25.99</span></li>
        <li class="shipping"><span class="sb-label">Shipping</span><span class="sb-value">n/a</span></li>
        <li class="tax"><span class="sb-label">Est. Tax | <span class="tax-edit">edit <i class="i-notch-down"></i></span></span><span class="sb-value">$5.00</span></li>
        <li class="tax-calculate"><input type="text" value="06484" class="tax" /><span class="btn">Calculate</span></li>
        <li class="grand-total"><span class="sb-label">Total</span><span class="sb-value">$120.99</span></li>
      </ul>
    </div>
    
    <div class="copy-block">    
      <p>Items will be saved in your cart for 30 days. To save items longer, add them to your <a href="#">Wish List</a>.</p>
      <p class="customer-care">
        Call us M-F 8:00 am to 6:00 pm EST<br />
        (877)-555-5555 or <a href="#">contact us</a>. <br />     
      </p>
    </div>    

  </div>
  
  <div class="cart-footer cf">
      <span class="btn">Checkout</span>
      <span class="cont-shopping"><i class="i-angle-left"></i>Continue Shopping</span>    
  </div>
</div>

<script type="text/javascript">
	$( ".tax-edit" ).click(function() {
  $(this).toggleClass('te-open').parent;
  $('.tax-calculate').slideToggle(200);
});

$( ".if-left" ).click(function() {
  $(this).prev('.if-message').slideToggle(200);
});

$( ".bp-toggle" ).click(function() {
  $('.bonus-products').slideToggle(200);
});
</script>
</body>
</html>