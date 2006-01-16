<?php
    
    // This PHP script automatically scans the news directory
    // and posts news items on the gnucash home page, using the
    // gnucash html page style.  This script supports the display
    // of translated news items by getting news articles from two
    // directories: 'native' and 'alt'.  A news article from 'alt'
    // is displayed only if there is'nt a matching news article 
    // in 'native'.
    //
    // originally by Jeremy Collins, heavily modified by Linas Vepstas
    //
    //  change  this  to  the  directory  of  your  news  files 
    //  they  should  be  plain  ASCII  text  files  with  extension  ".txt" 

    # Perhaps we should be using this, but it won't work until we have
    # the DocumentRoot set up.
    # $newspath = $GLOBALS['DOCUMENT_ROOT']."/news/

    # So we'll just do this for now...
    $native_newspath  =  "news/"; 
    $alt_newspath  =  "../news/"; 

    // array of displayed filenames is indexed with filenames, holds timestamps.
    $newsfile  =  array(); 

    // ------------------------------------------
    // array holding native-language news articles.
    $native_files = array();
    $hd  =  dir($native_newspath); 
    
    //  Get  all  files  and  store  them  in  array 
    while(  $filename  =  $hd->read()  )  { 
        $s=strtolower($filename); 
        if  (strstr($s, ".txt"))  { 
            $native_files[$filename]  =  $native_newspath.$filename;
        }    
    } 
    $hd->close();  

    // ------------------------------------------
    
    //  Create  handle  to  search  directory  $newspath  for  files 
    $hd  =  dir($alt_newspath); 
    
    //  Get  all  files  and  store  them  in  array 
    while(  $filename  =  $hd->read()  )  { 
        $s=strtolower($filename); 
        if  (strstr($s, ".txt"))  { 

	    $display_filename = $alt_newspath.$filename;
	    
            //  Determine  last  modification  date 
            $lastchanged=filemtime($display_filename); 
            $newsfile[$display_filename]  =  $lastchanged; 
        }    
    } 
    $hd->close();  
    
    //  Sort  files  in  descending  order 
    arsort($newsfile); 
    //  Output  files  to  browser 
    for(reset($newsfile);  $key  =  key($newsfile);  next($newsfile))  
    { 
        $fa  =  file($key); 
        $n=count($fa); 

        echo("<table border=0 cellpadding=1 cellspacing=0 width=\"100%\">");
        echo("<tr><td valign=middle align=center bgcolor=#666699>");
        echo("<table border=0 cellpadding=5 cellspacing=1 bgcolor=#cacaf7 width=\"100%\">");
        echo("<tr><td valign=top>");
        echo("<table border=0 cellpadding=0 cellspacing=0>");
        echo("<tr><td> <img src=/images/icons/document.txt.gif width=16 height=16 border=0>&nbsp;</td>");
       
        echo("<td>");
	print $fa[0];
	print  " - <font size=-1><b>(".date( "Y-m-d",$newsfile[$key]);
	print  "&nbsp; &nbsp;".date( "H:i:s",$newsfile[$key]). ")</b></font></td>\n"; 
        echo("</tr> </table> </td> </tr>");
        echo("<tr bgcolor=#ffffff> <td valign=top> <font size=-1>");

        for  ($i=1;  $i<$n;  $i=$i+1)  { 
	    print $fa[$i];
        } 
        echo("</font> </td> </tr> </table> </tr> </table><br><br>");

    }    
    
    ?>
