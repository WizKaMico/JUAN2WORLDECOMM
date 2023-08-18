<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">

			  <?php if(!empty($cartItem)){ ?>
				<?php foreach ($cartItem as $item) {  ?>
					<li class="header-cart-item flex-w flex-t m-b-12">
					  <a href="index.php?action=remove&id=<?php echo $item["cart_id"]; ?>&view=<?php echo $_GET['view']; ?>" class="btnRemoveAction">
						<div class="header-cart-item-img">
							<img src="<?php echo $item["image"]; ?>" alt="IMG">
						</div>
				      </a>

						<div class="header-cart-item-txt p-t-8">
							<a href="index.php?view=PRODUCT&code=<?php echo $item["code"]; ?>" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							<?php echo $item["name"]; ?>, <?php echo $item["vcode"]; ?>, (<?php echo $item["color"]; ?>, <?php echo $item["size"]; ?>')
							</a>

							<span class="header-cart-item-info">
						    <?php $item_per_variant = $item["price"] * $item["quantity"]; ?>
							<?php echo $item["quantity"]; ?> pcs x ₱ <?php echo  number_format($item["price"]); echo ' = '; echo '₱'; echo  number_format($item_per_variant); ?>
							</span>
						</div>
					</li>
					<?php } } ?>

				</ul>
				
				<?php if(!empty($cartItem)){ ?>
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: ₱ <?php echo   number_format($item_price); ?>
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="index.php?view=CART" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>