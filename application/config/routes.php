<?php //  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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

$route['default_controller'] = "main";
$route['404_override'] = '';
//public
$route['publicpage'] = "main/publicpage";
$route['login_validation'] = "main/login_validation";
$route['logout'] = "main/logout";
//employer
$route['employer_header'] = "main/employer_header";
$route['employer_dashboard'] = "employer/employer_dashboard";
$route['employer_postvacancypage'] = "main/employer_postvacancypage";
$route['employer_appspage'] = "main/employer_appspage";
$route['employer_appsperjob'] ="main/employer_appsperjob";
$route['employer_appsprof'] = "main/employer_appsprof";
$route['employer_vacancypage'] = "main/employer_vacancypage";
$route['employer_updatevacancy'] = "main/employer_updatevacancy";
$route['employer_repost'] = 'main/employer_repost';
$route['employer_checkvalidrepost/(:any)'] = 'main/employer_checkvalidrepost/$1';
//post vacancy
$route['employer_postvacancypage'] = "main/employer_postvacancypage";
$route['employer_postvacancy'] = "main/employer_postvacancy";
$route['table_sort']='main/table_sort';

$route['table_sort']='main/table_sort';

//jobseeker
$route['jobseeker_myappspage'] ="main/jobseeker_myappspage";
$route['jobseeker_jobmarketpage'] = "main/jobseeker_jobmarketpage";
$route['apply_job/(:num)/(:num)'] = "main/apply_job/$1/$1";
$route['decline_job/(:num)'] = "main/decline_job/$1";
$route['jobseeker_myappsdetail'] ="main/jobseeker_myappsdetail";

//tesda
$route['tesda_dashboard'] = "main/tesda_dashboard";

//register
$route['registerpage'] ="main/registerpage";
$route['register_validation'] = "main/register_validation"; 
$route['registerJSpage'] = "main/registerJSpage"; 
$route['registerEpage'] = "main/registerEpage"; 
/* End of file routes.php */
/* Location: ./application/config/routes.php */