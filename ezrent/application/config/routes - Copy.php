<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home/index";

/*$route['^ar/(.+)$'] = "$1";
$route['^en/(.+)$'] = "$1";
$route['^ar$'] = $route['default_controller'];
$route['^en$'] = $route['default_controller'];*/

//$route['(:any)'] = "pages/$1";

$route['back_office'] = "back_office/home";
$route['404_override'] = 'error404';

require_once( BASEPATH .'database/DB'. EXT );
$db =& DB();
$db->where('deleted',0);
$db->where('status',1);
$db->order_by('sort_order');
$query = $db->get( 'routes' );
$result = $query->result();
foreach( $result as $row )
{
	 $route[ $row->route_rule ]                        = $row->route_index;
	 $route[ '^en/'.$row->route_rule ]                 = $row->route_index;
	 $route[ '^ar/'.$row->route_rule ]                 = $row->route_index;
	 $route[ '^fr/'.$row->route_rule ]                 = $row->route_index;
}

//$db =& DB();
$db->where('deleted',0);
$db->where('status',1);
$db->order_by('sort_order');
$query = $db->get( 'sections' );
$result = $query->result();
foreach( $result as $row )
{
	 $route[ $row->title_url ]                        = 'pages/index/'.$row->id_sections;
	 $route[ '^en/'.$row->title_url ]                 = 'pages/index/'.$row->id_sections;
	 if(!empty($row->title_url_ar))
	 $route[ '^ar/'.$row->title_url_ar ]                 = 'pages/index/'.$row->id_sections;
	 if(!empty($row->title_url_ar))
	 $route[ '^fr/'.$row->title_url_fr ]                 = 'pages/index/'.$row->id_sections;
}


$db->where('deleted',0);
$db->where('status',1);
$db->order_by('sort_order');
$query = $db->get( 'sections_pages' );
$result = $query->result();
foreach( $result as $row )
{
	 $route[ $row->title_url ]                        = 'pages/sub/'.$row->id_sections_pages;
	 $route[ '^en/'.$row->title_url ]                 = 'pages/sub/'.$row->id_sections_pages;
	 if(!empty($row->title_url_ar))
	 $route[ '^ar/'.$row->title_url_ar ]                 = 'pages/sub/'.$row->id_sections_pages;
	 if(!empty($row->title_url_ar))
	 $route[ '^fr/'.$row->title_url_fr ]                 = 'pages/sub/'.$row->id_sections_pages;
}

$db->where('deleted',0);
$db->where('status',1);
$db->order_by('sort_order');
$query = $db->get( 'sections_pages_details' );
$result = $query->result();
foreach( $result as $row )
{
	 $route[ $row->title_url ]                        = 'pages/details/'.$row->id_sections_pages_details;
	 $route[ '^en/'.$row->title_url ]                 = 'pages/details/'.$row->id_sections_pages_details;
	 if(!empty($row->title_url_ar))
	 $route[ '^ar/'.$row->title_url_ar ]                 = 'pages/details/'.$row->id_sections_pages_details;
	 if(!empty($row->title_url_ar))
	 $route[ '^fr/'.$row->title_url_fr ]                 = 'pages/details/'.$row->id_sections_pages_details;
}

$db->where('deleted',0);
$db->where('status',1);
$db->order_by('sort_order');
$query = $db->get( 'content_pages' );
$result = $query->result();
foreach( $result as $row )
{
	 $route[ $row->title_url ]                        = 'pages/content/'.$row->id_content_pages;
	 $route[ '^en/'.$row->title_url ]                 = 'pages/content/'.$row->id_content_pages;
	 if(!empty($row->title_url_ar))
	 $route[ '^ar/'.$row->title_url_ar ]                 = 'pages/content/'.$row->id_content_pages;
	 if(!empty($row->title_url_ar))
	 $route[ '^fr/'.$row->title_url_fr ]                 = 'pages/content/'.$row->id_content_pages;
}

//print '<pre>'; print_r($route); exit;
//$route['branches/Qatar'] = 'branches/index/Qatar';
$route['^ar/(.+)$'] = "$1";
$route['^fr/(.+)$'] = "$1";
$route['^en/(.+)$'] = "$1";
$route['^fr$'] = $route['default_controller'];
$route['^ar$'] = $route['default_controller'];
$route['^en$'] = $route['default_controller'];
/*print '<pre>';
print_r($route);
exit;*/
//$route['_404'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */