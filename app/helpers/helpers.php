<?php

/*****************
 * 
 * CONSTANTS
 * 
 *****************/


define('CAT_REPORT', 4);
define('CAT_NEWS', 5);
define('CAT_STORIES', 6);
define('CAT_FOCUS', 7);
define('CAT_PUBLICATION', 8);
define('CAT_NOTICE', 9);
define('CAT_UPCOMING', 10);


/*****************
 * 
 * HELPER FUNCTIONS
 * 
 *****************/

function myTruncate($string, $limit, $break=".", $pad="...")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  // is $break present between $limit and the end of the string?
  if(false !== ($breakpoint = strpos($string, $break, $limit))) {
    if($breakpoint < strlen($string) - 1) {
      $string = substr($string, 0, $breakpoint) . $pad;
    }
  }

  return $string;
}