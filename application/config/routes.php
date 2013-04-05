<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "guests_interface";
$route['404_override'] = '';

/*************************************************** AJAX INTRERFACE ***********************************************/
/******************guest interface ********************/
$route['send-feedback'] = "ajax_interface/sendFeedBack";
$route['admin/sign-in'] = "ajax_interface/loginIn";
/*********** events ***************/
$route['admin/event/insert'] = "ajax_interface/insertEvent";
$route['admin/event/update'] = "ajax_interface/updateEvent";
$route['admin/event/delete'] = "ajax_interface/deleteEvent";
$route['admin/events/save/photo'] = "ajax_interface/updateEventPhoto";
$route['change-event-status'] = "ajax_interface/changeEventStatus";
/*************************************************** USERS INTRERFACE ***********************************************/
/*************** pages ****************/
$route['admin'] = "guests_interface/loginIn";
$route['about'] = "guests_interface/page";
$route['pool'] = "guests_interface/page";
$route['restaurant'] = "guests_interface/page";
$route['child'] = "guests_interface/page";
$route['contacts'] = "guests_interface/page";
$route['bron'] = "guests_interface/page";

$route['afisha'] = "guests_interface/afisha";
$route['afisha/:any'] = "guests_interface/afishaView";

$route['log-off'] = "guests_interface/logoff";

/********** loading image *************/
$route['loadimage/:any/:num'] = "guests_interface/loadimage";
/*************************************************** ADMIN INTRERFACE ***********************************************/
$route[ADMIN_START_PAGE] = "admin_interface/events";
$route[ADMIN_START_PAGE.'/add'] = "admin_interface/insertEvent";
$route[ADMIN_START_PAGE.'/edit/:num'] = "admin_interface/editEvent";
$route[ADMIN_START_PAGE.'/edit'] = "admin_interface/editEvent";
