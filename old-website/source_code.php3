<?php include("include/header.inc"); ?>

      <! BEGIN CONTENT>
      
      
      <?php include("include/table_top.inc"); ?>
        hacking gnucash
      <?php include("include/table_middle.inc"); ?>      
        
        
<font size="2" face="VERANDA,HELVETICA">
<b>Hacking gnucash</b><br>
<br>
There are a number of steps to go through to hack on gnucash. 
You will need to install development versions of the packages 
listed on the <a href="tools.php3">tools page</a>.  The latest
development versions of gnucash may depend on bleeding edge 
versions of some gnome tools (e.g. gnome-print).  You may also 
need to get unusual or special versions of g-wrap and guppi.
<br><br>


<b>Getting the most recent sources via CVS:</b><br>
<br>
   The latest source code, as well as various older 
   versions, are maintained in a publically readable 
   CVS source code repository.  Accessing it is simple,
   and if you plan to be an active developer, there is
   no better way of getting the source.  The CVS tree
   is not publically writable; once you have patches, 
   you should submit them to the 
   <a href="maillist.php3">gnucash-patches</a>
   mailing list.
<p>
   To access the CVS tree, first, login, as so: 
</p>
<B>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
cvs -d :pserver:cvs@cvs.gnucash.org:/home/cvs/cvsroot login
</B>

<p>
The password is &quot;guest&quot;. 
To get a copy of the latest/beta development version 
(which is currently version 1.5.x), do a 
</p>

<B>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
cvs -d :pserver:cvs@cvs.gnucash.org:/home/cvs/cvsroot checkout gnucash 
</B>

<p>
Older versions and branches can be accessed with tags. 
The branch containing the latest version of the stable 
gnucash-1.4.x code is marked 
with the tag <tt>gnucash-1-4-branch</tt> . Thus, to check out the
latest in the the gnucash-1.4.x series, do the following:
</p>
<B>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
cvs -d :pserver:cvs@cvs.gnucash.org:/home/cvs/cvsroot checkout -r gnucash-1-4-branch gnucash
</B>


<p>
Released versions are tagged with the number of the release. Thus,
the tag <tt>gnucash-1-4-4</tt> will get you a copy of the source
as it was for version 1.4.4.  If you are a developer, you should 
probably be working either in the head branch (<tt>HEAD</tt>) 
on the latest beta/development code, or in the 
<tt>gnucash-1-4-branch</tt>, squashing any remaining bugs in the 
current stable version.
</p>
<p>
Other tags of (mostly historical) interest are:
<dl><dd>
<dl>
<dt><b>xacc-09a</b>
<dd>Robin Clark's original source from October 1997.  For history 
    buffs only: the source has been completely re-written since then.
<dt><b>xacc-10b17</b>
<dd>version 1.0.17 (one of the last stable version of xacc, before 
    the name was changed to gnucash).
<dt><b>xacc-10-patch</b>
<dd>the tip of the branch of the stable version 1.0.x series.
<dt><b>xacc-11b6</b>
<dd>version 1.1.6 (an unstable, development version of gnucash)
<dt><b>xacc-12-patch</b>
<dd>the tip of the 1.2 branch. This is the last branch containing
    motif code.  Later versions were re-written in gtk/gnome.
<dt><b>patch-124</b>
<dd>version 1.2.4, one of the last in the 1.2.x series.
<dt><b>gnucash-1-4-branch</b>
<dd>the tip of the 1.4.x branch, which is the current stable branch.
</dl>
</dl>

<br>
<br>
<b>Getting the most recent sources via FTP:</b><br>
<br>
If you don't like to bother with CVS you can download recent 
snapshots of the CVS tree from one of the FTP sites below.
Note, however, that if you wish to contribute patches and updates
to GnuCash, it is strongly recommended that you learn and use CVS.
We encourage this because the snapshots can sometimes get a bit 
dated, and you just might be fixing a bug that's already fixed.
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.linas.org/pub/gnucash/gnucash/sources/">http://www.linas.org/pub/gnucash/gnucash/sources/</a>
<br> 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.gnucash.org/pub/gnucash/sources/">http://www.gnucash.org/pub/gnucash/sources/</a>
<br>
<br>
</font>
</p> 
		
      <?php include("include/table_bottom.inc"); ?>
      
      <! END CONTENT>
      
<?php include("include/footer.inc"); ?> 
