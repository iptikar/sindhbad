<div class="main">
  <div class="block">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="<?=route_to('')?>">Home</a></li>
          <li><a href="<?=route_to('news')?>">news & events</a></li>
          <li><span>
            <?=$news['title']?>
            </span></li>
        </ul>
      </div>
    </div>
    <div class="mainWrap clearfix">
      <div class="titleName">news & events</div>
      <div class="smGpng nws">
        <div class="blog clearfix">
          <div class="blogLt leftCls">
            <div class="blogbox">
              <?php if($news['news_date']!='0000-00-00'){ ?>
              <span>
              <?php
				$date = new DateTime($news['news_date']);
				echo $date->format('M d, Y');
			?>
              </span>
              <?php } ?>
              <h1 class="blogT">
                <?=$news['title']?>
              </h1>
              <?php if(!empty($news['picture'])){ ?>
              <img src="uploads/news/736x329/<?=$news['picture']?>" alt="<?=$news['image_alt']?>"  title="<?=$news['image_title']?>" />
              <?php } ?>
              <?=$news['description']?>
              <div class="blogScocial">
                <ul class="clearfix">
            <li class="news-social__item"> <a class="news-social__link customer share" href="http://www.facebook.com/sharer.php?u=<?php echo $url;?>" title="Facebook"> <img src="images/front/sc4.png" /> </a> </li>
            <li class="news-social__item"> <a  class="news-social__link customer share"  href="http://twitter.com/share?url=<?php echo $url;?>&amp;text=Share popup on &amp;hashtags=codepen"  title="Twitter"> <img src="images/front/sc1.png" /> </a> </li>
            <li class="news-social__item"> <a  class="news-social__link customer share" href="https://plus.google.com/share?url=<?php echo $url;?>" title="Mial"> <img src="images/front/sc2.png" /> </a> </li>
                </ul>
              </div>
              <a href="<?=route_to('news')?>">back</a> </div>
          </div>
          <div class="blogRt rightCls clearfix"> <a href="<?=route_to('news')?>" class="rightCls"> << back </a>
            <div class="rcntPst">
              <h3>Popular News</h3>
              <div class="postSldier2 clearfix">
                <?php foreach($popular_news as $val){
						$date = new DateTime($val['news_date']);
				?>
                <div class="rcntBox">
                  <?php if(!empty($val['picture'])){ ?>
                  <a href="<?=route_to('news/details/'.$val['id_news'])?>"><img src="uploads/news/352x220/<?=$val['picture']?>" alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>" /></a>
                  <?php } ?>
                  <div class="rcntBoxIn">
                    <?php if($val['news_date']!='0000-00-00'){ ?>
                    <span>
                    <?=$date->format('M d, Y')?>
                    </span>
                    <?php } ?>
                    <h4><a href="<?=route_to('news/details/'.$val['id_news'])?>">
                      <?=$val['title']?>
                      </a></h4>
                    <?=character_limiter($val['description'],170)?>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <?php if(count($related_news)>0){ ?>
        <div class="nwsBtm">
          <h3>Related News</h3>
          <div class="nwsBox postSldier1 clearfix">
            <?php foreach($related_news as $val){
						$date = new DateTime($val['news_date']);
				?>
            <div>
              <?php if(!empty($val['picture'])){ ?>
              <div class="imgDiv"><a href="<?=route_to('news/details/'.$val['id_related'])?>"><img src="uploads/news/352x220/<?=$val['picture']?>" alt="<?=$val['image_alt']?>"  title="<?=$val['image_title']?>" /></a> </div>
              <?php } ?>
              <h4><a href="<?=route_to('news/details/'.$val['id_related'])?>">
                <?=$val['title']?>
                </a></h4>
              <?php if($val['news_date']!='0000-00-00'){ ?>
              <span>
              <?=$date->format('M d, Y')?>
              </span>
              <?php } ?>
              <?=character_limiter($val['description'],170)?>
            </div>
            <?php } ?>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>