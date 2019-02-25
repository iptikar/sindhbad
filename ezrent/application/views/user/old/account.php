<div class="about_content bg_color4 contact">
  <div class="container">
    <div class="header_content"> <span><?php echo lang('my_account'); ?></span> </div>
    <!---------- Left Side ----------->
    <div class="content">
    <div class="r-fullSide">
      <?php $this->load->view('user/account_menu'); ?>
      </div>
        <div class="r-fullSide">
      <div class="r-infoItem"><?php echo lang('last_login'); ?>: <span><?php echo changeDate($user['last_login']); ?></span></div>
      <div class="r-infoItem"><?php echo lang('number_of_orders'); ?>: <span><?php echo count($user['orders']); ?></span></div>
      </div>
    </div>
  </div>
</div>
