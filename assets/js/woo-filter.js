

jQuery(function($){

    $('.wc-cat-filter').on('change', function(){

        let clickedCat = $(this).data('cat');

        // If "All" is checked
        if(clickedCat === 'all') {
            // Uncheck all other categories
            $('.wc-cat-filter').not(this).prop('checked', false);
        } else {
            // If ANY category is checked, uncheck "All"
            $('#cat-all').prop('checked', false);
        }

        // Collect selected categories
        let selectedCats = [];

        $('.wc-cat-filter:checked').each(function(){
            let catID = $(this).data('cat');
            if(catID !== 'all') {
                selectedCats.push(catID);
            }
        });

        // If nothing selected, we treat as "All"
        if(selectedCats.length === 0) {
            selectedCats = 'all';
        }

        // AJAX Request
        $.ajax({
            url: ajax_object.ajax_url,
            type: "POST",
            data: {
                action: "filter_products_by_category",
                categories: selectedCats
            },
            beforeSend: function() {
                $('.products').css('opacity', '0.4');
            },
            success: function(data) {
                $('.products').html(data);
                $('.products').css('opacity', '1');
            }
        });

    });

});
