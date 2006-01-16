<?php

include("include/header.inc");

include("include/table_top.inc");
print "Search results for $search";
include("include/table_middle.inc");

$HTSEARCH_PROG = "./htdig.sh";
$words = EscapeShellCmd(UrlEncode($search));
$config = "htdig";
$format = "htdig";
$matchesperpage = 10;
#$sort = "time";

if(!$page)
{
    $query = "config=$config&format=$format&words=$words&restrict=$restrict&matchesperpage=$matchesperpage&sort=$sort&exclude=$exclude";
    $page = 1; 
}
else
    $query = "config=$config&format=$format&words=$words&restrict=$restrict&matchesperpage=$matchesperpage&page=$page&sort=$sort&exclude=$exclude";

/**** FUNCTIONS ****/

function page_list($page, $matches)
{
   global $matchesperpage, $restrict, $search;

   $TotalPages = (int)($matches / $matchesperpage);

   if($matches % $matchesperpage) $TotalPages++;

   print "<center>\n";

   if($page > 1)
   {
       print "<a href=\"/search.php3?restrict=".urlencode($restrict)."&search=".urlencode($search)."";
       print "&page=".($page-1)."\">"; 
       print "<img src=\"/images/prev-yes.jpg\" border=\"0\"></a>\n";
   }
   else
       print "<img src=\"/images/prev-no.jpg\" border=\"0\">";
    
   if($page < $TotalPages)
   {
       print "<a href=\"/search.php3?restrict=".urlencode($restrict)."&search=".urlencode($search)."";
       print "&page=".($page+1)."\">";
       print "<img src=\"/images/next-yes.jpg\" border=\"0\"></a>\n";
   }
   else
       print "<img src=\"/images/next-no.jpg\" border=\"0\">";
   
   print "</center>\n";
}

$command="$HTSEARCH_PROG \"$query\"";
exec($command,$result);

$rc = count($result);

if ($rc<3):
    echo "There was an error executing this query.  Please try later.\n";
elseif ($result[2]=="NOMATCH"):
    echo "There were no matches for <B>$search</B> found on the website.<P>&nbsp;";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n";
elseif ($result[2]=="SYNTAXERROR"):
    echo "There is a syntax error in your search for <B>$search</B>:<BR>";
    echo "<PRE>" . $result[3] . "</PRE>\n";
else:
    $matches = $result[2];
    $firstdisplayed = $result[3];
    $lastdisplayed = $result[4];
    $words = $result[5];
    $pagelist = $result[6];

    echo "<center><h3>Search for <B>'$search'</B> returned <B>$matches</B> match";
    echo ($matches==1) ? "" : "es";
    echo "</h3></center>";

    //page_list($page, $matches);

    $i=7;

    print "<br><br>";
 
    while($i<$rc) 
    {

        # grab the match information

        $title = $result[$i];
        $url = $result[$i+1];
        $percent = $result[$i+2];
        $excerpt = $result[$i+3];

        # output the match information
        # append session id if necessary!

        echo "<font size=-1><A HREF=\"$url\">$title</A>\n";
        echo "<font size=-2><b>(" . $percent . "% match)</b></font><BR>\n";
        echo "<blockquote>" . $excerpt . "</blockquote><BR>\n";

        # move to the next match

        $i = $i + 4;
    }



endif;

page_list($page, $matches);

include("include/table_bottom.inc");

include("include/footer.inc");

?>
