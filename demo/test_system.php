<?php
/**
 * 消费任务 （可运行多个进程）
 * @author: liukelin 314566990@qq.com
 */
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'../parsley/parsley.php');

$st = new parsley();
$st->digestion_queue_data();