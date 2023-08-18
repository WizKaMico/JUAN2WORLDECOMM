<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.png'); margin-top:100px;">
		<h2 class="ltext-105 cl0 txt-center">
		<?php echo strtoupper($productResultPrimary[0]["name"]); ?>
		</h2>
	</section>	
	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60" style="margin-top:30px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
                                <?php 
                                   $code = $_GET['code'];
                                   $product_image_array = $shoppingCart->getProductVariantImage($code);
                                   if (!empty($product_image_array)) {
                                   foreach ($product_image_array as $keyVariant => $productVariant) {
                                ?>
								<div class="item-slick3" data-thumb="<?php echo $productVariant['image']; ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="<?php echo $productVariant['image']; ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php echo $productVariant['image']; ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
                                <?php } } ?>

							</div>
						</div>
					</div>
					<?php echo $productResultPrimary[0]["ads"]; ?>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $productResultPrimary[0]["name"]; ?>
						</h4>

						<span class="mtext-106 cl2">
							SKU : 	<?php echo $productResultPrimary[0]["code"]; ?>
						</span>

						<p class="stext-102 cl3 p-t-23">
						<?php 
							$productDetails = $productResultPrimary[0]["details"];

							// Replace the character with ASCII value 150
							$productDetails = str_replace(chr(150), '', $productDetails);

							echo $productDetails;
							?>

						
						<!--  -->
                        <form action="index.php?view=<?php echo $_GET['view']; ?>&code=<?php echo $_GET['code']; ?>&action=add" method="POST">
						<div class="p-t-33">
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Device
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
									    <select class="js-select2" id="compatibility-select" name="compatibility" require="">
                                            <option>Choose an option</option>
                                            <?php 
                                            $code = $_GET['code'];
                                            $product_compatibility_array = $shoppingCart->getProductCompatibilitySpecification($code);
                                            if (!empty($product_compatibility_array)) {
                                                foreach ($product_compatibility_array as $keyVariant => $productCompatibility) {
                                            ?>
                                            <option value="<?php echo $productCompatibility['compatibility']; ?>"><?php echo $productCompatibility['compatibility']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="color" id="color-select" require="">
											<option>Choose an option</option>							
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>

                            <div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="size" id="size-select" require="">
											<option>Choose an option</option>							
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>

                            <div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Price
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
									   <input type="number" class="size-111 bor8 stext-102 cl2 p-lr-20" name="amount" id="price-input" style="display:none;" readonly>
									</div>
								</div>
							</div>


                            <div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Quantity
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
									   <input type="number" class="size-111 bor8 stext-102 cl2 p-lr-20" name="quantity"  style="display:none;" id="quantity-input" value="1" min="1">
									</div>
								</div>
							</div>

                    
                            <input class="mtext-104 cl3 txt-center" type="text" id="vcode-input" readonly>
                            


							<div class="flex-w flex-r-m p-b-10">
							<?php if($member_id != 0){ ?>
									<button  name="submit" style="display:none;" id="add_to_cart" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Add to cart
									</button>
							<?php }else{  ?>
								
									<a href="#" style="display:none; color:white;" id="registerModal" class="flex-c-m stext-101 c10 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">Register</a>

							<?php } ?>
							</div>	
						</div>
                        </form>

						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
									<i class="zmdi zmdi-favorite"></i>
								</a>
							</div>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">How To</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
							  
                            <div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Quick Search
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
									    <input type="text" id="quickFilterInput" class="size-111 bor8 stext-102 cl2 p-lr-20" placeholder="Search...">
									</div>
								</div>
							</div>

							    <div id="agGrid" style="height: 500px; width: 100%;" class="ag-theme-alpine"></div>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
								   <?php echo $productResultPrimary[0]["howto"]; ?>
								</div>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										<!-- Review -->
										<div class="flex-w flex-t p-b-68">
										<?php if(!empty($product_comment)) {?> 
										<?php foreach ($product_comment as $comment) { ?>
											<div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
												<img src="images/avatar-01.jpg" alt="AVATAR">
											</div>
											<div class="size-207">
												<div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														Ariana Grande
													</span>

													<span class="fs-18 cl11">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star-half"></i>
													</span>
												</div>

												<p class="stext-102 cl6">
													Quod autem in homine praestantissimum atque optimum est, id deseruit. Apud ceteros autem philosophos
												</p>
											</div>
											<?php } } ?>
										</div>
										
										<!-- Add review -->
									
										<form class="w-full" action="index.php?view=<?php echo $_GET['view']; ?>&code=<?php echo $_GET['code']; ?>&action=comment" method="POST">
											<h5 class="mtext-108 cl2 p-b-7">
												Add a review
											</h5>

											<p class="stext-102 cl6">
												Your email address will not be published. Required fields are marked *
											</p>

											<div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Your Rating
												</span>

												<span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating">
												</span>
											</div>

											<div class="row p-b-25">
												<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="comment"></textarea>
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="name">Name</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" type="hidden" name="pid" value="<?php echo $productResultPrimary[0]["id"]; ?>" readonly="">
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="email">Email</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
												</div>
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10" name="proceed_comment">
												Submit
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				SKU: JAK-01
			</span>

			<span class="stext-107 cl6 p-lr-25">
				Categories: Jacket, Men
			</span>
		</div>
	</section>

	<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

				

				<?php if(!empty($product_related)) {?> 
				<?php foreach ($product_related as $prod_rel) { ?>

					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="<?php echo $prod_rel['image']; ?>" alt="IMG-PRODUCT">

								<a href="index.php?view=PRODUCT&code=<?php echo $prod_rel["code"]; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
									Quick View
								</a>
							</div>

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="index.php?view=PRODUCT&code=<?php echo $prod_rel["code"]; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $prod_rel['name']; ?>
									</a>
								</div>
							</div>
						</div>
					</div>

					<?php } } ?>

			
				</div>
			</div>
		</div>
	</section>
