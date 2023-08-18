<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.png'); margin-top:100px;">
		<h2 class="ltext-105 cl0 txt-center">
             CATEGORY : 
                    <?php 
                         $category = $_GET['category'];
                         $categoryWithSpaces = str_replace('_', ' ', $category);
                         echo strtoupper($categoryWithSpaces); 
                    ?>
		</h2>
</section>	

<section class="bg0 p-t-23 p-b-140" style="margin-top:100px;">
		<div class="container">
	
			<div class="flex-w flex-sb-m p-b-52">



				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" id="search-product" placeholder="Search">
					</div>	
				</div>

			</div>

			<div class="row isotope-grid">

        <?php
            
            $category_product = $_GET['category'];

            $product_array = $shoppingCart->getAllCategoryProduct($category_product);
            
            if (!empty($product_array)) {
                foreach ($product_array as $key => $product) {

        ?>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item awesome-border">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0 label-new" data-label="Sale">
							<div class="image-slideshow">
								<img src="<?php echo $product["image"]; ?>" alt="IMG-PRODUCT">
								<?php $product_image = $shoppingCart->getProductVariantImage($product['code']); ?>
								<?php foreach ($product_image as $image) { ?>
									<img src="<?php echo $image['image']; ?>" alt="IMG-PRODUCT">
								<?php } ?>
							</div>
							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04"
								data-product-code="<?php echo $product['code']; ?>">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="index.php?view=PRODUCT&code=<?php echo $product['code']; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                   <?php echo $product["name"]; ?>
								</a>

								<span class="stext-105 cl3">
                                   <?php echo $product["price"]; ?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

   <?php  } } ?>

           </div>
		</div>
	</section>

 
