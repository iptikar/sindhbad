<div class="main">
  <div class="block">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="<?=route_to('')?>">Home</a></li>
          <li><a href="<?=route_to('blog')?>">blogs</a></li>
          <li><span><?=$blog['title']?></span></li>
        </ul>
      </div>
    </div>
    <div class="mainWrap clearfix">
      <div class="titleName"> Blogs </div>
      <div class="smGpng">
        <div class="blog clearfix">
          <div class="blogLt leftCls">
            <div class="blogbox"> <?php if($blog['blog_date']!='0000-00-00'){ ?><span>
            <?php
				$date = new DateTime($blog['blog_date']);
				echo $date->format('M d, Y');
			?>
            </span><?php } ?>
              <h1 class="blogT"><?=$blog['title']?></h1>
              <?php if(!empty($blog['picture'])){ ?><img src="uploads/blog/736x329/<?=$blog['picture']?>" alt="<?=$blog['image_alt']?>"  title="<?=$blog['image_title']?>"/><?php } ?>
              <?=$blog['description']?>
              <div class="clearfix"></div><br /><br />
              <div class="blogScocial">
                <ul class="clearfix">
            <li class="news-social__item"> <a class="news-social__link customer share" href="http://www.facebook.com/sharer.php?u=<?php echo $url;?>" title="Facebook"> <img src="images/front/sc4.png" /> </a> </li>
            <li class="news-social__item"> <a  class="news-social__link customer share"  href="http://twitter.com/share?url=<?php echo $url;?>&amp;text=Share popup on &amp;hashtags=codepen"  title="Twitter"> <img src="images/front/sc1.png" /> </a> </li>
            <li class="news-social__item"> <a  class="news-social__link customer share" href="https://plus.google.com/share?url=<?php echo $url;?>" title="Mial"> <img src="images/front/sc2.png" /> </a> </li>
                </ul>
              </div>
              <a href="<?=route_to('blog')?>">back</a> </div>
          </div>
          <?php $this->load->view('front/blog-sidebar'); ?>
        </div>
      </div>
    </div>
  </div>
</div>