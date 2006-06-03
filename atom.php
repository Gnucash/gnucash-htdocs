<?php
  // TODO:
  // - reasonable permalinks
  include("local.php");

  $contentType = "application/atom+xml";
  $overrideContentType = $_GET["content-type"];
  if (isset($overrideContentType))
  {
    $contentType = $overrideContentType;
  }
  $charset = "iso-8859-1";
  header("Content-Type: $contentType; charset=$charset");

  $DATE_ATOM = "Y-m-d\TH:i:sP";
  $entry_count = 10;
  $newsdir = "${top_dir}/news/";
?>
<?="<?xml version=\"1.0\" encoding=\"$charset\"?>"?>
<?php
  include("$top_dir/news/news-script.php");
?>

<feed xmlns="http://www.w3.org/2005/Atom">
  <id>http://www.gnucash.org/atom.php</id>
  <title>GnuCash News</title>
  <generator>GnuCash htdocs/trunk/atom.php 1.0 &lt;gnucash-devel@gnucash.org&gt;</generator>
  <logo>http://www.gnucash.org/images/gnucash_logo.png</logo>
  <link href="http://www.gnucash.org/" />
  <link rel="self" href="atom.php" />
  <?php
  $news_items = get_news($newsdir, $newsdir);
  $news_items = array_slice($news_items, 0, $entry_count);
  reset($news_items);
  $most_recent = file(key($news_items));
  $most_recent_update = chop($most_recent[1]);
  ?>
  <updated><?= date($DATE_ATOM, strtotime($most_recent_update)) ?></updated>

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
    <link href="<?=${top_dir}?>/#<?=generate_anchor($key);?>" />
    <author>
      <name>GnuCash Developers</name>
      <email>gnucash-devel@gnucash.org</email>
    </author>
    <updated><?= date($DATE_ATOM, strtotime($update_date)) ?></updated>
    <content type="html">
        <? for ($i=2; $i<$n; $i++) {
            print htmlentities($fa[$i]);
        } ?>
    </content>
  </entry>
  <?php
  } ?>

</feed>
