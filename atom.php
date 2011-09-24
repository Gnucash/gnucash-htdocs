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
  $charset = "iso-8859-1";
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
<?="<?xml version=\"1.0\" encoding=\"$charset\"?>"?>
<?php
  include("$top_dir/news/news-script.php");
?>

<feed xmlns="http://www.w3.org/2005/Atom">
  <id>http://www.gnucash.org/atom.php</id>
  <title>GnuCash News</title>
  <generator>GnuCash htdocs/trunk/atom.php 1.0 &lt;gnucash-devel@gnucash.org&gt;</generator>
  <logo>http://www.gnucash.org/beta/images/gnucash_logo.png</logo>
  <link rel="alternate" href="http://www.gnucash.org/beta/" />
  <link rel="self" href="http://www.gnucash.org/beta/atom.php" />
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
    <link rel="alternate" href="http://www.gnucash.org/beta/#<?=generate_anchor($key);?>" />
    <author>
      <name>GnuCash Developers</name>
      <email>gnucash-devel@gnucash.org</email>
    </author>
    <updated><?= date_convert_news_to_atom($update_date) ?></updated>
    <description><![CDATA[
        <? for ($i=2; $i<$n; $i++) {
            print htmlentities($fa[$i]);
        } ?>
    ]]></content>
  </entry>
  <?php
  } ?>

</feed>
