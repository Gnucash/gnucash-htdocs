<?php
  // TODO:
  // - reasonable permalinks
  $top_dir = ".";

  $contentType = "application/atom+xml";
  $overrideContentType = $_GET["content-type"];
  if (isset($overrideContentType))
  {
    $contentType = $overrideContentType;
  }
  $charset = "utf-8";
  header("Content-Type: $contentType; charset=$charset");

  $entry_count = 1;
  $newsdir = "${top_dir}/news";

  /**
   * In php5, this is simply: date(DATE_ATOM, strtotime($news_date)).
   * php4 doesn't know what 'DATE_ATOM' is, and doesn't know what the 'P'
   * argument is ("+04:00"). The 'O' argument is supported and close ("+0400"),
   * but we need to insert the ':', as such...
   **/
  function date_convert_news_to_atom($news_date)
  {
    $DATE_ATOM_MOSTLY = "Y-m-d\TH:i:sO";
    $semi_atom_date = date($DATE_ATOM_MOSTLY, strtotime($news_date));
    $len = strlen($semi_atom_date);
    return substr($semi_atom_date, 0, $len-2) . ":" . substr($semi_atom_date, $len-2);
  }
?>

<?php
  include("$top_dir/news/news-script.php");
?>

<?xml version="1.0" encoding="ISO-8859-1" ?>
<rss version="2.0">

<channel>
  <title>W3Schools Home Page</title>
  <link>http://www.w3schools.com</link>
  <description>Free web building tutorials</description>
  <item>
    <title>RSS Tutorial</title>
    <link>http://www.w3schools.com/rss</link>
    <description>New RSS tutorial on W3Schools</description>
  </item>
</channel>

</rss>
