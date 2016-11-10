<?php
// functions.php

// returns pretty & gettext friendly string
function P_($subject) {
	return htmlentities(_("$subject"));
}

function header_message($message) {
	$msg = "\t<div class=\"clear\"></div>\n\n";
	$msg .= "\t<!-- div class message is for general messages & warnings -->\n";
	$msg .= "\t<div class=\"message\">".$message."</div>\n";

	return $msg;
}

function redirect($location) {
	return header("Location: $location");
}

// generates a 10 character random ID
function id_gen($newid) {
	$chars	= "0123456789abcdefghijklmnopqrstuvwxyzабвдежзийклмнопрстуфхцчшщъыьэюяàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿßABCDEFGHIJKLMNOPQRSTUVWXYZАБВГДЕЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞẞ";
	$tmp = preg_split("//u", $chars, -1, PREG_SPLIT_NO_EMPTY);
	shuffle($tmp);
    	$tmp2 = join("", $tmp);
	return mb_substr($tmp2,0,10,"UTF-8");
}

// like id_gen, but limited to ASCII characters
function table_name($random) {
	$chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$tmp = preg_split("//u", $chars, -1, PREG_SPLIT_NO_EMPTY);
	shuffle($tmp);
    	$tmp2 = join("", $tmp);
	return mb_substr($tmp2,0,10,"UTF-8");}
?>
