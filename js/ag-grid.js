

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