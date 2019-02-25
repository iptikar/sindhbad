<?php
	$first_seg = $this->uri->segment(1);
	$active = "class='active'";
	
	$fleet_list = $this->front_model->getFleet(array('not_fleet'=>0));
	$categories = $this->front_model->getAllRecords('category','','title');
		
?>
<footer class="footer">
  <div class="footerTop">
    <div class="mainWrap clearfix">
      <ul>
            <li <?php if(empty($first_seg)||$first_seg=='home')echo $active; ?>><a href="<?=route_to('')?>">Home</a></li>
            <li <?php if($first_seg=='about')echo $active; ?>><a href="<?=route_to('about')?>">About Us</a></li>
            <li <?php if($first_seg=='services')echo $active; ?>><a href="<?=route_to('services')?>">Our Services</a></li>
            <li <?php if($first_seg=='fleet'||(isset($current_page)&&$current_page=='fleet'))echo $active; ?>><a href="<?=route_to('fleet')?>">Our Fleet</a></li>
            <li <?php if($first_seg=='offers')echo $active; ?>><a href="<?=route_to('offers')?>">our offers</a></li>
            <li <?php if($first_seg=='news'||(isset($current_page)&&$current_page=='news'))echo $active; ?>><a href="<?=route_to('news')?>">News & events</a></li>
            <li <?php if($first_seg=='blog'||(isset($current_page)&&$current_page=='blog'))echo $active; ?>><a href="<?=route_to('blog')?>">Blog</a></li>
            <li <?php if($first_seg=='faq')echo $active; ?>><a href="<?=route_to('faq')?>">FAQ</a></li>
            <li <?php if($first_seg=='contact')echo $active; ?>><a href="<?=route_to('contact')?>">Contact Us</a></li>
<li <?php if($first_seg=='sitemap')echo $active; ?>><a href="<?=route_to('sitemap')?>">Sitemap</a></li>
      </ul>
    </div>
  </div>
  <div class="footerBtm">
    <div class="mainWrap clearfix">
      <div class="fooLogo leftCls"> <a href="#"><img src="images/front/logo.png" alt="<?=$settings->website_title?>"/></a> </div>
      <div class="fooLinksRight rightCls">
        <div class="fooDiv leftCls fooContactUs">
          <h5>Contact Us</h5>
          <div class="linkDiv">
            <p><a href="javascript:;"><i class="linkicon1"></i><?=$settings->address?></a></p>
          </div>
          <div class="linkDiv">
            <p><a href="tel:<?=$settings->phone?>"><i class="linkicon2"></i>T: <?=$settings->phone?></a></p>
            <p>F: <?=$settings->fax?></p>
            <p><a href="mailto:<?=$settings->email?>"><i class="linkicon3"></i>E: <?=$settings->email?></a></p>
          </div>
        </div>
        <div class="fooDiv leftCls keepUs">
          <h5>Keep In Touch</h5>
          <div class="socialMedia">
          <ul>
            <?php if(!empty($settings->facebook)){ ?><li><a class="icon1" href="<?=$settings->facebook?>" target="_blank"></a></li><?php } ?>
            <?php if(!empty($settings->twitter)){ ?><li><a class="icon2" href="<?=$settings->twitter?>" target="_blank"></a></li><?php } ?>
            <?php if(!empty($settings->google_plus)){ ?><li><a class="icon3" href="<?=$settings->google_plus?>" target="_blank"></a></li><?php } ?>
            <?php if(!empty($settings->linkedin)){ ?><li><a class="icon4" href="<?=$settings->linkedin?>" target="_blank"></a></li><?php } ?>
            <?php if(!empty($settings->instagram)){ ?><li><a class="icon5" href="<?=$settings->instagram?>" target="_blank"></a></li><?php } ?>
          </ul>
        </div>
        </div>
      </div>

    </div>
  </div>

</footer>







 
<!--//////////////////////////////////////////////////////////////-->

<div class="footer second-footer">
	<div class="mainWrap clearfix">
    	
        
<div class="fourth">
<span class="footer_title">Our Fleet</span>
<ul class="footer_sitemap">
<? foreach($fleet_list as $val){?>
<li> <a href="<?=route_to('fleet/details/'.$val['id_fleet'])?>" class="sitemapa">
<?=$val['title']?></a> </li>
<? }?>

</ul>
        </div>

        
        
	</div>
</div>
<!--//////////////////////////////////////////////////////////////-->

<div class="footer second-footer">
<div class="mainWrap clearfix">
   <div class="sixth">
<span class="footer_title">Car Category</span>
<ul class="footer_sitemap" >
<? foreach($categories as $cat){?>
 <li> <a href="<?=route_to('fleet/category/'.$cat['id_category'])?>" class="sitemapa"><?=$cat['title']?></a></li>
 <? }?>
</ul>
<div class="google_searchengine">
<script>
  (function() {
    var cx = '015514282853327792665:w3kum636oqu';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
</div>
<div  class="rate_footer">
<div class="rw-ui-container"></div>
</div>
</div> 
</div></div>

<!--//////////////////////////////////////////////////////////////-->



              <div class="termsCond">
        <p><a href="<?=route_to('terms')?>">Terms & Conditions</a></p>
        <p>Materials available on ezrent.ae are protected by the copyright laws of the United Arab Emirates and other countries. © Copyright E Z Rent a Car L.L.C. All rights reserved.</p>
      </div>

        <div class="copyrightSec">
    <div class="mainWrap clearfix">
      <div class="copyText leftCls">© <?=date('Y')?>  EZ Rent A  Cars -  All Rights Reserved </div>
      <div class="byComp rightCls">By <a href="http://www.dowgroup.com" target="_blank">Dow Group</a> - <a href="http://www.dowgroup.com/web-design-dubai" target="_blank">Web Design Dubai</a></div>
    </div>
  </div>