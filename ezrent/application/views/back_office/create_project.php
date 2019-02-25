<div id="content">
<div id="content-top">
<h2>Dashboard</h2>
<a href="<?= site_url('back_office/manage_project'); ?>" id="topLink">Create New Project</a> 
<span class="clearFix">&nbsp;</span>
</div><!-- end of div#content-top -->
<div id="left-col">
<div class="box">
<h4 class="yellow">Side Menu</h4>
<div class="box-container"><!-- use no-padding wherever you need element padding gone -->
<ul class="list-links">
<li><a href="#">Manage Filters</a></li>
<li><a href="#">Setup a New Site</a>
<ul>
<li><a href="#">Configure Paths</a></li>
<li><a href="#">Define Database Name</a></li>
</ul>
</li>
<li><a href="#">Manage Site Accounts</a></li>
</ul>
</div><!--end of div.box-container -->
</div><!-- end of div.box -->

<div class="box">
<h4 class="light-blue">System Messages</h4>
<div class="box-container">
<div id="sys-messages-container">
<h5>Latest Messages <span>(Opens Modal)</span></h5>
<ul>
<li class="even-messages"><a href="#">Where is Everyone? New Stuff i...</a>
<a href="#" class="sysmessage-delete"><img src="<?= base_url(); ?>images/icon-delete-message.gif" alt=" " /></a>
</li>
<li class="odd-messages"><a href="#">Version 2 is Online. You can upd...</a>
<a href="#" class="sysmessage-delete"><img src="<?= base_url(); ?>images/icon-delete-message.gif" alt=" " /></a></li>                
</ul>
</div>

<div id="quick-send-message-container">
<h5>Quick Send</h5>

<form id="form2" name="send-message-form" method="get" action="">
<fieldset>
<legend>Quick Send Message</legend>
<p><label>Message Title:</label>
<input name="message-title" id="message-title" type="text" /></p>
<p><label>Content:</label>
<textarea name="content" cols="10" rows="5"></textarea></p>
<div class="inner-nav">
<div class="align-left"><input name="send-everyone" type="checkbox" value="" />To Everyone</div>
<div class="align-right"><a href="#" onclick="javascript:document.forms['send-message-form'].submit();"><span>send</span></a></div>
<span class="clearFix">&nbsp;</span>
</div>  	
<input class="hidden" name="button" type="button" value="Send Message" />
</fieldset>
</form>
</div>
</div><!--end of div.box-container -->
</div><!--end of div.box -->


<div class="box" id="to-do">
<ul class="tab-menu">
<li><a href="#to-dos">To Do</a></li>
<li><a href="#completed">Completed</a></li>
</ul>
<div class="box-container" id="to-dos">
<div id="to-do-list">
<ul>
<li class="even"><input name="check" type="checkbox" value="" />
<a href="#">To Do Will Open in Modal Box</a><br />
<small><strong>Deadline:</strong>Today</small>
</li>
<li class="odd"><input name="check" type="checkbox" value="" />
<a href="#">To Do Will Open in Modal Box</a><br />
<small><strong>Deadline:</strong>Today</small>
</li>

<li class="even"><input name="check" type="checkbox" value="" />
<a href="#">To Do Will Open in Modal Box</a><br />
<small><strong>Deadline:</strong>Today</small>
</li>

<li class="odd"><input name="check" type="checkbox" value="" />
<a href="#">To Do Will Open in Modal Box</a><br />
<small><strong>Deadline:</strong>Today</small>
</li>
</ul>    
<div class="inner-nav">
<div class="align-left"><a href="#"><span>view all</span></a></div>
<div class="align-right"><a href="#"><span>to-do config</span></a></div>
<span class="clearFix">&nbsp;</span>
</div>       
</div><!-- end of div#to-do-list -->
</div><!-- end of div.box-container -->

<div class="box-container" id="completed">Completed tasks div content</div>  
</div><!-- end of div.box -->
</div> <!-- end of div#left-col -->

<div id="mid-col">

<!--<div class="box">      
<h4 class="white">Form Elements</h4>
<div class="box-container">
<form action="" method="post" class="middle-forms">
<h3>Form Title</h3>
<p>Please complete the form below. Mandatory fields marked <em>*</em></p>
<fieldset>
<legend>Fieldset Title</legend>
<ol>
<li class="even"><label class="field-title">Short Textbox <em>*</em>:</label> <label><input class="txtbox-short" />
<span class="form-confirm-inline">Confirm Message</span></label><span class="clearFix">&nbsp;</span></li>

<li><label class="field-title">Radio Boxes <em>*</em>: </label> <label>
<input type="radio" name="variable" checked="checked" value="val1"/>
Radio1 <input type="radio" name="variable" value="val2"/>
Radio2 </label><span class="clearFix">&nbsp;</span></li>

<li  class="even"><label class="field-title">Mid Textbox:</label> <label><input class="txtbox-middle" />
<span class="form-error-inline">Error Message</span></label><span class="clearFix">&nbsp;</span></li>

<li><label class="field-title">Select Menu:</label> <label>
<select class="form-select"><option value="option1">Menu Option 1</option><option value="option2">Menu Option 2</option></select></label><span class="clearFix">&nbsp;</span></li>

<li class="even"><label class="field-title">Long Textbox:</label> <label><input class="txtbox-long" /></label><span class="clearFix">&nbsp;</span></li>

<li><label class="field-title">Checkboxes: </label> <label>
<input type="checkbox" name="check_one" value="check1" id="check_one"/>
Check <input type="checkbox" name="check_two" value="check2" id="check_two"/>
Check </label><span class="clearFix">&nbsp;</span></li>

<li class="even"><label class="field-title">Textarea: </label> <label>
<textarea id="wysiwyg" rows="7" cols="25"></textarea></label><span class="clearFix">&nbsp;</span></li>	     						
</ol>
</fieldset>
<p class="align-right"><input type="image" src="<?= base_url(); ?>images/bt-send-form.gif" /></p>
<span class="clearFix">&nbsp;</span>
</form>
</div>
</div>--><!-- end of div.box -->
<?
$db_list = mysql_list_dbs();
$i = 0;
$cnt = mysql_num_rows($db_list);
?> 
<div class="box">
<h4 class="white">DataBase List (<?= $cnt-1; ?>)<a href="2-columns.html" class="heading-link">See Full Page Tabbed Tables Example</a></h4>
<div class="box-container">    		
<table class="table-short">
<thead>
<tr>
<td>&nbsp;</td>
<td>Database Name</td>
<td>Number Of Tables</td>
<td>Details</td>
<td>Action</td>
</tr>
</thead>
<tfoot>
<tr>
<td class="col-chk"><input type="checkbox" /></td>
<td colspan="4"><div class="align-right"><select class="form-select"><option value="option1">Bulk Options</option>
<option value="option2">Delete All</option></select>
<a href="#" class="button"><span>perform action</span></a></div></td>
</tr>
</tfoot>
<tbody>
<?
while ($i < $cnt) { 
($i % 2 != 0)? $class_db='odd' : $class_db=''; 
$db_name=mysql_db_name($db_list, $i);

if($db_name != 'information_schema'){
// isert all databases from phomyadmin to manage_db table .
if(count($dbs_table) == 0){
$_data=array('db_name'=>$db_name);
$this->db->insert('manage_db',$_data);
}
?>
<tr class="<?= $class_db; ?>">
<td class="col-chk"><input type="checkbox" /></td>
<td class="col-first"><?  echo $db_name; ?></td>
<td class="col-second">
<b style="color:#3a4043" >(
<?
$sql = "SHOW TABLES FROM ".$db_name;
$result = mysql_query($sql);
echo mysql_num_rows($result);
?>)</b> &nbsp;Table</td>
<td class="row-nav"><a style="color:#06C" class="details cur" id="<?= $db_name; ?>" >Details</a></td>
<td class="row-nav">
<a href="#" class="table-edit-link">Edit</a> 
<span class="hidden"> | </span> 
<a href="#" class="table-delete-link">Delete</a>
</td>
</tr>   
<?
}
$i++;
}
?>

</tbody>
</table>  	
</div><!-- end of div.box-container -->
</div> <!-- end of div.box -->

</div><!-- end of div#mid-col -->

<!-- end of div#right-col -->     

<span class="clearFix">&nbsp;</span>     
</div>