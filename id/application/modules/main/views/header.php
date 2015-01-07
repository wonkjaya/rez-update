<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
$title="rezsoft :: store";
$metatitle="";
$metaimage="";
$metades="";
if(isset($meta)){
	if(count($meta) > 0){
		$title=$meta->metatitle;
		$metatitle=$title;
		$metaimage=$meta->metaimage;
		$metades=$meta->metadescription;
	}
}
?>
<title><?=$title?></title>
<meta property="og:title" content="<?=$title?>"/>
<meta property="og:image" content="<?=images($metaimage)?>"/>
<meta property="og:url" content="http://<?=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']?>"/>
<meta property="og:site_name" content="rezstore.com"/>
<meta property="og:description" content="<?=$metades?>"/>
	
<link rel="stylesheet" href="<?=css('style.css')?>" type="text/css" media="screen" />
<link rel="icon" href="<?=images('facicon.ico')?>" type="image/gif" sizes="16x16">
<script src="<?=js('jeasyui/jquery.min.js')?>"></script>
</head>

