<?php $TITLE = 'Gnucash - Links'; ?>

<?php include("include/header.inc"); ?>

      <! BEGIN CONTENT>
      
      
      <?php include("include/table_top.inc"); ?>
        links to other financial packages
      <?php include("include/table_middle.inc"); ?>      
        
<BR>

<B>GNU Enterprise</B> - A project to create an ERP system for small, 
    medium and large businesses -
    <A HREF="http://www.gnue.org/">http://www.gnue.org/</a>
    <BR><BR>

<B>CBBrowne's Finances, Linux, and Stuff</B> - 
    Reviews financial software and technology - 
    <A HREF="http://www.hex.net/~cbbrowne/finances.html">
    http://www.hex.net/~cbbrowne/finances.html</a>
    <BR><BR>

<B>LinuxLinks Financial Software</B> - Lists many popular Linux financial apps - 
    <A HREF="http://www.linuxlinks.com/Software/Financial/">
    http://www.linuxlinks.com/Software/Financial/</A>
    <BR><BR>

<B>MYMdump</B> - MYM Managing Your Money to QIF Converter -
    <A HREF="http://www-cad.eecs.berkeley.edu/~gooch/mymdump.html">
    http://www-cad.eecs.berkeley.edu/~gooch/mymdump.html</a>
    <BR><BR>

<B>pm2qif - PocketMoney to QIF Converter</B> - a set of perl scripts to convert
   PocketMoney DB files to QIF files.  PocketMoney is a popular Palm 
   shareware accounting package.
    <A HREF="http://sourceforge.net/projects/pm2qif/">
    http://sourceforge.net/projects/pm2qif/</a>
    <BR><BR>

<B>PalmCoins</B> - A GPL'ed accounting program for the PalmOS -
    <A HREF="http://sourceforge.net/projects/palmcoins/">
    http://sourceforge.net/projects/palmcoins/</a>
    <BR><BR>

<B>SQL Ledger</B> - An advanced, GPL'ed, web-based business 
    accounting package - 
    <A HREF="http://sql-ledger.com/">http://sql-ledger.com/</a>
    <BR><BR>


<?php include("include/table_bottom.inc"); ?>

<?php include("include/table_top.inc"); ?>
software used in gnucash
<?php include("include/table_middle.inc"); ?>
<BR>
These are the important contributing technologies that GnuCash depends 
on to implement its major functions.
<BR>
<BR>

<B>GUI Toolkits:</B><BR>
<HR>
   <B>GTK+</B> - The Gimp Toolkit - 
      <a href="http://www.gtk.org/">http://www.gtk.org</a>
      <BR><BR>
   <B>Gnome</B> - The application infrastructure - 
      <a href="http://www.gnome.org">http://www.gnome.org</a>
      <BR><BR>
   <B>Glade</B> - GTK+ User Interface Builder - 
      This is how many of the gnucash GUI's are designed - 
      <a href="http://glade.pn.org">http://glade.pn.org</a>
      <BR><BR>
<HR>
<BR><BR>
<B>Scripting Interface:</B><BR>
<HR>
   <B>Guile</B> - A Scheme interpreter with C programming interfaces -
      This is how gnucash provides 'extension' and rapid implementation 
      capabilities -
      <a href="http://www.red-bean.com/guile/">
      http://www.red-bean.com/guile/</A>
      <BR><BR>
   <B>G-wrap</B> - A tool for autogenerating scheme bindings for 
      C lanugage runctions, structures & enums -
      NO URL YET
      <BR><BR>
   <B>Scheme</B> - The Scheme Language -
      <a href="http://www.scheme.org/">http://www.scheme.org/</a>
      <BR><BR>

   <B>slib</B> - scheme library - 
      miscellaneous scheme functions used by gnucash - 
      NO URL YET
      <BR><BR>
<HR>
<BR><BR>
<B>Web Infrastructure:</B><BR>
<HR>
    <B>gtkhtml</B> - The gtk html layout engine - 
       used by gnucash to display help documentation, reports and graphs -
       <a href="http://www.advogato.org/proj/GtkHTML/">
       http://www.advogato.org/proj/GtkHTML/</a> - 
       <a href="http://freshmeat.net/projects/gtkhtml/?highlight=gtkhtml">
       http://freshmeat.net/projects/gtkhtml/?highlight=gtkhtml</a>
       <BR><BR>

    <B>libghttp</B> - The HTTP library - 
       used by gnucash to chat the http protocol to access web servers - 
       NO URL YET
       <BR><BR>
    
    <B>libxml</B> - The XML parsing library - 
       used by gnucash to read its file format - 
       <a href="http://xmlsoft.org/">http://xmlsoft.org/</a>
       <BR><BR>
    

<HR>
<BR><BR>
<B>Other:</B><BR>
<HR>
    <B>Finance::Quote</B> - A perl module to get stock price quotes and 
       currency exchange rates from off the net -
       This is how gnucash accesses price data on the net - 
       <a HREF="http://finance-quote.sourceforge.net/">
       http://finance-quote.sourceforge.net/</a>
       <BR><BR>

    <B>Finance::QuoteHist</B> - A perl module to fetch historical stock 
       prices. - 
       <A HREF="http://sourceforge.net/project/?group_id=2403">
       http://sourceforge.net/project/?group_id=2403</a>
       <BR><BR>

    <B>Guppi</B> - A graphical plotting and analysis tool - 
       used to generate and display gnucash charts and plots - 
       <A HREF="http://www.gnome.org/guppi/">http://www.gnome.org/guppi/</A>
       <BR><BR>

    <B>gnome-print</B> - gnome printing architecture - 
       used by gnucash for check printing & general printing - 
       <a href="http://www.sourceforge.net/projects/gnome-print/">
       http://www.sourceforge.net/projects/gnome-print/</a>
       <BR><BR>

<?php include("include/table_bottom.inc"); ?>



<?php include("include/footer.inc"); ?> 
