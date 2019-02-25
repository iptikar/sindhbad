<div class="main">
  <div class="aboutPage clearfix">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="#">Home</a></li>
          <li><span>Sitemap</span></li>
        </ul>
      </div>
    </div>
    <div class="block clearfix">
      <div class="mainWrap clearfix">
        <h1 class="titleName">Sitemap</h1>
        
        <div class="smGpng">
        <div class="blog clearfix">
          <ul class="sitemap clearfix">
          	            <li class="parentLi">
               <h2><a href="<?php echo route_to(""); ?>">Home Page</a></h2>
               <h2><a href="<?php echo route_to("about"); ?>">About Us</a></h2>
               <h2><a href="<?php echo route_to("offers"); ?>">Our Offers</a></h2>
               <h2><a href="<?php echo route_to("news"); ?>">News & Events</a></h2>
               <h2><a href="<?php echo route_to("blog"); ?>">Blog</a></h2>
               <h2><a href="<?php echo route_to("faq"); ?>">FAQ</a></h2>
                <h2><a href="<?php echo route_to("contact"); ?>">Contact Us</a></h2>
                            </li>
                       
                         <li class="parentLi">
               <h2><a href="<?php echo route_to("services"); ?>">Our Services</a></h2>
              <ul>
              	<?php foreach($services as $serv) {?>
                	<li><a href="<?php echo route_to("services/details/".$serv['id_services']); ?>"><?php echo $serv['title']; ?></a></li>
                <?php }?>
              </ul>
                            </li>
                            
                              <li class="parentLi">
               <h2><a href="<?php echo route_to("fleet"); ?>">Our Fleets</a></h2>
              <ul>
              	<?php foreach($categories as $cat) {?>
                	<li><a href="<?php echo route_to("fleet/category/".$cat['id_category']); ?>"><?php echo $cat['title']; ?></a></li>
                <?php }?>
              </ul>
                            </li>
                       
                       
                       
                      </ul>
        </div>
        <div class="clearfix">
          </div>
                </div>
                
                
      </div>
    </div>
    
    
  </div>
</div>