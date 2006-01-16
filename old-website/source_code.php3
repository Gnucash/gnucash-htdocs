<?php include("include/header.inc"); ?>

      <! BEGIN CONTENT>
      
      
      <?php include("include/table_top.inc"); ?>
        getting source code
      <?php include("include/table_middle.inc"); ?>      
        
        
<font size="2"
face="VERANDA,HELVETICA">
<b>Getting the most recent sources via CVS:</b><br>
<br>
   A read-only version of the cvs tree is
   available on the net. To access it,
   first, login, as so: </font>
<BR><BR>
<font size=2 face=VERANDA,HELVETICA><B>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
cvs -d :pserver:cvs@cvs.gnucash.org:/home/cvs/cvsroot login
</font></B>

<p><font size="2" face="VERANDA,HELVETICA">
The password is &quot;guest&quot;. To get a copy of the source, do a </font></p>

<font size="2" face="VERANDA,HELVETICA"><B>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
cvs -d :pserver:cvs@cvs.gnucash.org:/home/cvs/cvsroot checkout gnucash 
</font></B>

<p><font size="2" face="VERANDA,HELVETICA">

Note that various versions can be accessed with tags. For example, the tag <tt>xacc-10b17</tt>
will get you version 1.0.17 and the tag <tt>xacc-11b6</tt> will get you version 1.1.6 In particular,
the latest code in the 1.0.x series (the stable series) is available on the branch
<tt>xacc-10-patch</tt>. For historical record, you can view Robin Clark's
original source from October 1997 at <tt>xacc-09a</tt>.  Things have changed a *lot* since then. <br>
<br>
<b>Getting the most recent sources via FTP:</b><br>
<br>
If you don't want to bother with CVS you can just download the lastest snapshot of
the CVS tree from one of several FTP sites: 
<br>
<a href="http://www.linas.org/pub/">http://www.linas.org/pub/</a>
<br> 
<a href="http://www.gnucash.org/pub/">http://www.gnucash.org/pub/</a>
<br>
</font>
</p> 
		
      <?php include("include/table_bottom.inc"); ?>
      
      <! END CONTENT>
      
<?php include("include/footer.inc"); ?> 
