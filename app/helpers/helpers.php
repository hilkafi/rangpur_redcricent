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
define('CAT_MISSION', 5);
define('CAT_HISTORY', 3);
define('CAT_MOV_PRICEPLE', 7);
define('CAT_DISASTER_RISK_MANAGEMENT', 11);
define('CAT_DISASTER_RESPONSE', 12);
define('CAT_TRAINING', 13);
define('CAT_COMMUNITY_DEVELOPMENT', 14);
define('CAT_PLANNING_DEVELOPMENT', 15);
define('CAT_HEALTH', 16);
define('CAT_YOUTH_VOLUNTEERS', 17);
define('CAT_CROSS_CUTTING_ISSUES', 18);

//Unit Type
define('RCY', 'rcy');
define('UPAZILA', 'upazila');

//Page Constant
define('PAGE_CONTACT', 9);



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

function upazilas() {
  return [
    'kaunia' => 'Kaunia',
    'gangachara' => 'Gangachara',
    'taraganj' => 'Taraganj',
    'pirganj' => 'Pirganj',
    'pirgachha' => 'Pirgachha',
    'badarganj' => 'Badarganj',
    'mitha_pukur' => 'Mitha Pukur',
    'rangpur_sadar' => 'Rangpur Unit',
    'rangpur_city_corporation' => 'Rangpur City Corp.',
  ];
}