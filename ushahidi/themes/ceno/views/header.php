<!doctype html>
<html>
<head>
	<title><?php echo $site_name; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo $header_block; ?>
	<?php
	// Action::header_scripts - Additional Inline Scripts from Plugins
	Event::run('ushahidi_action.header_scripts');
	?>
</head>

<body id="page">
	<!-- wrapper -->
	<div class="rapidxwpr floatholder">

		<!-- header -->
		<div id="header">

			<!-- logo -->
			<?php if($banner == NULL){ ?>
			<div id="logo">
				<h1><a href="<?php echo url::site();?>"><?php echo $site_name; ?></a></h1>
				<span><?php echo $site_tagline; ?></span>
			</div>
			<?php }else{ ?>
			<a href="<?php echo url::site();?>"><img src="<?php echo url::base().Kohana::config('upload.relative_directory')."/".$banner; ?>" alt="<?php echo $site_name; ?>" /></a>
			<?php } ?>
			<!-- / logo -->
			
			<!-- submit incident -->
			<?php echo $submit_btn; ?>
			<!-- / submit incident -->
			
		</div>
		<!-- / header -->

		<!-- main body -->
		<div id="middle">
			<div class="background layoutleft">
