<?php include('connection/session.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ag-grid-community@25.3.0/dist/styles/ag-grid.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ag-grid-community@25.3.0/dist/styles/ag-theme-alpine.css">
<!--===============================================================================================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="logo/logo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="index.php?view=HOME">Home</a>
							</li>

							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php echo $item_to_purchase; ?>">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="logo/logo.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="<?php echo $item_to_purchase; ?>">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
				   <a href="index.php?view=HOME">Home</a>
				</li>

				<li>
				   <a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
    <?php include('page/cart.php'); ?>




	
    <!-- backend page section  -->

				<?php 
                if(!empty($_GET['view'])){
                    if($_GET['view'] == 'HOME'){
                    include('backend/home.php');        
                    }else if($_GET['view'] == 'PRODUCT'){
                    include('backend/product.php');  
				    }else if($_GET['view'] == 'CART'){
                    include('backend/cart.php');
				    }else if($_GET['view'] == 'PROCEED'){
                    include('backend/proceed.php');  
				    }else if($_GET['view'] == 'CATEGORY'){
                    include('backend/category.php');      
                    }else{

                    }
                }else{
                    include('backend/home.php'); 
                }
                ?>
		
    <!-- backend page section  -->
     <?php include('page/modal/register_modal.php'); ?>
     <?php include('page/modal/validate_modal.php'); ?>

	<!-- Footer -->
	<?php include('page/footer.php'); ?>
	


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
    
    
    
    
    
    <script src="js/ph-address-selector.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/ag-grid-community@25.3.0/dist/ag-grid-community.min.noStyle.js"></script>

    <script src="https://www.paypal.com/sdk/js?client-id=AUbRZm1PSHjRI7V9WA430ixBmIAwfU0yeaL9RCTjU-qSM6qLWB7lZA3L37DVfk2russdwpX0-jtVxgtO&currency=PHP"></script>
    <script>
        paypal.Buttons({
    
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {

                            currency: 'PHP',
                            value: <?php if (!empty($_GET['view'] == 'PROCEED')) { echo $item_price; } ?>
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {
                    const element = document.getElementById('paypal-button-container');
                    element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // window.location.href = "success.php?id=<?php echo $id; ?>";
                });
            }
        }).render('#paypal-button-container');

    </script>



<script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style: {
                layout: 'vertical',
                color:  'gold',
                shape:  'pill',
                label:  'pay',
            }

        }).render('#paypal-button-container');
    </script>


	<script>
    var rowData = <?php  if(!empty($_GET['view'] == 'PRODUCT')) { echo json_encode($productResult); } ?>;

    const gridOptions = {
        defaultColDef: {
            sortable: true,
            resizable: true,
            filter: true,
        },
        columnDefs: [
            {
                headerName: 'Product Details', field: 'name',
                children: [
                    {
                        headerName: 'Image',
                        field: 'image',
                        cellRenderer: function(params) {
                            // Assuming 'image' contains the URL to the image
                            return '<img src="' + params.value + '" width="50" height="50" />';
                        }
                    },
                    { headerName: 'Color', field: 'color' },
                    { headerName: 'Size', field: 'size' },
                    { headerName: 'Compatibility', field: 'compatibility' }
                ]
            },
            {
                headerName: 'Product Price',
                children: [
                    { headerName: 'Price', field: 'price',  width: 90 }
                ]
            },{
				headerName: 'SKU',field: 'vcode',  width: 120
			}
            // Add more column definitions as needed
        ],
        rowData: rowData // Assuming you have your rowData defined somewhere
    };

    // Assuming you also have the rowData and other necessary code
    // ...

    document.addEventListener('DOMContentLoaded', function() {
        var gridDiv = document.querySelector('#agGrid');
        var grid = new agGrid.Grid(gridDiv, gridOptions);

        // Adding text search functionality
        var quickFilterInput = document.getElementById('quickFilterInput');
        quickFilterInput.addEventListener('input', function() {
            gridOptions.api.setQuickFilter(quickFilterInput.value);
        });
    });
</script>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php if(!empty($_GET['code']) && !empty($_GET['view'] == 'HOME')) { ?>
  <script>
    $(document).ready(function() {
        $('#myValidate').modal('show');
    });
</script>
<?php } ?>

<script>
    // $(document).ready(function() {
    //     // Show the modal when the page is ready
    //     // $('#myModal').modal('show');
        
    //     // Show the hidden link when the modal is fully shown
    //     $('#myModal').on('shown.bs.modal', function () {
    //         $('#registerModal').show();
    //     });
    // });
    $(document).ready(function() {
        $('#registerModal').click(function() {
            $('#myModal').modal('show');
        });
    });
</script>

  <script>


$(document).ready(function() {
    // When the compatibility selection changes for color options
    $('#compatibility-select').change(function() {
        var selectedCompatibility = $(this).val();
        var selectedCode = '<?php echo $_GET['code']; ?>';
        var colorSelect = $('#color-select');
        colorSelect.html('<option>Loading...</option>');

        // Make the AJAX request for color options
        $.ajax({
            url: 'api/get_color_options.php',
            data: { code: selectedCode, compatibility: selectedCompatibility },
            dataType: 'json',
            success: function(colorOptions) {
                populateColorSelect(colorOptions);
            },
            error: function() {
                colorSelect.html('<option>Error loading options</option>');
            }
        });

        
    });

    // Populate color select options
    function populateColorSelect(colorOptions) {
        var colorSelect = $('#color-select');
        colorSelect.html('<option>Choose an option</option>');

        $.each(colorOptions, function(index, option) {
            var optionElement = $('<option>')
                .val(option.value)
                .text(option.label);
            colorSelect.append(optionElement);
        });
    }

    // When the compatibility selection changes for size options
    $('#compatibility-select').change(function() {
        var selectedCompatibility = $(this).val();
        var selectedCode = '<?php echo $_GET['code']; ?>';
        var sizeSelect = $('#size-select');
        sizeSelect.html('<option>Loading...</option>');

        // Make the AJAX request for size options
        $.ajax({
            url: 'api/get_size_options.php',
            data: { code: selectedCode, compatibility: selectedCompatibility },
            dataType: 'json',
            success: function(sizeOptions) {
                populateSizeSelect(sizeOptions);
            },
            error: function() {
                sizeSelect.html('<option>Error loading options</option>');
            }
        });
    });

    // Populate size select options
    function populateSizeSelect(sizeOptions) {
        var sizeSelect = $('#size-select');
        sizeSelect.html('<option>Choose an option</option>');

        $.each(sizeOptions, function(index, option) {
            var optionElement = $('<option>')
                .val(option.value)
                .text(option.label);
            sizeSelect.append(optionElement);
        });
    }

    // Calculate and update the displayed price based on the quantity input
    var basePrice = parseFloat($('#price-input').val());
    var quantityInput = $('#quantity-input');
    var priceInput = $('#price-input');
    var vcode = $('#vcode-input');

    function updatePriceDisplay() {
        var quantity = parseInt(quantityInput.val(), 10);
        var totalPrice = basePrice * quantity;

        if (!isNaN(totalPrice)) {
            if (totalPrice === 0) {
                priceInput.hide(); // Hide price input if price is zero
                quantityInput.hide(); // Hide quantity input if price is zero
                vcode.hide();
            } else {
                priceInput.val(totalPrice.toFixed(2));
                priceInput.show(); // Show price input if price is not zero
                quantityInput.show(); // Show quantity input if price is not zero
                vcode.show();
            }
        } else {
            priceInput.val('');
            vcode.hide();
            priceInput.hide(); // Hide price input if total price is NaN
            quantityInput.hide(); // Hide quantity input if total price is NaN
        }
    }

    quantityInput.on('input', updatePriceDisplay); // Update price when quantity changes

    // When the compatibility selection changes for price calculation
	$('#color-select, #size-select').change(function() {
    var selectedCompatibility = $('#compatibility-select').val();
    var selectedCode = '<?php echo $_GET['code']; ?>';
    var selectedSize = $('#size-select').val();
    var selectedColor = $('#color-select').val();
	var button = $('#add_to_cart');
    var register = $('#registerModal');
	button.show();
    register.show();
    basePrice = 0; // Reset the base price when compatibility, color, or size changes
    priceInput.val('Loading...'); // Show loading message
    
    // Make the AJAX request to get the price
    $.ajax({
        url: 'api/get_price.php',
        data: { code: selectedCode, compatibility: selectedCompatibility, size: selectedSize, color: selectedColor },
        dataType: 'json',
        success: function(response) {
            if (response.length > 0) {
                basePrice = parseFloat(response[0].price); // Set the base price
                priceInput.val(basePrice.toFixed(2)); // Update the input field with the base price
                updatePriceDisplay(); // Update price display based on quantity
            } else {
                priceInput.val('Price not available');
            }
        },
        error: function() {
            basePrice = 0; // Reset the base price on error
            priceInput.val('Error loading price');
        }
    });
});




});




</script>

<!-- slideshow -->
<script>
$(document).ready(function() {
    $('.block2-pic').hover(
        function() {
            var slideshow = $(this).find('.image-slideshow img');
            var currentSlide = 0;
            
            var interval = setInterval(function() {
                slideshow.eq(currentSlide).fadeOut();
                currentSlide = (currentSlide + 1) % slideshow.length;
                slideshow.eq(currentSlide).fadeIn();
            }, 2000);
            
            $(this).data('interval', interval); // Store interval in element data
        },
        function() {
            var interval = $(this).data('interval');
            clearInterval(interval); // Clear the interval when hovering out
        }
    );
});

</script>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<style>

.image-slideshow {
    position: relative;
    display: flex;
    overflow: hidden;
}

.image-slideshow img {
    width: 100%;
    height: auto;
    display: none;
}

.image-slideshow img:first-child {
    display: block;
}

.awesome-border {
    border: 4px solid transparent;
    transition: border-color 0.3s ease;
}

.awesome-border:hover {
    border-color: #717fe0;
}


</style>