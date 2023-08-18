
$(document).ready(function() {
    // When the compatibility selection changes for color options
    $('#compatibility-select').change(function() {
        var selectedCompatibility = $(this).val();
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
    var selectedSize = $('#size-select').val();
    var selectedColor = $('#color-select').val();
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
