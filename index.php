<?php

###
# @author		Tobias Reich
# @copyright	2014 by Tobias Reich
# @version		1.0.0
# @description	Redirect from an album-name to a Lychee-album.
###

# Config
if (file_exists('config.ini')) $config = parse_ini_file('config.ini');
else exit('Error: config.ini not found');

# Include
require($config['lychee'] . 'php/define.php');
require($config['lychee'] . 'php/autoload.php');
require($config['lychee'] . 'data/config.php');

# Connect and get name
$database	= Database::connect($dbHost, $dbUser, $dbPassword, $dbName);
$name		= mysqli_real_escape_string($database, $_GET['name']);

# Check name
if (!isset($name)||$name==='') {
	header('Location: ' . $config['album404']);
	exit();
}

# Search code
$query	= "SELECT id FROM lychee_albums WHERE title = '$name' LIMIT 1;";
$result = $database->query($query);
$return = $result->fetch_array();
$id		= $return['id'];

# Redirect to album
if (!isset($return, $id)) header('Location: ' . $config['name404']);
else header('Location: ' . $config['lychee'] . '#' . $id);

?>