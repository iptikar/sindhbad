<?php // test_helper.php
if(!defined('BASEPATH')) exit('No direct script access allowed');




if ( ! function_exists('changeDate')){
function changeDate($date,$format = "d/m/Y"){
	$time = strtotime($date);
	$newdate = date($format,$time);
	return $newdate;
}
}

if ( ! function_exists('changeToCountDownDate')){
function changeToCountDownDate($date){
	$time = strtotime($date);
	$newdate = date('Y/m/d',$time);
	return $newdate;
}
}

if ( ! function_exists('getDir')){
function getDir($lang11 = ''){
	$dir = '';
	if($lang11 == '') {
		$CI =& get_instance();
		$lng = $CI->lang->lang();
	}
	else {
		$lng = $lang11;
	}
	
	if($lng == 'ar')
	$dir = 'dir="rtl"';
	return $dir;
}
}

if ( ! function_exists('GenerateBreadCrumbs')){
function GenerateBreadCrumbs($array){
	$count = count($array);
	$breadcrumbs = '<ul class="breadcrumbs">';
		$i=0;
		foreach($array as $arr) {
			$i++;
			//if($i != $count) {
			if($i != $count) {
				if(isset($arr['link']) && !empty($arr['link'])) {
					$breadcrumbs .= '<li><a href="'.$arr['link'].'">'.$arr['title'].'</a></li>';
				}
				else {
					$breadcrumbs .= '<li><span>'.$arr['title'].'</span></li>';
				}
			}
			else {
				$breadcrumbs .= '<li>'.$arr['title'].'</li>';
			}
		}
	$breadcrumbs .= '</ul>';
	return $breadcrumbs;
}
}

if ( ! function_exists('route_to')){
function route_to($path) {
    $CI =& get_instance();
	$custom_uri_routers = $CI->custom_uri_routers;
    //print '<pre>'; print_r($custom_uri_routers); exit;
	$custom_lang_var = $CI->custom_lang_var;

	if(isset($custom_uri_routers[$custom_lang_var][$path])) {
	    //	if($path == 'blog/details/31') exit('BB');
	    $route = $custom_uri_routers[$custom_lang_var][$path];
	   // if($path == 'blog/details/31') exit($route);
	    return site_url($route);
    }
	else {
	    //if($path == 'blog/details/31') exit('EE');
		$route = $path;
		return site_url($route);
	}
}
}

if ( ! function_exists('getYoutubeCode')){
function getYoutubeCode($link) {
	$data = explode('?v=',$link);
    return $data[1];
}
}

if ( ! function_exists('youtube_image')){
function youtube_image($id) {
    $resolution = array (
        'maxresdefault',
        'sddefault',
        'mqdefault',
        'hqdefault',
        'default'
    );

    for ($x = 0; $x < sizeof($resolution); $x++) {
        $url = 'http://img.youtube.com/vi/' . $id . '/' . $resolution[$x] . '.jpg';
		$gh = get_headers($url);
        if ($gh[0] == 'HTTP/1.0 200 OK') {
            break;
        }
    }
    return $url;
}
}

if ( ! function_exists('getVimeoCode')){
function getVimeoCode($link) {
	$data = explode('vimeo.com/',$link);
    return $data[1];
}
}

if ( ! function_exists('vimeo_image')){
function vimeo_image($id,$request = 'thumb') {
	$link='http://vimeo.com/api/v2/video/'.$id.'.php';
	//echo $link;exit;
	//$link = str_replace('http://vimeo.com/', 'http://vimeo.com/api/v2/video/', $link) . '.php';

	$html_returned = unserialize(file_get_contents($link));
	// $feedURL = 'http://gdata.youtube.com/feeds/api/videos/' . $youtubeVideoID;

     // read feed into SimpleXML object
     //$entry = simplexml_load_file($link);
	//print '<pre>';print_r($html_returned);exit;
	if ( $html_returned === false )
	{
	 return '';
	}
	else {
		if($request == 'thumb') {
	  	$thumb_url = $html_returned[0]['thumbnail_large']; 
	  	return $thumb_url;
		}
		elseif($request == 'duration') {
			$duration = $html_returned[0]['duration']; 
	  		return $duration;
		}
	}
	//print '<pre>';print_r($html_returned);exit;
	
}
}

if ( ! function_exists('dateArray')){
function dateArray($date) {
	//$link = str_replace('http://vimeo.com/', 'http://vimeo.com/api/v2/video/', $link) . '.php';
    list($y,$m,$d) = explode('-',$date);
	$arr['year'] = $y;
	$arr['month'] = $m;
	$arr['day'] = $d;
	return $arr;
}
}

if ( ! function_exists('careersDate')){
function careersDate($date) {
	$datetime = strtotime($date);
	$newdate = date('Y-m-d',$datetime);
    list($y,$m,$d) = explode('-',$newdate);
	$newdate = $d.' - '.$m.' - '.$y;
	return $newdate;
}
}

if ( ! function_exists('getMP4Info')){
function getMP4Info($videofile) {
	
	/*$ffmpeg_path = 'ffmpeg'; //or: /usr/bin/ffmpeg - depends on your installation
	$vid = $videofile; //Replace here!
	
	if (file_exists($vid)) {
	
		$video_attributes = _get_video_attributes($vid, $ffmpeg_path);
	
		print_r('Video codec: ' . $video_attributes['codec'] . ' - width: '  . $video_attributes['width'] 
				. ' - height: ' .  $video_attributes['height'] . ' <br/>');
	
		print_r('Video duration: ' . $video_attributes['hours'] . ':' . $video_attributes['mins'] . ':'
			   . $video_attributes['secs'] . '.'. $video_attributes['ms']);exit;
	} else { echo 'File does not exist.'; }*/
	return '1s';

}
}

function _get_video_attributes($video, $ffmpeg) {

    $command = $ffmpeg . ' -i ' . $video . ' -vstats 2>&1';  
    $output = shell_exec($command);  

    $regex_sizes = "/Video: ([^,]*), ([^,]*), ([0-9]{1,4})x([0-9]{1,4})/";
    if (preg_match($regex_sizes, $output, $regs)) {
        $codec = $regs [1] ? $regs [1] : null;
        $width = $regs [3] ? $regs [3] : null;
        $height = $regs [4] ? $regs [4] : null;
     }

    $regex_duration = "/Duration: ([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}).([0-9]{1,2})/";
    if (preg_match($regex_duration, $output, $regs)) {
        $hours = $regs [1] ? $regs [1] : null;
        $mins = $regs [2] ? $regs [2] : null;
        $secs = $regs [3] ? $regs [3] : null;
        $ms = $regs [4] ? $regs [4] : null;
    }

    return array ('codec' => $codec,
            'width' => $width,
            'height' => $height,
            'hours' => $hours,
            'mins' => $mins,
            'secs' => $secs,
            'ms' => $ms
    );

}


if ( ! function_exists('getYoutubeInfo')){
function getYoutubeInfo($youtubeVideoID) {
 $obj= new stdClass;
      
 // set video data feed URL
     $feedURL = 'http://gdata.youtube.com/feeds/api/videos/' . $youtubeVideoID;

     // read feed into SimpleXML object
     $entry = simplexml_load_file($feedURL);
      
       // get nodes in media: namespace for media information
       $media = $entry->children('http://search.yahoo.com/mrss/');
       $obj->title = $media->group->title;
       $obj->description = $media->group->description;
      
       // get video player URL
       $attrs = $media->group->player->attributes();
       $obj->watchURL = $attrs['url']; 
      
       // get video thumbnail
       $attrs = $media->group->thumbnail[0]->attributes();
       $obj->thumbnailURL = $attrs['url']; 
            
       // get <yt:duration> node for video length
       $yt = $media->children('http://gdata.youtube.com/schemas/2007');
       $attrs = $yt->duration->attributes();
       $obj->length = $attrs['seconds']; 
      
       // get <yt:stats> node for viewer statistics
       $yt = $entry->children('http://gdata.youtube.com/schemas/2007');
       $attrs = $yt->statistics->attributes();
       $obj->viewCount = $attrs['viewCount']; 
      
       // get <gd:rating> node for video ratings
       $gd = $entry->children('http://schemas.google.com/g/2005'); 
       if ($gd->rating) 
 { 
         $attrs = $gd->rating->attributes();
         $obj->rating = $attrs['average']; 
       } 
 else 
 {
        $obj->rating = 0;         
       }
        
 // get <gd:comments> node for video comments
       $gd = $entry->children('http://schemas.google.com/g/2005');
       if ($gd->comments->feedLink) 
 { 
         $attrs = $gd->comments->feedLink->attributes();
         $obj->commentsURL = $attrs['href']; 
         $obj->commentsCount = $attrs['countHint']; 
       }
//$videoInfo = parseVideoEntry($videoId);
//print '<pre>';print_r($obj);exit; 
       return $obj;      


}
}

if ( ! function_exists('getlengthInMinutes')){
function getlengthInMinutes($seconds) {
	if($seconds < 60) {
		$length = $seconds.'s';
	}
	else {
		$minutes = round($seconds / 60);
		$seconds = $seconds - ($minutes * 60);
		if($seconds == 0)
		$length = $minutes.'m';
		else
		$length = $minutes.'m'.$seconds.'s';
	}
	return $length;
}
}

if ( ! function_exists('monthByID')){
function monthByID($mon) {
	$month = '';
	switch($mon) {
		case 1:
			$month = 'Jan';
			break;
		case 2:
			$month = 'Feb';
			break;
		case 3:
			$month = 'Mar';
			break;
		case 4:
			$month = 'Apr';
			break;
		case 5:
			$month = 'May';
			break;
		case 6:
			$month = 'Jun';
			break;
		case 7:
			$month = 'Jul';
			break;
		case 8:
			$month = 'Aug';
			break;
		case 9:
			$month = 'Sep';
			break;
		case 10:
			$month = 'Oct';
			break;
		case 11:
			$month = 'Nov';
			break;
		case 12:
			$month = 'Dec';
			break;
	}
	return $month;
}
}

if ( ! function_exists('formatBytes')){
function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'k', 'M', 'G', 'T');   
    return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
}
}

if ( ! function_exists('displayAdminStatus')){
function displayAdminStatus($st,$content_type = '',$id = '')
{
    $status = '';
	switch($st) {
		case 0:
			$status = '<a id="u-status-'.$content_type.'-'.$id.'" style="cursor:pointer" onclick="ChangeRecordStatus(\''.$content_type.'\','.$id.')"><span class="label label-important">UnPublished</span>';
			break;
		case 1:
			$status = '<a id="u-status-'.$content_type.'-'.$id.'" style="cursor:pointer" onclick="ChangeRecordStatus(\''.$content_type.'\','.$id.')"><span class="label label-success">Published</span>';
			break;
			
	}

	return $status;
}
}

if ( ! function_exists('displayAdminLanguage')){
function displayAdminLanguage($lg)
{
    $lang_label = '';
	switch($lg) {
		case '':
			$lang_label = '<span class="label">All Languages</span>';
			break;
		case 'en':
			$lang_label = '<span class="label label-success">English</span>';
			break;
		case 'ar':
			$lang_label = '<span class="label label-important">Arabic</span>';
			break;
		case 'fr':
			$lang_label = '<span class="label label-inverse">French</span>';
			break;
			
	}
	return $lang_label;
}
}

if ( ! function_exists('getDisplaySection')){
function getDisplaySection($id,$section)
{
	$block = '';
	if($section == 'sections') {
		switch($id) {
			case 3:
				$block = 'info_items';
				break;
			case 4:
				$block = 'news';
				break;
			case 6:
				$block = 'dme-auction-files';
				break;
case 8:
				$block = 'historical-data';
				break;
		}
	}
    if($section == 'sections_pages_details') {
		switch($id) {
		/*	case 1:
				$block = 'member-list';
				break;*/
			case 18:
				$block = 'historical-data';
				break;
			case 19:
				$block = 'historical-data';
				break;
			case 20:
				$block = 'historical-data';
				break;
			case 16:
				$block = 'dme-data-load';
				break;
			case 17:
				$block = 'dme-data-load';
				break;
		}
	}
	if($section == 'sections_pages') {
		switch($id) {
			case 1:
				$block = 'accordion-content';
				break;
			case 2:
				$block = 'member-list';
				break;
			case 3:
				$block = 'member-notices';
				break;
			case 4:
				$block = 'member-notices';
				break;
			case 7:
				$block = 'careers_form';
				break;
			case 8:
				$block = 'subscription_form';
				break;
			case 36:
				$block = 'dme-data-full-curve';
				break;
			case 38:
				$block = 'faqs-categories';
				break;
		}
	}
	return $block;
}
}


if ( ! function_exists('codeToMonth')){
function codeToMonth($code)
{
	$mon = '';
	switch($code) {
		case 'F';
			$mon = 'Jan';
			break;
		case 'G';
			$mon = 'Feb';
			break;
		case 'H';
			$mon = 'Mar';
			break;
		case 'J';
			$mon = 'Apr';
			break;
		case 'K';
			$mon = 'May';
			break;
		case 'M';
			$mon = 'Jun';
			break;
		case 'N';
			$mon = 'Jul';
			break;
		case 'Q';
			$mon = 'Aug';
			break;
		case 'U';
			$mon = 'Sep';
			break;
		case 'V';
			$mon = 'Oct';
			break;
		case 'X';
			$mon = 'Nov';
			break;
		case 'Z';
			$mon = 'Dec';
			break;
	}
	return $mon;
}
}



if ( ! function_exists('monthToCode')){
function monthToCode($mon)
{
	$code = '';
	switch($mon) {
		case 'Jan';
			$code = 'F';
			break;
		case 'Feb';
			$code = 'G';
			break;
		case 'Mar';
			$code = 'H';
			break;
		case 'Apr';
			$code = 'J';
			break;
		case 'May';
			$code = 'K';
			break;
		case 'Jun';
			$code = 'M';
			break;
		case 'Jul';
			$code = 'N';
			break;
		case 'Aug';
			$code = 'Q';
			break;
		case 'Sep';
			$code = 'U';
			break;
		case 'Oct';
			$code = 'V';
			break;
		case 'Nov';
			$code = 'X';
			break;
		case 'Dec';
			$code = 'Z';
			break;
	}
	return $code;
}
}

if ( ! function_exists('object_to_array')){
function object_to_array($data)
{
    if (is_array($data) || is_object($data))
    {
        $result = array();
        foreach ($data as $key => $value)
        {
            $result[$key] = object_to_array($value);
        }
        return $result;
    }
    return $data;
}
}

if ( ! function_exists('displayValue')){
function displayValue($val)
{
    if(intval($val) != 0) {
		$val = number_format($val, 2, '.', ',');
		$val = str_replace('.00','',$val);
		return $val;
	}
	else
    return '';
}
}

if ( ! function_exists('cleanParam')){

function cleanParam($name=NULL, $value=false, $option="default")
{
    $option=false; // Old version depricated part
    $content=(!empty($_GET[$name]) ? trim($_GET[$name]) : (!empty($value) && !is_array($value) ? trim($value) : false));
    if(is_numeric($content))
        return preg_replace("@([^0-9])@Ui", "", $content);
    else if(is_bool($content))
        return ($content?true:false);
    else if(is_float($content))
        return preg_replace("@([^0-9\,\.\+\-])@Ui", "", $content);
    else if(is_string($content))
    {
        if(filter_var ($content, FILTER_VALIDATE_URL))
            return $content;
        else if(filter_var ($content, FILTER_VALIDATE_EMAIL))
            return $content;
        else if(filter_var ($content, FILTER_VALIDATE_IP))
            return $content;
        else if(filter_var ($content, FILTER_VALIDATE_FLOAT))
            return $content;
        else
            return preg_replace("@([^a-zA-Z0-9\+\-\_\*\@\$\!\;\.\?\#\:\=\%\/\ ]+)@Ui", "", $content);
    }
    else false;
}
}


if ( ! function_exists('formatBytes')){
function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 

    // Uncomment one of the following alternatives
   $bytes /= pow(1024, $pow);
    // $bytes /= (1 << (10 * $pow)); 

    return round($bytes, $precision) . ' ' . $units[$pow]; 
} 
}
if ( ! function_exists('getModules')){
function getModules()
{
	$arr = array(
		""=>"- select -",

	);
    return $arr;
}
}



if ( ! function_exists('arrangeParentLevels')){
function arrangeParentLevels($arr)
{
	
	$newarr = array();
	$finalarr = array();
	if(!empty($arr)) {
		$levelArr = $arr;
		$i=0;
		$newarr[$i] = $arr;
		while(isset($levelArr['id_parent']) && $levelArr['id_parent'] != 0) {
			$i++;
			$newarr[$i] = $levelArr['parent_level'];
			$levelArr = $levelArr['parent_level'];
		}
		//print '<pre>'; print_r($newarr); exit;
		$w=0;
		$cc = count($newarr);
		//echo 'w: '.$cc;exit;
		for($k = $cc; $k > 0; $k--) {
			//echo 333;exit;
			$finalarr[$w] = $newarr[$k - 1];
			$w++;
		}
		//echo 2;exit;
	}
	//print '<pre>'; print_r($finalarr); exit;
    return $finalarr;
}
}

if ( ! function_exists('displayLevels')){
function displayLevels($arr,$index,$id = "")
{
	$string = '';
	//print '<pre>'; print_r($arr); exit;
	foreach($arr as $k => $ar) {
$cl = "";
if($id != "" && $ar['id_content'] == $id)
$cl = "selected='selected'";
		$string .= '<option value="'.$ar['id_content'].'" '.$cl.'>'.str_repeat('-',$index).' '.$ar['title'].'</option>';
		if(!empty($ar['sub_levels'])) {
			$string .= displayLevels($ar['sub_levels'],$index + 1,$id);
		}
	}
    return $string;
}
}

if ( ! function_exists('cleanJsonContent')){
function cleanJsonContent($desc)
{
	$find = array("&nbsp;","\t");
	$replace = array("","","","");
	$cleanContent = str_replace($find,$replace,strip_tags($desc));
	return $cleanContent;
}
}
