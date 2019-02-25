<?
echo link_tag('css/bootstrap.css');
echo link_tag('css/datepicker.css');
echo link_tag('css/jquery.lightbox-0.5.css'); 
echo script_tag('js/ckeditor/ckeditor.js');
echo script_tag('js/jquery.lightbox-0.5.js');
echo script_tag('js/bootstrap.min.js');
echo script_tag('js/bootstrap-datepicker.js');

echo link_tag('js/jquery-ui-multiselect-widget-master/jquery.multiselect.css');
echo link_tag('js/jquery-ui-multiselect-widget-master/jquery.multiselect.filter.css');

echo script_tag('js/jquery-ui-multiselect-widget-master/src/jquery.multiselect.js');
echo script_tag('js/jquery-ui-multiselect-widget-master/src/jquery.multiselect.filter.js');

?>
<link rel="stylesheet" href="<?php echo base_url(); ?>js/jquery-ui-1.11.4/jquery-ui.css" type="text/css" />
<!--<link href="<?= base_url(); ?>fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="<?= base_url(); ?>fancybox/jquery.fancybox-1.3.4.pack.js"></script>-->

<script type="text/javascript" src="<?= base_url(); ?>fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    
    
    <?php if($this->router->class == 'contact_info' && ($this->router->method == 'add' || $this->router->method == 'edit' || $this->router->method== 'view' || $this->router->method== 'submit')) {?>
<link rel="stylesheet" href="<?php echo base_url(); ?>js/colorpicker/css/colorpicker.css" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>js/colorpicker/js/colorpicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/colorpicker/js/eye.js"></script>
 <script type='text/javascript'>
$(document).ready(function(){
		$('#fillColor').ColorPicker({
			onSubmit: function(hsb, hex, rgb, el) {
				$(el).val(hex);
				$(el).ColorPickerHide();
			},
			onBeforeShow: function () {
				$(this).ColorPickerSetColor(this.value);
			}
		})
		.bind('keyup', function(){
			$(this).ColorPickerSetColor(this.value);
		});
});
</script>
    <?php }?>

<?php if($this->router->class == 'control' && $this->router->method == 'add_photos') {?>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>js/plupload/js/jquery.ui.plupload/css/jquery.ui.plupload.css" type="text/css" />
<!--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/plupload/js/jquery-ui.min.js"></script>
<!-- production -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/plupload/js/plupload.full.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/plupload/js/jquery.ui.plupload/jquery.ui.plupload.js"></script>
<!-- debug WWW
<script type="text/javascript" src="<?php echo base_url(); ?>js/plupload/js/moxie.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/plupload/js/plupload.dev.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/plupload/js/jquery.ui.plupload/jquery.ui.plupload.js"></script>
-->
<script type="text/javascript">
// Initialize the widget when the DOM is ready
$(function() {
	var uploaderObj = $("#uploader").plupload({
		// General settings
		runtimes : 'html5,flash,silverlight,html4',
		url : '<?php echo site_url('back_office/control/upload_gal_image/'.$content_type.'/'.$id_gallery); ?>',

		// User can upload no more then 20 files in one go (sets multiple_queues to false)
		max_file_count: 20,
		
	//	chunk_size: '1mb',

		// Resize images on clientside if we can
		/*resize : {
			width : 200, 
			height : 200, 
			quality : 90,
			crop: true // crop to exact dimensions
		},*/
		
		filters : {
			// Maximum file size
			//max_file_size : '1000mb',
			// Specify what files to browse for
			mime_types: [
				{title : "Image files", extensions : "jpg,gif,png"},
				{title : "Zip files", extensions : "zip"}
			]
		},

		// Rename files by clicking on their titles
		rename: false,
		
		// Sort files
		sortable: false,

		// Enable ability to drag'n'drop files onto the widget (currently only HTML5 supports that)
		dragdrop: true,

		// Views to activate
		views: {
			list: true,
			thumbs: true, // Show thumbs
			active: 'thumbs'
		},

		// Flash settings
		flash_swf_url : '<?php echo base_url(); ?>js/plupload/js/Moxie.swf',
		// Silverlight settings
		silverlight_xap_url : '<?php echo base_url(); ?>js/plupload/js/Moxie.xap',
		// Called when all files are either uploaded or failed

		init: {
			UploadComplete: function(up, files) {
				$('#uploader_filelist').html('');
			   $('#ajax_gallery').html("Loading...");
				var url = '<?=site_url('back_office/control/loadGallery')?>';
				$.post(url,{content_type:"<?php echo $content_type; ?>",id : <?php echo $id_gallery; ?>},function(data){
				$('#ajax_gallery').html(data);});
			}
		}
	});
});
</script>
<?php }?>
<script>
$(function(){
$('a.gallery').lightBox({
imageLoading:'<?= base_url(); ?>images/lightbox-ico-loading.gif',
imageBtnPrev:'<?= base_url(); ?>images/lightbox-btn-prev.gif',
imageBtnNext:'<?= base_url(); ?>images/lightbox-btn-next.gif',
imageBtnClose:'<?= base_url(); ?>images/lightbox-btn-close.gif',
imageBlank:'<?= base_url(); ?>images/lightbox-blank.gif'
});
	  
$('#checkAllAuto').click(function(){
$("INPUT[type='checkbox']").attr('checked', $('#checkAllAuto').is(':checked'));    
});
$('.ckeditor').each(function(){
		var id = this.id;
		CKEDITOR.replace( id,{
       	  filebrowserUploadUrl : '<?php echo base_url(); ?>texteditor/upload'
    	});
	});
$('.date').datepicker();
$('a').tooltip();

	$('.sortable').sortable({
		revert:true,
		cancel:'.btn,.box-content,.nav-header',
		update:function(event,ui){
			//line below gives the ids of elements, you can make ajax call here to save it to the database
			//console.log($(this).sortable('toArray'));
		}
	});
	$('.btn-minimize').click(function(e){
		e.preventDefault();
		var $target = $(this).parent().parent().next('.box-content');
		if($target.is(':visible')) $('i',$(this)).removeClass('icon-chevron-up').addClass('icon-chevron-down');
		else 					   $('i',$(this)).removeClass('icon-chevron-down').addClass('icon-chevron-up');
		$target.slideToggle();
	});

$('.btn-close').click(function(e){
e.preventDefault();
$(this).parent().parent().parent().fadeOut();
});

    $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
    });
	
	$('table#table-1 tbody tr').click(function(){
	$('td').css('background','');
	$('td',$(this)).css('background','url() #ffffc6');
});

});
function removeFile(section,field,image,id)
{
	if(confirm('Are you sure you want to delete this file ?')) {
		$('#'+field+'_'+id).html('Loading...');
		var url = '<?php echo site_url(); ?>back_office/'+section+'/delete_file';
		$.post(url,{field : field,image : image,id : id},function(data){
			$('#'+field+'_'+id).html(data);
		});
	}
	else {
		return false;
	}
}
function ChangeRecordStatus(cType,id)
{
	if(confirm("Are you sure?")) {
		var url1 = '<?php echo site_url("back_office/home/ChangeRecordStatus"); ?>';
		if($("#u-status-"+cType+"-"+id+" span").hasClass("label-success"))
		var st = 1;
		else
		var st = 0;
$.ajax({
  type: "POST",
  url: url1,
  data: { content_type: cType, id: id, st : st, pProtName : '<?php  echo $this->security->csrf_hash; ?>'},
  success: function(response, textStatus, jqXHR) {
     	var prasedata = JSON.parse(response);
			if(prasedata.result == 1) {
				if(prasedata.st == 1) {
					$("#u-status-"+cType+"-"+id+" span").removeClass("label-important");
					$("#u-status-"+cType+"-"+id+" span").addClass("label-success");
				}
				else {
					$("#u-status-"+cType+"-"+id+" span").removeClass("label-success");
					$("#u-status-"+cType+"-"+id+" span").addClass("label-important");
				}
				$("#u-status-"+cType+"-"+id+" span").html(prasedata.label);
			}
   }
});
	}
}
</script>