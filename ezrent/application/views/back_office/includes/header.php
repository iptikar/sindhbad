<script>
$(function(){
$('#searchbox').click(function(){
	window.find();
});
});
</script>

<div id="header"  style="margin:0 auto;">
  <div id="top" class="row">
    <div class="span9" >
      <h2 class="logo">
        <?
$cond=array('id_settings'=>1);
$title_site=getonerow('settings',$cond); 
$seg=$this->uri->segment(2);
?>
        <a href="<?= site_url('back_office/home/dashboard'); ?>" class="decoration"> <img src="<?= base_url(); ?>uploads/website/<?= $title_site["image"]; ?>" /> <i>
        <?= $title_site["website_title"]; ?>
        </i></a></h2>
    </div>
    <div class="span6 pull-right" style="text-align:right; margin-right:10px;" >
      <p id="userbox"><i>Hello</i> <strong>
        <?= $this->session->userdata('user_name'); ?>
        </strong> &nbsp;| &nbsp; <i class="icon-edit"></i> <a href="<?=site_url('back_office/profile'); ?>">Edit Profile</a> &nbsp;| &nbsp
        <? if($this->session->userdata('level') != 0){ ?>
        <i class="icon-wrench"></i> <a href="<?=site_url('back_office/settings'); ?>">Settings</a> &nbsp;| &nbsp
        <? } ?>
        <i class="icon-off"></i> <a href="<?=site_url('back_office/home/logout'); ?>"> Logout</a> <br />
        <small><b>Last Login:</b>
        <?= $this->session->userdata('login_date'); ?>
        </small></p>
    </div>
    <div class="span6 pull-right" style="text-align:right; margin-right:10px;" >
    <?php $url = "http" . (($_SERVER['SERVER_PORT']==443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
	/*$ar_link = str_replace('/en/','/ar/',$url);
	$en_link = str_replace('/ar/','/en/',$url);*/
	$ar_link = anchor($this->lang->switch_uri('ar'),'AR');
	$en_link = anchor($this->lang->switch_uri('en'),'EN');
	$fr_link = anchor($this->lang->switch_uri('fr'),'FR');
	?>
  <!-- <a href="<?php //echo $en_link; ?>">EN</a> &nbsp;| &nbsp 
   <a href="<?php //echo $ar_link; ?>">AR</a> &nbsp;| &nbsp 
   <a href="<?php //echo $fr_link; ?>">FR</a>-->
 <!-- <?php //echo $en_link; ?> &nbsp;| &nbsp <?php //echo $ar_link; ?> &nbsp;| &nbsp <?php //echo $fr_link; ?>-->
    </div>
  </div>
  <div>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container"> <a class="brand" >
          <?= $title_site["website_title"]; ?>
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav" >
              <li <? if($seg == "home") echo 'class="active"'; ?>> <a href="<?= site_url('back_office/home/dashboard'); ?>"><i class="icon-home" ></i> Dashboard</a></li>
              <!-- User Section -->
              <?
if ($this->acl->has_permission('users','index') || $this->acl->has_permission('users','add')){
?>
              <li class="dropdown <? if($seg == "users") echo 'active'; ?>"> <a  href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Users <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <? if ($this->acl->has_permission('users','index')){ ?>
                  <li><a href="<?= site_url('back_office/users/add'); ?>" >Add User</a></li>
                  <? }
if ($this->acl->has_permission('users','index')){ ?>
                  <li><a href="<?= site_url('back_office/users'); ?>" >List Users</a></li>
                  <? } ?>
                </ul>
              </li>
              <? } ?>
              
            
             <!-- <li <? //if($seg == "pages") echo 'class="active"'; ?>><a href="<? //= base_url(); ?>back_office/pages"> <i class="icon-book"></i> Views</a></li>-->
              <? 
if ($this->acl->has_permission('roles','index')){ ?>
              <li <? if($seg == "roles") echo 'class="active"'; ?>><a href="<?= site_url('back_office/roles'); ?>"> <i class="icon-lock"></i> Manage Permissions</a></li>
              <?
}
if ($this->acl->has_permission('recycle','index')){ ?>
              <li <? if($seg == "recycle") echo 'class="active"'; ?>><a href="<?= site_url('back_office/recycle'); ?>"> <i class="icon-trash"></i> Recycle Bin</a></li>
              <? } ?>
              <? if($this->session->userdata('level') == 3){ ?>
              <li class="dropdown <? if($seg == "control" || $seg == "install") echo 'active'; ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-globe"></i> Super Management<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= site_url('back_office/control'); ?>">Manage content type</a></li>
                </ul>
              </li>
              <? } ?>
             <?php if($this->config->item("language_module") && $this->session->userdata('level') == 3) { ?>
              <li <? if($seg == "languages") echo 'class="active"'; ?>><a href="<?= site_url('back_office/languages'); ?>"> <i class="icon-lock"></i> Manage Languages</a></li>
               <? } ?>
              
            </ul>
            <?  if($seg != "home"){ ?>
            <a href="javascript: history.go(-1)" class="btn pull-right" style="margin-right:10px"> <i class=" icon-arrow-left"></i></a>
            <? } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <span class="clearFix">&nbsp;</span> </div>
<!-- end of #header -->