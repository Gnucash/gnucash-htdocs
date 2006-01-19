<?php $TITLE = 'Gnucash - Mail Archives'; ?>


<?php include("include/header.inc"); ?>

      <! BEGIN CONTENT>
      
      
      <?php include("include/table_top.inc"); ?>
        mailing list archives @ gnucash.org
      <?php include("include/table_middle.inc"); ?>      
        
 <BR>
<FONT FACE=VERANDA,HELVETICA SIZE=2>
<b>Click on one of these links to browse the archives:</b><BR><BR>
<a href="gnucash-devel.php3">gnucash-devel@gnucash.org</a><BR>
<a href="gnucash-patches.php3">gnucash-patches@gnucash.org</a><BR>

<BR><BR>
<b>Or, you can search the archives:</b>
<form action="/search.php3" method="get">
<select name=restrict>
<option value="/gnucash-devel">gnucash-devel
<option value="/gnucash-patches">gnucash-patches
</select>

<input type=text name=search size=15>
</form>


</FONT>
		
      <?php include("include/table_bottom.inc"); ?>
      
      <! END CONTENT>
      
<?php include("include/footer.inc"); ?> 
