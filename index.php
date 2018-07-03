<?php

include 'CacheUtil.php';
include 'LunarCalendar.php';

$lunar = new ziweiyang\LunarCalendar();
var_dump($lunar->calendar(2018,1,true));