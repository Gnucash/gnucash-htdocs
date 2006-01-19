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

    # Be sure to define the following patch to newsdirs
    if (!$native_newspath) { $native_newspath  =  "news/";  }
    if (!$alt_newspath) { $alt_newspath =  "../news/";  }

    // array of displayed filenames is indexed with filenames, holds timestamps.
    $newsfile  =  array();

    // ------------------------------------------
    // array holding native-language news articles.
    $native_files = array();
    $hd  =  dir($native_newspath);

    //  Get  all  files in the native directory; these will
    // always be displayed.
    while(  $filename  =  $hd->read()  )  {
        $s=strtolower($filename);
        if  (strstr($s, ".txt"))  {
            $native_files[$filename]  =  $native_newspath.$filename;

	    $display_filename = $native_newspath.$filename;

            //  Determine  last  modification  date
            $lastchanged=filemtime($display_filename);
            $newsfile[$display_filename]  =  $lastchanged;
        }
    }
    $hd->close();

    // ------------------------------------------
    // Are there alternate language articles to display?
    $hd  =  dir($alt_newspath);

    //  Get all the alternate-language files, and display them
    // only if there isn't a matching native language article.
    while(  $filename  =  $hd->read()  )  {
        $s=strtolower($filename);
        if  (strstr($s, ".txt"))  {

	    // display laternate only if there isn't a native !
	    if (!$native_files[$filename]) {
	       $display_filename = $alt_newspath.$filename;
               //  Determine  last  modification  date
               $lastchanged=filemtime($display_filename);
               $newsfile[$display_filename]  =  $lastchanged;
	    }
        }
    }
    $hd->close();

    // ------------------------------------------
    //  Sort  files  in  descending  date order
    arsort($newsfile);

    //  Output  files  to  browser
    for(reset($newsfile);  $key  =  key($newsfile);  next($newsfile))
    {
        $fa  =  file($key);
        $n=count($fa);

        echo ("<div class=\"news1\">");
        echo("<img alt=\"\" src=\"/images/icons/document.txt.gif\">&nbsp;");
	print $fa[0];
	print  " - <b>(".date( "Y-m-d",$newsfile[$key]);
	print  "&nbsp; &nbsp;".date( "H:i:s",$newsfile[$key]). ")</b>\n";

        echo "<div class=\"newsinner\">";
        for  ($i=1;  $i<$n;  $i=$i+1)  {
	    print $fa[$i];
        }
        echo "</div>";
        echo "</div>";
    }

    ?>
