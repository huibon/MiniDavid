<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head> 
<link href="<?=CSS?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?=CSS?>style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?=LIB?>jquery-1.7.1.min.js"></script>

<title><?=$template['title']?></title>

<?php
if (is_array($template['libraries'])) {
	foreach ($template['libraries'] as $library) {
		echo ($library['css']?'<link href="'.LIB.$library['css'].'" rel="stylesheet" type="text/css" />':'');
		echo ($library['lib']?'<script type="text/javascript" src="'.LIB.$library['lib'].'"></script>':'');
		echo ($library['js']?'<script type="text/javascript" src="'.LIB.$library['js'].'"></script>':'');
	}
}
?>

<?php if (is_array($template['css'])) {
	foreach ($template['css'] as $css) {
		echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$css\" />\n";
	}
} ?>


<script type="text/javascript">
$(document).ready( function () {
	// onload goes here
});
</script>

</head>

<body>