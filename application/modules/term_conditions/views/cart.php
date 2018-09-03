<?php echo $head;?>
<?php echo $header;?>
<p><br></p>
 <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>»</span></li>
            <li><strong>Cart</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12">
          <div id="contact" class="page-content page-contact">
            <!-- Cart Section start Here -->
			
<div class="text-left">
<div class="col-md-12">
<h3> <span id="cart-items-count">
</span></h3>
<div class="table-responsive">
<br><br>`
<table class="table" id="shopping-cart-results">
<thead style="font-size:20px !important;background: #f8f8f8;
    font-size: 16px;">
<tr>
<th class="cart_product">Item</th>
<th>Price</th>
<th>Quantity</th>
<th>Subtotal</th>
<th>Delete</th>
<th> </th>
</tr>
</thead>
<tbody>
<tr>
<td><p style="font-size: 19px;margin-bottom: 0px;font-weight:600;">roti</p></td>
<td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;5</td>
<td><input type="number" style="width:60px;" data-code="" class="form-control text-center quantity1" value="1"></td>
<td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;5.00</td>
<td style="width:30px;">
<a href="#" class="btn btn-danger remove-item" data-code="25"><i class="glyphicon glyphicon-trash"></i></a>
</td>
</tr>
<tr>
<td><p style="font-size: 19px;margin-bottom: 0px;font-weight:600;">roti</p></td>
<td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;55</td>
<td><input type="number" style="width:60px;" data-code="" class="form-control text-center quantity1" value="1"></td>
<td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;55.00</td>
<td style="width:30px;">
<a href="#" class="btn btn-danger remove-item" data-code="26"><i class="glyphicon glyphicon-trash"></i></a>
</td>
</tr>
</tbody><tfoot>


<tr>
<td colspan="2"></td>

<td><strong>Total: -</strong></td>
<td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;<strong>60.00</strong></td>
<td></td>
</tr>
<tr>
<td colspan="2" style="border:none;"></td>
<td><strong>Sgst Tax (2.5%): -</strong></td>
<td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;<strong>
0</strong></td>
<td></td>
</tr>
<tr>
<td colspan="2" style="border:none;"></td><td><strong>Cgst Tax (2.5%): -</strong></td>
<td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;<strong>
0</strong></td>
<td></td>
</tr>
<tr>
<td colspan="2" style="border:none;"></td>
<td><strong>Total Amount: -</strong></td>
<td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;
<strong>60.00</strong></td>
<td></td>
</tr>
<tr>
<td style="border:none;"><a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
<td style="border:none;"></td>
<td class="text-center cart-products-total"><strong> 

</strong></td>
<td>
<a href="#" class="btn btn-success btn-block">Checkout 
<i class="glyphicon glyphicon-menu-right">
</i></a>
</td>
</tr>
</tfoot>

</table>
</div>
</div>
</div>

			<!-- cart Section End Here -->
          </div>
        </section>
      </div>
    </div>
  </section>
  <?php echo $footer;?>
<?php echo $script;?>
  
  