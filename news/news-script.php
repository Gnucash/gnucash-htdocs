<?php

    // This PHP script automatically scans the news directory
    // and posts news items on the gnucash home page, using the
    // gnucash html page style.  This script supports the display
    // of translated news items by getting news articles from 
    // directories for each language.  A news article from 'en'
    // is displayed only if there is'nt a matching news article
    // for the selected language
    //
    // originally by Jeremy Collins, heavily modified by Linas Vepstas
    // Restructured by Neil Williams
    //
    //  they  should  be  plain  ASCII  text  files  with  extension  ".txt"
    //  The FIRST line is the title of the news panel, including <b></b>
    //  tags.
    //  The SECOND line is the DATE of the news panel (as the date of modification
    //  of these files is unreliable now that they are under version control).
    //  Use a UNIX timestamp: any string parseable by 'date' is sufficient:
    //  e.g. Jan 21 18:35
    //  If the second line does not create a valid timestamp, the 
    //  inode change time of file is used.

    # Be sure to define the following path to newsdirs
    if (!$en_newspath) { exit;  }
    if (!$lang_newspath) { exit;  }

    // array of displayed filenames is indexed with filenames, holds timestamps.
    $newsfile  =  array();

    // ------------------------------------------
    // array holding native-language news articles.
    $native_files = array();
    $hd  =  dir($lang_newspath);

    //  Get  all  files in the language directory
    while(  $filename  =  $hd->read()  )  {
        $s=strtolower($filename);
        if  (strstr($s, ".txt"))  {
            $lang_files[$filename]  =  $lang_newspath.$filename;

	    $display_filename = $lang_newspath.$filename;

            //  Determine  last  modification  date
	    $lastchanged="";
	    $about = file($display_filename);
	    $lastchanged=$about[1];
	    if($lastchanged == "\n")
	    {
		$lastchanged = date("Y-m-d H:m:s", filectime($display_filename));
	    }
            $newsfile[$display_filename]  =  $lastchanged;
        }
    }
    $hd->close();

    // ------------------------------------------
    // Are there english language articles to display?
    $hd  =  dir($en_newspath);

    //  Get all the alternate-language files, and display them
    // only if there isn't a matching native language article.
    while(  $filename  =  $hd->read()  )  {
        $s=strtolower($filename);
        if  (strstr($s, ".txt"))  {

	    // display english only if there isn't a translated version
	    if (!$lang_files[$filename]) {
	       $display_filename = $en_newspath.$filename;
               //  Determine  last  modification  date
	       $lastchanged="";
	       $about = file($display_filename);
               $lastchanged=$about[1];
	       if($lastchanged == "\n")
	       {
			$lastchanged = date("Y-m-d H:m:s", filectime($display_filename));
	       }
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

        echo ("<div class=\"newsborder\"><div class=\"newsheader\">");
        echo("<img alt=\"news panel\" src=\"images/icons/document.txt.gif\">&nbsp;");
	print $fa[0];
	print  " - <b>" . $newsfile[$key] . "</b>\n</div>";

        echo "<div class=\"newsinner\">";
        for  ($i=2;  $i<$n;  $i++)  {
	    print $fa[$i];
        }
        echo "</div>";
        echo "</div>";
    }

?>
