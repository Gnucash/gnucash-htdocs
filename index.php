<?php
header ("Location: en/");
exit;
# Notes for those editing these pages.
#
# all pages must call emulate_globals_on.php
# Two variables then become available on all systems:
# $toppath is for filesystem paths, generally include files.
# $topdir is for http paths e.g. images and other user-facing resources.
# To make your pages portable, always precede a local href or src
# location with $topdir:
# src="<?php echo $topdir; ?>/path"
# this allows mirrors to install the site in a sub-directory.
#
# Within content, the absolute rules are:
# 1. If you OPEN a tag, YOU are responsible for closing it
# 2. Escape all entities: use &amp; &lt; &gt; - watch those
# Bugzilla or SourceForge URL links: all query strings need to
# use &amp;
?>

