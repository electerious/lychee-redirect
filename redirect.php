<?php

/**
 * @name		redirect.php
 * @author		Tobias Reich
 * @copyright	2014 by Tobias Reich
 * @version		0.0.1
 * @description	Redirect from an album-name to a Lychee-album.
 */

define('LYCHEE', true);

// Config
$lychee		= '../';			// Path to the root of Lychee
$lychee200	= '../';			// When album found, redirect to this lychee
$album404	= 'check.php';		// When album not found, redirect to this site
$code404		= 'check.php';	// When code parameter not found, redirect to this site

// Declare
$error = '';

// Include
require($lychee . 'data/config.php');
require($lychee . 'php/modules/db.php');
require($lychee . 'php/modules/misc.php');
require($lychee . 'php/modules/settings.php');

// Connect and get settings
$database	= dbConnect();
$settings	= getSettings();
$code		= $_GET['code'];

// Escape
foreach(array_keys($_POST) as $key)	$_POST[$key] = mysqli_real_escape_string($database, urldecode($_POST[$key]));
foreach(array_keys($_GET) as $key)	$_GET[$key] = mysqli_real_escape_string($database, urldecode($_GET[$key]));

// Check code
if (!isset($code)||$code===''||strlen($code)!=10) {
	header("Location: $code404");
	exit();
}

// Search code
$query	= "SELECT id FROM lychee_albums WHERE title = '$code' LIMIT 1;";
$result = $database->query($query);
$return = $result->fetch_array();
$id		= $return['id'];

// Redirect to album
if (!isset($return)||!isset($id)) {
	header("Location: $code404");
	exit();
} else {
	header("Location: $lychee200#$id");
	exit();
}

?>