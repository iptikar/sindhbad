<style type="text/css">
#sortable {
 list-style-type: none;
 margin: 0;
 padding: 0;
 width: 100%;
}
#sortable li {
 margin: 0 3px 3px 3px;
 padding: 5px;
 float:left;
 position:relative;
 margin-bottom:10px;
 cursor:move

}
#sortable li span {
 position: absolute;
 top:-13px;
 cursor:pointer;
}
.remove_gallery {
 float:left;
 text-align:center
}
.remove_gallery a {
 color:#000;
}
.remove_gallery a:hover {
 color:#EB832A;
}
.reload_gallery {
 float:left;
 width:100%;
}
</style>
<script>
$(document).ready(function(){
$('#sortable').sortable({
update: function(event, ui) {
var newOrder = $(this).sortable('toArray').toString();
var site_url = '<?=site_url('back_office/control/sort_order_gallery')?>';
$.post(site_url,{content_type: "<?php echo $content_type; ?>",newOrder : newOrder},function(data){
$('#result').html(data);
});
}
});
$( "#sortable" ).disableSelection();	
})
function deletegal(id){
	var id_image=id;
	
var site_url = '<?=site_url('back_office/control/delete_gal_image')?>';
$.post(site_url,{content_type: "<?php echo $content_type; ?>", id_image : id_image,id:<?php echo $id; ?>},function(data){
	$('#'+id).remove();
});	
}
</script>

<div class="reload_gallery" style="margin-top:20px">
<ul id="sortable">
<? $i=0; foreach($gallery as $val){$i++;?>
<li id="<?=$val['id_gallery']?>"  class="ui-state-default<? if($i%6==0){?> last <? }?>">
<img src="<?=base_url()?>uploads/<?php echo $content_type; ?>/gallery/120x120/<?=$val['image']?>" />
<span class="remove_gallery">
<a onclick="if(confirm('Are you sure?')) {deletegal(<?=$val['id_gallery']?>)}"><img src="<?=base_url()?>images/remove_gallery.png" /></a></span>
</li>
<? }?>
</ul>
</div>
<div id="result"></div>