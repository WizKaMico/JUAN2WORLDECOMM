<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.png'); margin-top:100px;">
		<h2 class="ltext-105 cl0 txt-center">
		
		</h2>
</section>	


<!-- Shoping Cart -->
<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-xl-12 m-lr-auto m-b-50">
				
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
										<div class="how-itemcart1">
                                          <img src="<?php echo $item["image"]; ?>" alt="IMG">
										</div>
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
			</div>
		</div>
</form>
