<?php

/**
 *
 */
class Bcrumbs
{
  function breadcrumb($Seprarado ='/', $home = 'Home')
  {
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    $base = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']== 'on'?'s':'');
    $breadcrumbs = array('<a href="'.$base .'">'. $home . '</a>');
    $last = end(array_keys($path));

    foreach ($path as $x => $crumb) {
      $title = ucwords(str_replace(array('.php','_'), array('',' '), $crumb));

    /*  if ($x != $last) {
        $breadcrumbs[] = $home;
      }else {
        $breadcrumbs[] = $title;
      }*/
    }
    return implode($breadcrumbs);
  }

}


 ?>
