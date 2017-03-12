<?php


$page['name'] = !empty($_GET['page']) ? $_GET['page'] : '';

  switch ($page['name']) {
  case 'about';
include ('about.php');
break;

 case 'contact';
include ('contact.php');
break;

 case 'home';
 default:
include ('home.php');
break;

// default:
// include ('home.php');
// break;
 }

