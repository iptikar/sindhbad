require([
            	'jquery',
            	'quickView',
            	'domReady!'
            ], function ($, cartQuickView) {
            	var quickViewCf = {
            		isQuickView: true,
            		isAjaxCart: true,
            		product_container : '.products-grid .item-inner,.products-list .item-inner',
            		button_container :'.box-image,.box-image-list',
            		label_button : 'Quick View',
            		base_url : 'http://magento2.flytheme.net/themes/sm_market2/argentina/'
            	}
            	$(quickViewCf.product_container).cartQuickView(quickViewCf);
            	$( document ).on( "afterAjaxProductsLoaded", function( event) {
            		$(quickViewCf.product_container).cartQuickView(quickViewCf);
            	});
            });