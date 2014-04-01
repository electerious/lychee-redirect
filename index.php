<?php

/**
 * @author		Tobias Reich
 * @copyright	2014 by Tobias Reich
 * @version		0.0.1
 * @description	Redirect from an album-name to a Lychee-album.
 */

define('LYCHEE', true);

# Config
$lychee		= '../': # Path to the root of Lychee
$album404	= '../'; # When album not found, redirect to this site
$name404	= '../'; # When name missing, redirect to this site

# Include
require($lychee . 'data/config.php');
require($lychee . 'php/modules/db.php');
require($lychee . 'php/modules/misc.php');

# Connect and get settings
$database	= dbConnect();
$name		= mysqli_real_escape_string($database, urldecode($_GET['name']));

# Check code
if (!isset($name)||$name==='') {
	header("Location: $name404");
	exit();
}

# Search code
$query	= "SELECT id FROM lychee_albums WHERE title = '$name' LIMIT 1;";
$result = $database->query($query);
$return = $result->fetch_array();
$id		= $return['id'];

# Redirect to album
if (!isset($return, $id)) header("Location: $name404");
else header("Location: $lychee#$id");

?>