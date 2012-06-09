<?php
// Set the page name to default to "home"
$page = "home";

// Check if the page variable "id" is set, and set it to "page" if so
if (isset($_GET["id"])) {
	$page = $_GET["id"];
}

// Check if the page retrieved is valid, otherwise set to the homepage
if (!file_exists("$page.php")) {
	$page = "home";
}

?>
<html>
<head>
<title>JG Programing</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
	<table HEIGHT="100" WIDTH="100%" BORDER="1" ><tr>
		<th fontsize align="left">JG Programming.com</th>
	</tr></table>
	<div class="wrap">
	<div class="banner"></div>	
		
	
	<TABLE BORDER="1" WIDTH="90%">
  <TR>
   <TD WIDTH=250>
    <TABLE  height="100" BORDER="1" WIDTH="72%" >
     <TR>
		<th align="left" <? if ($page=="home") echo "class=\"active\" "?>style="color: grey"><a href="index.php?id=home">Home</a></th>
		<th align="left" <? if ($page=="about") echo "class=\"active\" "?>style="color: grey"><a href="index.php?id=about">About</a></th>
		<th align="left" <? if ($page=="learn") echo "class=\"active\" "?>style="color: grey"><a href="index.php?id=learn">Learn</a></th>
		<th align="left" <? if ($page=="create") echo "class=\"active\" "?>style="color: grey"><a href="index.php?id=create">Create</a></th>
		<th align="left" <? if ($page=="share") echo "class=\"active\" "?>style="color: grey"><a href="index.php?id=share">Share</a></th>
		<th align="left" <? if ($page=="contact") echo "class=\"active\" "?>style="color: grey"><a href="index.php?id=contact">Contact</a></th>
     </TR>
    </TABLE>
   </TD>
   <TD WIDTH="10%">
    <TABLE BORDER="1">
     <TR>
     	<th><img src="pictures/Lemon.jpg"alt="This is where the logo will go!" align="left"  HEIGHT="100" WIDTH="100" BORDER="0"/></th>
		<th><img src="pictures/Lemon.jpg"alt="This is where the logo will go!" align="left"  HEIGHT="100" WIDTH="100" BORDER="0"/></th>
		<th><img src="pictures/Lemon.jpg"alt="This is where the logo will go!" align="left"  HEIGHT="100" WIDTH="100" BORDER="0"/></th>
     </TR>
    </TABLE>
   </TD>
  </TR>
</TABLE>
</div>
    <div class="content"><? include("$page.php"); ?></div>
    <HR width="1", size="730">
    	
</body>
</html>