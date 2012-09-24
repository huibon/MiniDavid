<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<link href="<?=CSS?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?=CSS?>style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?=JS?>jquery-1.8.0.min.js"></script>

<title><?php echo $template['title']; ?></title>

<?php
if (is_array($template['libraries'])) {
	foreach ($template['libraries'] as $library) {
		echo ($library['css']?'<link href="'.CSS.$library['css'].'" rel="stylesheet" type="text/css" />':'');
		echo ($library['lib']?'<script type="text/javascript" src="'.JS.$library['lib'].'"></script>':'');
		echo ($library['js']?'<script type="text/javascript" src="'.JS.$library['js'].'"></script>':'');
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
