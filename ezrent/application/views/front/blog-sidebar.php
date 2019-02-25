<?php
	$second_seg = $this->uri->segment(2);
	$third_seg = $this->uri->segment(3);
?>
<div class="blogRt rightCls">
  <div class="rcntPst">
              <h3>Recent Blogs</h3>
              <div class="blogSide postSldier1">
              <?php foreach($recent_blog as $val){
					$date = new DateTime($val['blog_date']);
				?>
              <div class="rcntBox"> <?php if(!empty($val['picture'])){ ?><a href="<?=route_to('blog/details/'.$val['id_blog'])?>"><img src="uploads/blog/354x188/<?=$val['picture']?>" alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>" /></a><?php } ?>
                <div class="rcntBoxIn"> <?php if($val['blog_date']!='0000-00-00'){ ?><span><?=$date->format('M d, Y')?></span><?php } ?>
                  <h4><?=$val['title']?></h4>
                  <p><?=character_limiter(strip_tags($val['description']),100)?> <a href="<?=route_to('blog/details/'.$val['id_blog'])?>">read more</a></p>
                </div>
              </div>
              <?php } ?>
              </div>
            </div>
  <div class="popPst">
              <h3>Popular Blogs</h3>
              <div class="blogSide postSldier2">
              <?php foreach($popular_blog as $val){
					$date = new DateTime($val['blog_date']);
				?>
              <div class="popBox clearfix">
                <div class="popLt leftCls rightBlogPicture" style="background:url(uploads/blog/354x188/<?=$val['picture']?>) no-repeat center"><a href="<?=route_to('blog/details/'.$val['id_blog'])?>">
                </a></div>
                <div class="popRt rightCls"> <?php if($val['blog_date']!='0000-00-00'){ ?><span><?=$date->format('M d, Y')?></span><?php } ?>
                  <h4><?=$val['title']?></h4>
                  <p><?=character_limiter(strip_tags($val['description']),45)?> <a href="<?=route_to('blog/details/'.$val['id_blog'])?>">read more</a> </p>
                </div>
              </div>
              <?php } ?>
              </div>
            </div>
  <div class="rcntPst">
    <h3>Categories</h3>
    <div class="blogSide postSldier1">
      <?php foreach($blog_category as $val){?>
      <a href="<?=route_to('blog/category/'.$val['id_blog_category'])?>" class="blogCatTitle <?php if($second_seg=='category'&&$third_seg==$val['id_blog_category'])echo "active"; ?>">
      <?=$val['title']?>
      </a>
      <?php } ?>
    </div>
  </div>
  <div class="rcntPst">
    <h3>Tags</h3>
    <div class="blogSide postSldier1">
      <?php foreach($blog_tags as $val){?>
      <a href="<?=route_to('blog/tags/'.$val['id_blog_tags'])?>" class="blogCatTitle <?php if($second_seg=='tags'&&$third_seg==$val['id_blog_tags'])echo "active"; ?>">
      <?=$val['title']?>
      </a>
      <?php } ?>
    </div>
  </div>
</div>