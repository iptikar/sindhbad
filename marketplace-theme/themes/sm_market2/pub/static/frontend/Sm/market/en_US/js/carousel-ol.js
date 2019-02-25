
                                          require(['jquery' , 'Sm_ListingTabs/js/owl.carousel'], function ($) {
                                          	;(function (element) {
                                          	var el = $(element),
                                          	tabs_wrap = $('.ltabs-tabs-wrap',el),
                                          	tab = $('.ltabs-tab', el),
                                          	tab_active = $('.ltabs-tab.tab-sel .ltabs-tab-label',tabs_wrap), 
                                          	tab_content = $('.ltabs-items', el),
                                          	ajax_url = 'http://magento2.flytheme.net/themes/sm_market2/argentina/listingtabs/index/index',
                                          	btn_loadmore = $('.ltabs-loadmore-btn', el),
                                          	type_loadmore = false,
                                          	place_holder_tab = $('.ltabs-current-select', el),
                                          	nb_column1 = 1, nb_column2 = 2, nb_column3 = 3, nb_column4 = 4, nb_column5 = 4, margin = 30; stagePadding = 0;
                                          	        var _interval = setInterval(function() {
                                          	if(document.readyState === 'complete') {
                                          		clearInterval(_interval);
                                          			el.removeClass('ltabs-loading-first');
                                          			_runAllScript();
                                          		}    
                                          	}, 500);
                                          	function _runAllScript () {
                                          		place_holder_tab.text(tab_active.text());
                                          		tabs_wrap.on('click', function(e){
                                          			e.preventDefault();
                                          			var _that = $(this);
                                          			_that.toggleClass('active');
                                          			return false;		
                                          		});
                                          		tab.off('click').on('click', function (e) {
                                          			e.preventDefault();
                                          			var _self = $(this);
                                          			if (_self.hasClass('tab-sel')) return false;
                                          			tab.removeClass('tab-sel');
                                          			_self.addClass('tab-sel');
                                          			place_holder_tab.text($('.ltabs-tab-label', _self).text());
                                          			var tab_id = _self.attr('data-tab-id'),
                                          				catids = _self.attr('data-catids'),
                                          				items_active = $('.ltabs-items-'+tab_id, el),
                                          				loading = $('.ltabs-loading', items_active),
                                          				loaded = items_active.hasClass('ltabs-items-loaded');
                                          			tab_content.removeClass('ltabs-items-selected');
                                          			items_active.addClass('ltabs-items-selected');
                                          			
                                          			if (!loaded && !items_active.hasClass('ltabs-process')) {
                                          				items_active.addClass('ltabs-process');
                                          				loading.show();
                                          				$.ajax({
                                          					type: 'POST',
                                          					url: ajax_url,
                                          					data: {
                                          						is_ajax_listing_tabs: 1,
                                          						ajax_listingtabs_start: 0,
                                          						tab_id: tab_id,
                                          						catids: catids,
                                          						moduleid: 'listingtabs_4',
                                          						config: {"isactive":"1","title":"New Arrivals","type_show":"slider","type_listing":"all","under_price":"5","display_countdown":"0","display_title":"1","target":"_self","class_suffix":"sm_listingtab","show_loadmore_slider":"slider","nb_column1":"4","nb_column2":"3","nb_column3":"3","nb_column4":"2","nb_column5":"1","nb_rows":"1","type_filter":"categories","field_tabs":"","category_tabs":"97,98,103","order_by":"created_at","order_dir":"ASC","limitation":"6","filter_type":"categories","product_category":"97,98,103","filter_order_by":"lastest_product","child_category_products":"0","max_depth":"12","product_featured":"0","product_order_dir":"ASC","product_limitation":"8","category_preload":"97","product_order_by":"best_sales","tab_all_display":"0","cat_title_maxlength":"150","category_order_by":"name","category_order_dir":"ASC","icon_display":"0","imgcfgcat_order":"category_image,category_description","imgcfgcat_function":"1","imgcfgcat_width":"30","imgcfgcat_height":"30","imgcfgcat_background":"FFFFFF","imgcfgcat_placeholder":"sm\/listingtabs\/images\/nophoto.jpg","imgcfgcat_from_category_image":"1","imgcfgcat_from_category_description":"1","product_title_display":"1","product_title_maxlength":"25","product_description_display":"0","product_description_maxlength":"150","product_price_display":"1","product_reviews_count":"1","product_addcart_display":"1","product_addwishlist_display":"1","product_addcompare_display":"1","product_readmore_display":"0","product_readmore_text":"Details","img_from_product_image":"1","img_from_product_description":"1","img_order":"product_image, product_description","img_function":"1","img_width":"270","img_height":"270","img_background":"FFFFFF","img_replacement":"sm\/listingtabs\/images\/nophoto.jpg","effect":"fadeIn","duration":"200","delay":"400","nav":"1","loop":"0","margin":"30","slideBy":"1","autoplay":"0","autoplayHoverPause":"1","autoplaySpeed":"1000","navSpeed":"1000","startPosition":"0","mouseDrag":"1","touchDrag":"1","use_cache":"0","cache_time":"3600","class":"Sm\\ListingTabs\\Block\\ListingTabs","template":"Sm_ListingTabs::default.phtml","category_select":""}						},
                                          					success: function (data) {
                                          						if (data.items_markup != '') {
                                          							$('.ltabs-items-inner', items_active).html(data.items_markup);
                                          							items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
                                          							if (type_loadmore){
                                          								$('.product-item', items_active).removeAttr('style');
                                          								$('.product-items', items_active).removeClass('play');
                                          								$('.product-item', items_active).addClass('ltabs-mark');
                                          								animatesItems(items_active);	
                                          							}else{
                                          								_runOwlCarousel(items_active);
                                          							}
                                          							$(document).trigger("afterAjaxProductsLoaded");
                                          							loading.remove();
                                          							updateStatus(items_active);
                                          																$(document).trigger("afterAjaxLazyLoad");
                                          							 }
                                          					},
                                          					dataType: 'json'
                                          				});
                                          
                                          			}else{
                                          				if (type_loadmore){
                                          					$('.product-item', items_active).removeAttr('style');
                                          					$('.product-items', items_active).removeClass('play');
                                          					$('.product-item', items_active).addClass('ltabs-mark');
                                          					animatesItems(items_active);
                                          				}else{
                                          					var owl = $('.owl-carousel' , items_active);
                                          					 owl = owl.data('owlCarousel');
                                          					if (typeof owl !== 'undefined') 
                                          						owl.onResize();
                                          					else{
                                          						_runOwlCarousel(items_active);
                                          					}
                                          					
                                          				}
                                          			}
                                          		});
                                          		
                                          		btn_loadmore.off('click').on('click', function (e) {
                                          			e.preventDefault();
                                          			var _self = $(this);
                                          			if (_self.hasClass('loaded') || _self.hasClass('loading')) {
                                          				return false;
                                          			} else {
                                          				_self.addClass('loading');
                                          				$('.ltabs-image-loading', _self).css({display: 'inline-block'});
                                          				var rl_start = _self.parent().attr('data-rl_start'),
                                          					catids = _self.parent().attr('data-catids'),
                                          					tab_id = _self.parent().attr('data-tab-id'),
                                          					items_active = $('.ltabs-items-'+tab_id, el);
                                          				$.ajax({
                                          					type: 'POST',
                                          					url: ajax_url,
                                          					data: {
                                          						is_ajax_listing_tabs: 1,
                                          						ajax_listingtabs_start: rl_start,
                                          						tab_id: tab_id,
                                          						catids: catids,
                                          						moduleid: 'listingtabs_4',
                                          						config: {"isactive":"1","title":"New Arrivals","type_show":"slider","type_listing":"all","under_price":"5","display_countdown":"0","display_title":"1","target":"_self","class_suffix":"sm_listingtab","show_loadmore_slider":"slider","nb_column1":"4","nb_column2":"3","nb_column3":"3","nb_column4":"2","nb_column5":"1","nb_rows":"1","type_filter":"categories","field_tabs":"","category_tabs":"97,98,103","order_by":"created_at","order_dir":"ASC","limitation":"6","filter_type":"categories","product_category":"97,98,103","filter_order_by":"lastest_product","child_category_products":"0","max_depth":"12","product_featured":"0","product_order_dir":"ASC","product_limitation":"8","category_preload":"97","product_order_by":"best_sales","tab_all_display":"0","cat_title_maxlength":"150","category_order_by":"name","category_order_dir":"ASC","icon_display":"0","imgcfgcat_order":"category_image,category_description","imgcfgcat_function":"1","imgcfgcat_width":"30","imgcfgcat_height":"30","imgcfgcat_background":"FFFFFF","imgcfgcat_placeholder":"sm\/listingtabs\/images\/nophoto.jpg","imgcfgcat_from_category_image":"1","imgcfgcat_from_category_description":"1","product_title_display":"1","product_title_maxlength":"25","product_description_display":"0","product_description_maxlength":"150","product_price_display":"1","product_reviews_count":"1","product_addcart_display":"1","product_addwishlist_display":"1","product_addcompare_display":"1","product_readmore_display":"0","product_readmore_text":"Details","img_from_product_image":"1","img_from_product_description":"1","img_order":"product_image, product_description","img_function":"1","img_width":"270","img_height":"270","img_background":"FFFFFF","img_replacement":"sm\/listingtabs\/images\/nophoto.jpg","effect":"fadeIn","duration":"200","delay":"400","nav":"1","loop":"0","margin":"30","slideBy":"1","autoplay":"0","autoplayHoverPause":"1","autoplaySpeed":"1000","navSpeed":"1000","startPosition":"0","mouseDrag":"1","touchDrag":"1","use_cache":"0","cache_time":"3600","class":"Sm\\ListingTabs\\Block\\ListingTabs","template":"Sm_ListingTabs::default.phtml","category_select":""}						},
                                          					success: function (data) {
                                          						if (data.items_markup != '') {
                                          							$('.product-item',$(data.items_markup)).insertAfter($('.product-item:last-child', items_active));
                                          							$('.ltabs-image-loading', _self).css({display: 'none'});
                                          							animatesItems(items_active);
                                          							updateStatus(items_active);
                                          							$(document).trigger("afterAjaxProductsLoaded");
                                          																$(document).trigger("afterAjaxLazyLoad");
                                          							 }
                                          					}, dataType: 'json'
                                          				});
                                          			}
                                          			return false;
                                          		});
                                          			
                                          		function animatesItems(elem){
                                          				 var _item = $('.product-item.ltabs-mark', elem);
                                          				_item.stop(true, true).each(function (i) {
                                          					var newDelay = i * 200, 
                                          					duration = 400;
                                          					$(this).attr("style", "-webkit-animation-delay:" + newDelay + "ms; "
                                          						+ "-moz-animation-delay:" + newDelay + "ms; "
                                          						+ "-o-animation-delay:" + newDelay + "ms; "
                                          						+ "animation-delay:" + newDelay + "ms; "
                                          						+ "-webkit-animation-duration:" + duration + "ms;"
                                          						+ "-moz-animation-duration:" + duration + "ms;"
                                          						+ "-o-animation-duration:" + duration + "ms;"
                                          						+ "animation-duration:" + duration + "ms;");
                                          					if (i == _item.size()-1) {
                                          						$('.product-items', elem).fadeIn(newDelay).addClass("play");
                                          						$('.product-item', elem).removeClass('ltabs-mark');			
                                          					}
                                          				});
                                          		}
                                          		
                                          		function updateStatus($el) {
                                          			$('.ltabs-loadmore-btn', $el).removeClass('loading');
                                          			var countitem = $('.product-item', $el).length;
                                          			$('.ltabs-image-loading', $el).css({display: 'none'});
                                          			$('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
                                          			var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
                                          			var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
                                          			var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');
                                          				
                                          			if (countitem >= rl_total) {
                                          				$('.ltabs-loadmore-btn', $el).addClass('loaded');
                                          				$('.ltabs-image-loading', $el).css({display: 'none'});
                                          				$('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
                                          				$('.ltabs-loadmore-btn', $el).removeClass('loading');
                                          			}
                                          			_displayCountDown($el);
                                          		}
                                          		
                                          		function _countDown(date,id){
                                          			dateNow = new Date();
                                          			amount = date.getTime() - dateNow.getTime();
                                          			delete dateNow;
                                          			if(amount < 0){
                                          				id.html("Now!");
                                          			} else{
                                          				days=0;hours=0;mins=0;secs=0;out="";
                                          				amount = Math.floor(amount/1000);
                                          				days=Math.floor(amount/86400);
                                          				amount=amount%86400;
                                          				hours=Math.floor(amount/3600);
                                          				amount=amount%3600;
                                          				mins=Math.floor(amount/60);
                                          				amount=amount%60;
                                          				secs=Math.floor(amount);
                                          				$(".time-day .num-time" , id).text(days);
                                          				$(".time-day .title-time" , id).text(((days <= 1)? "Day" : "Days"));
                                          				$(".time-hours .num-time" , id).text(hours);
                                          				$(".time-hours .title-time" , id).text(((hours <= 1)? "Hour" : "Hours"));
                                          				$(".time-mins .num-time" , id).text(mins);
                                          				$(".time-mins .title-time" , id).text(((mins <= 1)? "Min" : "Mins"));
                                          				$(".time-secs .num-time" , id).text(secs);
                                          				$(".time-secs .title-time" , id).text(((secs <= 1)? "Sec" : "Secs"));
                                          				setTimeout(function(){_countDown(date,id)}, 1000);
                                          			}
                                          		}
                                          		function _displayCountDown ($el){
                                          			if ($( ".deals-countdown",$el).length){
                                          				$( ".deals-countdown",$el).each(function() {
                                          					var timer = $(this).data('timer');
                                          					var data = new Date(timer);
                                          					_countDown(data,$(this));
                                          				});
                                          			}
                                          		}
                                          		
                                          		function _runOwlCarousel(el) {
                                          			$('.owl-carousel', el).owlCarousel({
                                          				loop:false,
                                          				nav:true,
                                          				dots: false,
                                          				autoplay: false,
                                          				autoplayHoverPause: true,
                                          				margin: margin,
                                          				stagePadding: stagePadding,
                                          				responsive: {
                                          					0: {
                                          						items: nb_column1
                                          					},
                                          					480: {
                                          						items: nb_column2
                                          					},
                                          					768: {
                                          						items: nb_column3
                                          					},
                                          					991: {
                                          						items: nb_column4
                                          					},						
                                          					1200: {
                                          						items: nb_column5
                                          					}
                                          				}
                                          			});
                                          		}
                                          		if (type_loadmore){
                                          			animatesItems($('.ltabs-items.ltabs-items-selected', el));
                                          		}else{
                                          			_runOwlCarousel($('.ltabs-items.ltabs-items-selected', el));
                                          		}
                                          		_displayCountDown($('.ltabs-items.ltabs-items-selected', el));	
                                          	}
                                          })("#listingtabs_4");	
                                          });
                                       
                                   