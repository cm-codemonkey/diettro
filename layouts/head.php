<?php defined('_EXEC') or die; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$vkye_lang}">
	<head>
		<meta charset="UTF-8" />
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		{$dependencies.meta}
		<base href="{$vkye_base}">
		<title>{$vkye_title}</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="codemonkey.com.mx" />
		<meta name="description" content="" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="stylesheet" href="https://cdn.codemonkey.com.mx/css/valkyrie.css?v=1.0" type="text/css" media="all" />
		<link rel="stylesheet" href="{$path.css}styles.css?v=1.0" type="text/css" media="all" />
		{$dependencies.css}
	</head>
	<body>
		<header class="main_header">
			<a data-action="open_mobile_menu"><i class="fas fa-bars"></i></a>
		</header>
		<header class="mobile_header">
			<a data-action="close_mobile_menu"><i class="fas fa-window-close"></i></a>
			<figure>
				<img src="{$path.images}imagotype.png" alt="Imagotype">
			</figure>
			<nav>
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#us">Nosotros</a></li>
					<li><a href="#projects">Proyectos</a></li>
					<li><a href="#services">Servicios</a></li>
					<li><a href="#contact">Contacto</a> </li>
				</ul>
			</nav>
		</header>
