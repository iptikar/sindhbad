<div class="main">
  <div class="block">
    <div class="bradcamp clearfix">
      <div class="mainWrap clearfix">
        <ul>
          <li><a href="<?=route_to('')?>">Home</a></li>
          <li><span>faq</span></li>
        </ul>
      </div>
    </div>
    <div class="mainWrap clearfix">
      <h1 class="titleName"> FAQ </h1>
      <div class="smGpng">
        <div class="transition">
          <?php if(!empty($faq)) { foreach($faq as $val){ ?>
          <div class="accroTitle"><?=$val['title']?><em></em></div>
          <div class="accroContainer">
            <div class="accroContIn"><?=$val['answer']?></div>
          </div>
          <?php } }else { ?>
<div class="coming-soon">Coming Soon...</div>
<?php }?>
        </div>
      </div>
    </div>
  </div>
</div>
