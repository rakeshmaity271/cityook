<?php echo $head;?>
<?php echo $header;?>
<!-- <p><br></p> -->
<div class="breadcrumbs">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <ul>
               <li class="home"> <a title="Go to Home Page" href="#">Home</a><span>»</span></li>
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
                        </span>
                     </h3>
                     <div class="table-responsive">
                        <br><br>
                        <?php if(count($items) > 0) { ?>
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
                           
                           <?php foreach($items as $item) { ?>
                              <tr>
                                 <td>
                                    <p style="font-size: 19px;margin-bottom: 0px;font-weight:600;"><?php echo ($item['name']) ? $item['name'] : ''?></p>
                                 </td>
                                 <td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;<?php echo ($item['price']) ? $item['price'] : ''?></td>
                                 <td>
                                    <div class="row">
                                       <div class="col-xs-3 col-xs-offset-3">
                                          <div class="input-group number-spinner">
                                             <span class="input-group-btn data-dwn">
                                             <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                             </span>
                                             <input type="text" class="form-control text-center" value="<?php echo ($item['quantity']) ? $item['quantity'] : ''?>" min="-10" max="40">
                                             <span class="input-group-btn data-up">
                                             <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <!--<input type="number" style="width:60px;" data-code="" class="form-control text-center quantity1" value="1">-->
                                 </td>
                                 <td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;<?php echo ($item['price']) ? $item['price'] : ''?></td>
                                 <td style="width:30px;">
                                    <a href="javascript:void(0);" title="Move to Trash" onClick="cartAction('remove','<?php echo $item["code"]; ?>')" class="btn btn-danger remove-item btnRemoveAction cart-action" data-code="25"><i class="glyphicon glyphicon-trash"></i></a>
                                 </td>
                              </tr>
                           <?php $total += ($item["price"]*$item["quantity"]); } ?>
                           
                           </tbody>
                           <tfoot>
                              <!-- <tr>
                                 <td colspan="2"></td>
                                 <td><strong>Total: -</strong></td>
                                 <td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;<strong><?php echo "$".$total; ?></strong></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td colspan="2" style="border:none;"></td>
                                 <td><strong>Sgst Tax (2.5%): -</strong></td>
                                 <td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;<strong>
                                    0</strong>
                                 </td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td colspan="2" style="border:none;"></td>
                                 <td><strong>Cgst Tax (2.5%): -</strong></td>
                                 <td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;<strong>
                                    0</strong>
                                 </td>
                                 <td></td>
                              </tr> -->
                              <tr>
                                 <td colspan="2" style="border:none;"></td>
                                 <td><strong>Total Amount: -</strong></td>
                                 <td><i class="fa fa-inr" aria-hidden="true" style="color:black;"></i>&nbsp;
                                    <strong><?php echo $total; ?></strong>
                                 </td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td style="border:none;"><a href="#" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
                                 <td style="border:none;"></td>
                                 <td class="text-center cart-products-total"><strong> 
                                    </strong>
                                 </td>
                                 <td>
                                    <a href="#" class="btn btn-success btn-block">Checkout 
                                    <i class="glyphicon glyphicon-menu-right">
                                    </i></a>
                                 </td>
                              </tr>
                              <?php } else {
                               echo "empty cart";
                           } ?>
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
  
  <style>
  /* just for preview */
.container {
    /* padding-top: 40px; */  
}

@media ( max-width: 585px ) {
    .input-group span.input-group-btn,.input-group input,.input-group button{
        display: block;
        width: 100%;
        border-radius: 0;
        margin: 0;
    }
    .input-group {
        position: relative;   
    }
    .input-group span.data-up{
        position: absolute;
        top: 0;
    }
    .input-group span.data-dwn{
        position: absolute;
        bottom: 0;
    }
    .form-control.text-center {
        margin: 34px 0;
    }
    .input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group{
        margin-left:0;
    }

}
  </style>
  
  <script>
  $(function() {
    var action;
    $(".number-spinner button").mousedown(function () {
        btn = $(this);
        input = btn.closest('.number-spinner').find('input');
        btn.closest('.number-spinner').find('button').prop("disabled", false);

    	if (btn.attr('data-dir') == 'up') {
            action = setInterval(function(){
                if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
                    input.val(parseInt(input.val())+1);
                }else{
                    btn.prop("disabled", true);
                    clearInterval(action);
                }
            }, 50);
    	} else {
            action = setInterval(function(){
                if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
                    input.val(parseInt(input.val())-1);
                }else{
                    btn.prop("disabled", true);
                    clearInterval(action);
                }
            }, 50);
    	}
    }).mouseup(function(){
        clearInterval(action);
    });
});
  </script>