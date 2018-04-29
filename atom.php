<?php
  // TODO:
  // - reasonable permalinks
  $top_dir = ".";

  $contentType = "application/atom+xml";
  if (isset($_GET["content-type"]))
  {
    $contentType = $_GET["content-type"];
  }
  $charset = "iso-8859-1";
  header("Content-Type: $contentType; charset=$charset");

  $entry_count = 10;
  $newsdir = "$top_dir/news";

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
<?="<?xml version=\"1.0\" encoding=\"$charset\"?>"?>
<?php
  include("$newsdir/news-script.php");
?>

<feed xmlns="http://www.w3.org/2005/Atom">
  <title>GnuCash News</title>
  <subtitle>GnuCash is personal and small-business financial-accounting software, freely licensed under the GNU GPL and available for GNU/Linux, BSD, Solaris, Mac OS X and Microsoft Windows.</subtitle>
  <generator>GnuCash htdocs/master/atom.php 1.0 &lt;gnucash-devel@gnucash.org&gt;</generator>
  <logo>https://www.gnucash.org/images/icons/gnc-icon.png</logo>
  <link rel="alternate" href="https://www.gnucash.org/" />
  <link rel="self" href="https://www.gnucash.org/atom.php" />
  <id>https://www.gnucash.org/</id>
  <?php
  $news_items = get_news($newsdir, $newsdir);
  $news_items = array_slice($news_items, 0, $entry_count);
  reset($news_items);
  $most_recent = file(key($news_items));
  $most_recent_update = chop($most_recent[1]);
  ?>
  <updated><?= date_convert_news_to_atom($most_recent_update) ?></updated>

  <?php for (reset($news_items); $key = key($news_items); next($news_items))
  {
    $fa = file($key);
    $n = count($fa);
    $title = strip_tags(chop($fa[0]));
    $update_date = chop($fa[1]);
    ?>
  <entry>
    <id>urn:x-gnucash:news:<?= urlencode($key) ?></id>
    <title><?= $title ?></title>
    <link rel="alternate" href="https://www.gnucash.org/news.phtml#n-<?=generate_anchor($key);?>" />
    <author>
      <name>GnuCash Developers</name>
      <email>gnucash-devel@gnucash.org</email>
    </author>
    <updated><?= date_convert_news_to_atom($update_date) ?></updated>
  </entry>
  <?php
  } ?>

</feed>
