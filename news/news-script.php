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

    //  Text messages are later converted to .phtml with translatable strings
    //  marked up in PHP. (You can follow the example of other files to do this
    //  yourself, e.g. when updating your translation.)

    //  These phtml files will replace the alternative of separately translated
    //  files in bespoke language directories. Once created, the .phtml file
    //  replaces the .txt version. This automatically enables the translated
    //  text or uses en_US if the new strings have not been translated yet.

    //  Indicate the sequence for the phtml files here: Most recent last.
    //  Use the original timestamps as values for the array.

$translated_news = array(
"1.9.0" => "2006-02-09   05:19:32", 
"1.9.1" => "2006-02-20   04:29:24"    );

    //  If the entry in translated_news is omitted, the script will try to use
    //  the seventh line of the phtml which should consist of just the
    //  timestamp, without the tags or brackets.

    # Be sure to define the following path to newsdirs
    if (!$en_newspath) { exit;  }
    if (!$lang_newspath) { exit;  }

    // array of displayed filenames is indexed with filenames, holds timestamps.
    $newsfile  =  array();

    // ------------------------------------------
    // array holding native-language news articles.
    $native_files = array();
    $hd  =  dir($lang_newspath);

    //  Get all translatable files in the news directory
    while(  $filename  =  $hd->read()  )  {
        $s=strtolower($filename);
        if  (strstr($s, ".phtml"))  {
                $stump = str_replace("phtml", "txt", $filename);
                $lang_files[$stump]  =  $lang_newspath.$filename;
                $display_filename = $lang_newspath.$filename;
                $lastchanged=$translated_news[$stump];
                if(!$lastchanged)
                {
                       $about = file($display_filename);
                       $lastchanged=$about[6];
                }
                $newsfile[$display_filename] = $lastchanged;
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

    // a little debugging
    echo("<!-- in news/news-script.php: top_dir = $top_dir -->\n");

    //  Output  files  to  browser
    for(reset($newsfile);  $key  =  key($newsfile);  next($newsfile))
    {
        $fa  =  file($key);
        $n=count($fa);

        if  (strstr($key, ".phtml"))  {
              include $key;
        }
        else {
             echo ("<div class=\"newsborder\"><div class=\"newsheader\">");
             echo("<img alt=\"news panel\" src=\"$top_dir/images/icons/document.txt.gif\">&nbsp;");
             print $fa[0];
             print  " - <b>" . $newsfile[$key] . "</b></div>\n";
             echo "<div class=\"newsinner\">";
             for  ($i=2;  $i<$n;  $i++)  {
                 print $fa[$i];
             }
             echo "</div>";
             echo "</div>";
        }
    }

?>

