<?php

require_once(dirname(__FILE__).'/../SSUtil.php');

$apiobj = new SSUtil();

var_dump($apiobj->get_slideUser('username'));
