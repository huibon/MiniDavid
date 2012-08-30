<?php

/* STANDARD INTERNAL LOCATION VARIABLES */

$WEBROOT = "http://".$_SERVER['HTTP_HOST'].'/';
$DOC = $WEBROOT."doc/";
$TEMPLATE = $WEBROOT."template/";
$LIB = $TEMPLATE."lib/";
$IMG = $TEMPLATE."img/";
$JS = $TEMPLATE."js/";
$CSS = $TEMPLATE."css/";

define('WEBROOT', $WEBROOT);
define('DOC', $DOC);
define('TEMPLATE', $TEMPLATE);
define('LIB', $LIB);
define('IMG', $IMG);
define('JS', $JS);
define('CSS', $CSS);
