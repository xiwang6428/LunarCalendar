# LunarCalendar

农历（阴历）万年历 PHP版类库。
此项目是仿https://github.com/zzyss86/LunarCalendar项目的代码编写的。
原版是用JS编写的，由于本人专做PHP项目，不想再额外搭一个node.js服务器调用，所以就把原类库手翻成PHP版了。

功能的实现可以说是照着写的，实现原版百分百的函数功能。

使用示例：

<?php

include 'CacheUtil.php';
include 'LunarCalendar.php';

$lunar = new ziweiyang\LunarCalendar();
var_dump($lunar->calendar(2018,1,true));


本人初测有效，暂无发现有其他运行问题。如有请告知。
QQ:49937174
Email:49937174@qq.com
