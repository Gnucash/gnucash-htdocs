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
    // Significantly modified by Derek Atkins
    //

    //  News files should be HTML-marked files with extension ".news"
    //  The FIRST line is the title of the news panel, including
    //  <b></b> tags.
    //  The SECOND line is the DATE of the news panel (as the date of
    //  modification of these files is unreliable now that they are
    //  under version control).  Use a UNIX timestamp: any string
    //  parseable by 'date' is sufficient: e.g. Jan 21 18:35 If the
    //  second line does not create a valid timestamp, the inode
    //  change time of file is used.

    function get_news($en_newspath, $lang_newspath)
    {

    // array of displayed filenames is indexed with filenames, holds timestamps.
    $newsfile = array();

    // array of translated news files.  Holds filenames of translated news.
    $lang_files = array();

    // ------------------------------------------
    // check for the translated articles
    $hd = dir($lang_newspath);

    //  Get all translated files in the translated-news directory
    while ($filename = $hd->read()) {
        $s = strtolower($filename);
        if (strstr($s, ".news")) {
                $lang_files[$filename] = $lang_newspath."/".$filename;
                $display_filename = $lang_newspath."/".$filename;
		// echo("<!-- found locale news: $display_filename -->\n");
                $about = file($display_filename);
                $lastchanged = $about[1];
	        if ($lastchanged == "\n")
	        {
			$lastchanged = date("Y-m-d H:m:s", filectime($display_filename));
	        }
                $newsfile[$display_filename] = $lastchanged;
        }
    }
    $hd->close();

    // ------------------------------------------
    // Are there english language articles to display?
    $hd = dir($en_newspath);

    // Get all the english-language files, and display them
    // only if there isn't a matching native language article.
    while ($filename = $hd->read()) {
        $s = strtolower($filename);
        if (strstr($s, ".news")) {
	    // echo("<!-- found english file: $s -->\n");
	    if (! array_key_exists($filename, $lang_files)) {
	       $display_filename = $en_newspath."/".$filename;
	       // echo("<!-- using untranslated english file: $display_filename -->\n");
	       $about = file($display_filename);
               $lastchanged = $about[1];
	       if ($lastchanged == "\n")
	       {
                 $lastchanged = date("Y-m-d H:m:s", filectime($display_filename));
	       }
               $newsfile[$display_filename] = $lastchanged;
	    }
        }
    }
    $hd->close();

    // ------------------------------------------
    //  Sort  files  in  descending  date order
    arsort($newsfile);

    return $newsfile;
}

/**
 * @return From the last '/' through the end of the string.  Too many
 * double-slash and leading '.' issues due to lang directories,
 * otherwise. :(
 **/
function generate_anchor($news_key)
{
  return urlencode(substr(strrchr($news_key, '/'), 1));
}

function emit_news($en_newspath, $lang_newspath, $oldnews)
{
    global $top_dir;

    // a little debugging
    echo("<!-- in news/news-script.php: top_dir = $top_dir -->\n");
    echo("<!-- lang-path: $lang_newspath ; en-path: $en_newspath -->\n");

    # Be sure to define the following path to newsdirs
    if (!$en_newspath) { exit; }
    if (!$lang_newspath) { exit; }

    // This is how many news items to display on the main page.
    // Everything after this is displayed on the "oldnews" page.
    $cutoff = 10;

    $newsfiles = get_news($en_newspath, $lang_newspath);
    if ($oldnews)
    {
      $newsfile = array_slice($newsfiles, $cutoff, -1);
    }
    else
    {
      $newsfile = array_slice($newsfiles, 0, $cutoff);
    }
    //  Output  files  to  browser
    $filecount = 0;
    for(reset($newsfile); $key = key($newsfile); next($newsfile))
    {
        $fa = file($key);
        $n = count($fa);
?>
<div class="newsborder">
  <div class="newsheader">
    <div style="float:left; width:90%; background color:rgb(202, 202, 247);">
    <img src="<?=$top_dir?>/images/icons/document.txt.gif" width="16" height="16" alt="[news]" />&nbsp;
    <a style="text-decoration:none;color:black;" onmouseover="this.style.backgroundColor='#cacaf7';" onmouseout="this.style.backgroundColor='#cacaf7';" name="<?=generate_anchor($key)?>"><?= $fa[0]; ?> - <b><?= $newsfile[$key] ?></b></a>
  </div>
  <div style="float:right; width:10%; background color:rgb(202, 202, 247);">
  <!-- The google +1 button-->
  <g:plusone></g:plusone>
  </div>
  </div>
  <div class="newsinner">
  <? for ($i=2; $i<$n; $i++)  {
          print $fa[$i];
     } ?>

  </div>
</div>
<?
    }
}
?>
