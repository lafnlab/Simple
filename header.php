<?php
// header.php
include 'connect.php';

# get and set the language before this point
echo "<!DOCTYPE html>\n";
echo "<html lang=\"".$lang."\">\n";
echo "<head>\n";
echo "\t<title>Simple | ".P_($page_title)."</title>\n";
echo "\t<link rel=stylesheet href=\"styles/mode.css\">\n";
echo "</head>\n";
echo "<body>\n";
echo "\t<header>\n";
echo "\t\t<a href=\"/index.php\">".P_("SIMPLEMEDIAMANAGER")."</a>\n";
echo "\t</header>\n";
?>
