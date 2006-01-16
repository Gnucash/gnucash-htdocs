<?php $TITLE = 'Gnucash - Software Libraries'; ?>

<?php include("include/header.inc"); ?>

      <! BEGIN CONTENT>
      
      
      <?php include("include/table_top.inc"); ?>
       software used in gnucash
      <?php include("include/table_middle.inc"); ?>
      
<BR>
These are the important contributing technologies that GnuCash depends 
on to implement its major functions.  You will need to install a recent 
version of these to compile and work with gnucash.
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
      <a href="http://www.gnu.org/software/guile/guile.html">
      http://www.gnu.org/software/guile/guile.html</a>
      <BR><BR>
   <B>G-wrap</B> - A tool for autogenerating scheme bindings for 
      C lanugage functions, structures &amp; enums -
      NO URL YET
      <BR><BR>
   <B>Scheme</B> - The Scheme Language -
      <a href="http://www.scheme.org/">http://www.scheme.org/</a>
      <BR>
      <a href= "http://www.scheme.com/tspl2d/index.html"> The Scheme
      Programming Language, 2nd Edition (Online copy of Kent Dybvig's book)
      </a>
      <BR><BR>

   <B>slib</B> - scheme library - 
      miscellaneous scheme functions used by gnucash - 
      <a href="http://www-swiss.ai.mit.edu/~jaffer/SLIB.html">
      http://www-swiss.ai.mit.edu/~jaffer/SLIB.html</a>
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
