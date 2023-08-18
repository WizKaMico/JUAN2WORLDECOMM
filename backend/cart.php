<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.png'); margin-top:100px;">
		<h2 class="ltext-105 cl0 txt-center">
		
		</h2>
</section>	

<!-- Shoping Cart -->
<form class="bg0 p-t-75 p-b-85" name="frm_customer_detail" style="margin-top:30px;" action="index.php?action=proceed&view=PROCEED" method="POST">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
								</tr>

                                <?php foreach ($cartItem as $item) {  ?>
        
									
								<tr class="table_row">
									<td class="column-1">
										
											<a href="index.php?action=remove&id=<?php echo $item["cart_id"]; ?>&view=<?php echo $_GET['view']; ?>" class="btnRemoveAction">
											<div class="how-itemcart1">
											<img src="<?php echo $item["image"]; ?>" alt="IMG">
											</div>
											</a>
										
									</td>
									<td class="column-2"><?php echo $item["name"]; ?>,<?php echo $item["color"]; ?>,<?php echo $item["size"]; ?></td>
									<td class="column-3"><?php echo $item["code"]; ?></td>
									<td class="column-4"><?php echo $item["quantity"]; ?> pcs x ₱ <?php echo  number_format($item["price"]); ?></td>
									<td class="column-5"><?php  echo '₱'; echo  number_format($item_per_variant); ?></td>
								</tr>

                                <?php } ?>

								
							</table>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
                                  <?php echo '₱ '; echo number_format($item_price); ?>
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									There are no shipping methods available. Please double check your address, or contact us if you need any help.
								</p>
								
								<div class="p-t-15">

								    <label>Fullname</label>
									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="name" required>
									</div>

									<label>Phone</label>
                                    <div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="phone" required>
									</div>

									<label>Email</label>
									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="email" required>
									</div>



									<span class="stext-112 cl8">
										Address To Recieve
									</span>
									<br />
									<hr />

									<label>Region</label>
									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select name="region" class="stext-111 cl8 plh3 size-111 p-lr-15" id="region"></select>
										<input type="hidden" class="form-control form-control-md" name="region_text" id="region-text" required>
									</div>

									<label>District</label>
									<div class="bor8 bg0 m-b-12">
										<select name="province" class="stext-111 cl8 plh3 size-111 p-lr-15" id="province"></select>
										<input type="hidden" class="form-control form-control-md" name="province_text" id="province-text" required>
									</div>

									<label>Municipality</label>
                                    <div class="bor8 bg0 m-b-12">
										<select name="city" class="stext-111 cl8 plh3 size-111 p-lr-15" id="city"></select>
										<input type="hidden" class="form-control form-control-md" name="city_text" id="city-text" required>
									</div>

									<label>Barangay</label>
                                    <div class="bor8 bg0 m-b-12">
										<select name="barangay"  class="stext-111 cl8 plh3 size-111 p-lr-15" id="barangay"></select>
										<input type="hidden" class="form-control form-control-md" name="barangay_text" id="barangay-text" required>
									</div>

									<label>Address</label>
                                    <div class="bor8 bg0 m-b-12">
										<input type="text" class="stext-111 cl8 plh3 size-111 p-lr-15" name="street_address" id="street-text">
									</div>

									<label for="paymentMethod">Select Payment Method:</label>
									<div class="bor8 bg0 m-b-12">
									<select id="paymentMethod" class="stext-111 cl8 plh3 size-111 p-lr-15" name="payment_type">
									<option value="Paypal" class="payment-option">PayPal</option>
									<option value="DragonPay" class="payment-option">Dragonpay</option>
									<option value="COD" class="payment-option">COD</option>
									<option value="Store Pickup" class="payment-option"> Store PickUp</option>
									<option value="Metamask" class="payment-option"> Metamask (ETH)</option>
									</select>
							    	</div>
									
								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
                                <?php echo '₱ '; echo number_format($item_price); ?>
								</span>
							</div>
						</div>

						<button   name="proceed_payment" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
