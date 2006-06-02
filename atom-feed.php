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
?>
<?="<?xml version=\"1.0\" encoding=\"$charset\"?>"?>
<?php
  $entry_count = 10;
  $newsdir = "${top_dir}/news/";
  include("$top_dir/news/news-script.php");
?>
<feed xmlns="http://www.w3.org/2005/Atom">
  <id>http://www.gnucash.org/atom.php</id>
  <title>GnuCash News</title>
  <generator>GnuCash htdocs/trunk/atom-feed.php 1.0 &lt;gnucash-devel@gnucash.org&gt;</generator>
  <logo>http://www.gnucash.org/images/gnucash_logo.png</logo>
  <link href="http://www.gnucash.org/" />

  <?php
  $news_items = get_news($newsdir, $newsdir);
  $news_items = array_slice($news_items, 0, $entry_count);
  reset($news_items);
  $most_recent = null;
  ?>

  <?php for (reset($news_items); $key = key($news_items); next($news_items))
  {
    $fa = file($key);
    $n = count($fa);
    $title = strip_tags(chop($fa[0]));
    $update_date = chop($fa[1]);
    if ($most_recent == null || $update_date > $most_recent )
    {
      $most_recent = $update_date;
    }
  ?>
  <entry>
    <id>urn:x-gnucash:news:<?= $key ?></id>
    <title><?= $title ?></title>
    <updated><?= str_replace($update_date, ' ', 'T') ?>-08:00</updated>
    <content type="xhtml">
      <div xmlns="http://www.w3.org/1999/xhtml">
        <? for ($i=2; $i<$n; $i++) {
            print $fa[$i];
        } ?>
      </div>
    </content>
  </entry>
  <?php } ?>

  <updated><?= str_replace($most_recent, ' ', 'T') ?>-08:00</updated>
</feed>
