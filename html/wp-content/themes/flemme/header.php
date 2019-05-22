<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package WordPress
 * @subpackage flemme
 * 
 */
?>	<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>theme flemme</title>
		
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<header class="header">
			<div class="container">
				<div class="blog-header">
					<h1 class="blog-title">Exemple de thème WordPress</h1>
					<p class="lead blog-description">Création d’un thème WordPress à titre de tutoriel sur WP Pour Les Nuls.</p>
				</div>
				<nav id="navigation-principale" role="navigation">
					<?php wp_nav_menu(array('theme_location' => 'main_nav'));?>
				</nav>
			</div>
		</header>
		<section class="container">
			