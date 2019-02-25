<script>
function do_it_popup(id){
$('#myModal').load('<?= site_url('back_office/home/do_it_pop_up/'); ?>'+id);
}
function message_popup(id){
$('#sample-modal').load('<?= site_url('back_office/home/message_popup/'); ?>'+id);
}
</script>

<div class="container-fluid">
<div class="row-fluid">
<div class="span2">
<? $this->load->view('back_office/includes/left_box'); ?>
</div>
<div class="span10 cont_h">
<div class="span10-fluid" >
<ul class="breadcrumb">
<li>Dashboard</li>
</ul>
</div>
<div class="hundred pull-left" style="margin-top:15px;"> 
<? 
if($this->session->userdata('level') != 0 ){?>
<div class="sortable row-fluid">
				<!--<a data-rel="tooltip" title="<?= count($users); ?> Users" class="well span3 top-block" href="<?= base_url();?>back_office/users">
					<span class="icon32 icon-color icon-user"></span>
					<div>Total Users</div>
					<div><?= count($users) - 2; ?> Users</div>
					
				</a>-->

				<a data-rel="tooltip" title="<?= count($newsletter_emails);?> subscribers" class="well span3 top-block" href="<?= base_url();?>back_office/newsletter">
					<span class="icon32 icon-color icon-star-on"></span>
					<div>NewsLetter</div>
					<div><?= count($newsletter_emails);?> subscribers</div>
					
				</a>

				<a data-rel="tooltip" title="Settings." class="well span3 top-block" href="<?= site_url('back_office/settings');?>">
					<span class="icon32 icon-color icon-cart"></span>
					<div>Settings</div>
                    <br  />
				</a>
				
				<a data-rel="tooltip" title="<?= count($new_message); ?> new messages." class="well span3 top-block centered" href="<?= site_url('back_office/messages');?>">
					<span class="icon32 icon-color icon-envelope-closed"></span>
					<div>Messages</div>
					<div><?= count($messages); ?></div>
                    <? if(count($new_message) > 0) { ?>
					<span class="notification red"><?= count($new_message); ?></span> <? } ?>
				</a>
			</div>
<?
} 
?>        
            					
<div class="row-fluid sortable">
<!--Second Block-->						
<div class="box span">
<div class="box-header well" data-original-title>
<h2><i class="icon-list-alt"></i> Main Contents</h2>
<div class="box-icon">
<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
</div>
</div>
<div class="box-content">

<ul class="dashboard-list">
<?
$content_type=$this->fct->getAll('content_type','sort_order');
$i=0;
foreach($content_type as $val){ 
if($val["position"] != 0){
$i++;
if($i==1 || $i == ($i+4) ) $color_class ="green";
elseif($i==2 || $i == ($i+4) ) $color_class ="red";
elseif($i==3 || $i == ($i+4)) $color_class ="blue";
elseif($i==4 || $i == ($i+4) ) $color_class ="yellow";

if ($this->acl->has_permission(str_replace(" ","_",$val["name"]),'index')){
?>
<li>
<a href="<?= site_url('back_office/'.str_replace(" ","_",$val["name"])); ?>">
<i class="icon-comment"></i>
<span class="<?=$color_class;?>">
  <? //$item_count = $this->fct->getAll(str_replace(" ","_",$val["name"]),'sort_order'); 
  //if(count($item_count)== 0)
  echo "None";
  //else
 // echo count($item_count);
  ?> 
</span>
<?= $val["name"]; ?>                                    
</a>
</li>
<?	
} 
}
}
?>
</ul>

</div>
</div>
              
</div>    
</div>

</div>
</div>
</div>