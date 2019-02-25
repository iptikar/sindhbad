<div class="main">
  <div class="block">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="<?=route_to('')?>">Home</a></li>
          <li><span>news & events</span></li>
        </ul>
      </div>
    </div>
    <div class="mainWrap clearfix">
      <h1 class="titleName"> news & events </h1>
      <div class="smGpng">
        <div class="blog clearfix">
<?php if(!empty($news)) { ?>
          <ul class="nwsBox clearfix">
          	<?php foreach($news as $val){
					$date = new DateTime($val['news_date']);
			?>
            <li>
              <div class="imgDiv"><a href="<?=route_to('news/details/'.$val['id_news'])?>">
              <?php if(!empty($val['picture'])){ ?><img src="uploads/news/352x220/<?=$val['picture']?>" alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>"/><?php } ?>
              </a></div>
              <h2><a href="<?=route_to('news/details/'.$val['id_news'])?>"><?=$val['title']?></a></h2>
              <?php if($val['news_date']!='0000-00-00'){ ?><span><?=$date->format('M d, Y')?></span><?php } ?>
              <p><?=character_limiter(strip_tags($val['description']),100)?></p>
            </li>
            <?php } ?></ul>
<?php } else {?>
<div class="coming-soon">Coming Soon...</div>
<?php }?>
          
        </div>
        <div class="clearfix">
          </div>
          <?=$pagination_links?>
      </div>
    </div>
  </div>
</div>