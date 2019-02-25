<?
if(!$this->session->userdata('user_id'))
redirect(site_url('back_office/home'));

?>

<? echo doctype(); ?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= $title; ?></title>

<?php if($this->router->method != 'add_photos') {?>
<script src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js"></script>
<script src="<?= base_url(); ?>js/jquery-ui-1.8.21.custom.min.js"></script>
<?php } else {?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<?php }?>

<? $this->load->view('back_office/includes/inc_header'); ?>
</head>
<body>
<input type="hidden" id="baseurl" value="<?php echo site_url(); ?>" />
<div id="container" class="hundred"   >
<div class="hidden" style="display:none;"><!-- the modal box container - this div is hidden until it is called from a modal box trigger. see cleanity.js for details -->
<div id="sample-modal" style="height:300px;">
<h2 style="font-size:160%; font-weight:bold; margin:10px 0;">Modal Box Content</h2>
<p>Place your desired modal box content here</p></div>
</div>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<!--<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Modal header</h3>
</div>
<div class="modal-body" id="modal-body">
<p>One fine body…</p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button class="btn btn-primary">Save changes</button>
</div>-->
</div>
<? $this->load->view('back_office/includes/header'); ?>
<? $this->load->view($content); ?>
</div>
<div class="distance" ></div>
<? $this->load->view('back_office/includes/footer'); ?>
</body>
</html>
