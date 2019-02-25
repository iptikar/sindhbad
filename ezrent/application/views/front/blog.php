<div class="main">
  <div class="block">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="<?=route_to('')?>">Home</a></li>
          <li><span>blogs</span></li>
        </ul>
      </div>
    </div>
    <div class="mainWrap clearfix">
      <h1 class="titleName"> Blogs </h1>
      <div class="smGpng">
        <div class="blog clearfix">
          <div class="blogLt leftCls">
          	<?php foreach($blog as $val){
					$date = new DateTime($val['blog_date']);
			?>
            <div class="blogbox"> <?php if($val['blog_date']!='0000-00-00'){ ?><span><?=$date->format('M d, Y')?></span><?php } ?>
              <h2><a href="<?=route_to('blog/details/'.$val['id_blog'])?>"><?=$val['title']?></a></h2>
              <?php if(!empty($val['picture'])){ ?><a href="<?=route_to('blog/details/'.$val['id_blog'])?>"><img src="uploads/blog/736x329/<?=$val['picture']?>" alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>"/></a><?php } ?>
              <div class="blogSummary"><?=character_limiter(strip_tags($val['description']),350)?> <a href="<?=route_to('blog/details/'.$val['id_blog'])?>">read more</a></div>
            </div>
            <?php } ?>
            <?=$pagination_links?>
          </div>
          <?php $this->load->view('front/blog-sidebar'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
