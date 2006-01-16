<! BEGIN MAIL HEADER>

<HTML>
<HEAD>

<?php

$filename = basename($REQUEST_URI);

if(strstr($filename, "php3"))
{
    $meta  = get_meta_tags($filename);
    $title = $meta["title"];
}

if($title)
    print "<title>$title</title>";
else
    print "<title>Gnucash!</title>";

?>
<STYLE TYPE="text/css">
<!-- 
        A:link {text-decoration:none}
        A:visited{text-decoration:none}
        A:active{text-decoration:none}

//-->
</STYLE>
</HEAD>

<BODY BGCOLOR="#8b7765" TEXT="#000000" LINK="#000000" VLINK="#575757">

<! END HEADER>

<CENTER>
<IMG SRC="/images/newlogo.gif">
</CENTER>

<BR>

<CENTER>
<TABLE WIDTH=700>
  <TR>
    <TD WIDTH=100% VALIGN=TOP>
<TABLE BORDER="0" CELLPADDING="1" CELLSPACING="0" BGCOLOR="#000000" WIDTH="97%"><TR><TD>
<TABLE WIDTH="100%" BORDER="0" CELLSPACING="1" CELLPADDING="3" BGCOLOR="#fffacd">
<TR><TD ALIGN="center" BGCOLOR="#EECFA1"><B><FONT FACE="Lucida,Verdana,Helvetica,Arial"><FONT COLOR="#000000"> 
