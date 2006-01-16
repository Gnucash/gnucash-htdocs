<?php $TITLE = 'Gnucash - Architecture'; ?>


<?php include("include/header.inc"); ?>

      <! BEGIN CONTENT>
      
      
      <?php include("include/table_top.inc"); ?>
        architecture overview
      <?php include("include/table_middle.inc"); ?>      
        

<FONT FACE="Helvetica,Verdana" SIZE=-1>
GnuCash currently consists of six (mostly) independent modules:<BR>
<BR>
The Engine<BR>
----------<BR>
"The Engine" (src/engine) provides an interface for accounts and transactions.<BR>
An account consists of an account name, a default currency, a stock-ticker symbol<BR>
(if applicable), notes, some miscellany and a list of "split" transactions.<BR>
A transaction consists of a list of splits, with each split having a description<BR>
and memo field, date entered and date reconciled fields,  quantity and<BR>
price fields (price == 1.0 for plain old bank accts), and some misc disposition<BR>
fields.<BR>
<BR>
The current implementation is file-format (not SQL) based.   It defines a byte <BR>
stream, for saving to a file or transmitting via pipes/sockets ("persistence"<BR>
and "data migration" -- the byte stream allows the engine objects to be <BR>
moved/copied/dynamically recreated on any host. ).  The API also <BR>
provides simple concurrency controls, including a session object, and <BR>
primitives for beginning/committing/rejecting edits.  This should be enough to <BR>
allow SQL-based transactional back ends to be implemented.   The GUI uses<BR>
and respects these primitives, so GnuCash as a whole should "just work" with<BR>
an SQL back end.<BR>
<BR>
The engine code contains no GUI code whatsoever, and is essentially OS-neutral.<BR>
(It might even compile & run under DOS!)<BR>
<BR>
<BR>
The Register<BR>
------------<BR>
"The Register" (src/register) implements a ledger-like GUI that allows the user<BR>
to dynamically enter dates, prices, memos descriptions, etc. in a natural,<BR>
intuitive fashion that should be obvious to anyone who's used a checkbook<BR>
register.  The code is highly configurable, allowing the ledger columns and<BR>
rows to be laid out in any way, with no restrictions on the function, type<BR>
and number of columns/rows.  For example, one can define a ledger with<BR>
three date fields, one price field, and four memo fields in a straightforward<BR>
fashion.  Cell handling objects support and automatically validate date<BR>
entry, memo entry (w/auto-completion), prices, combo-boxes (pull-down menus),<BR>
multi-state check-boxes.  Cells can be marked read-write, or output-only. <BR>
Cells can be assigned unique colors.  The currently active ledger row-block<BR>
can be highlighted with a unique color. <BR>
<BR>
The register code is mostly GUI-independent; i.e. the motif/gtk/qt code is<BR>
confined to two files and a small number of lines of code.   The Motif version<BR>
is the best one currently, the gtk code works, but the underlying gtk table<BR>
widget is not really powerful enough to provide an elegant interface.<BR>
<BR>
The register code is completely independent of the engine code, knows nothing<BR>
about accounting or any of the other GnuCash subsystems.  It can be used<BR>
in independent projects that have nothing to do with accounting.<BR>
<BR>
Reports<BR>
-------<BR>
"Reports" (src/reports) is a perl/html based system to create balance sheets,<BR>
profit & loss statements, etc. by using the engine API's to fetch and display<BR>
data.  Very alpha code, under development.<BR>
<BR>
Quotes<BR>
------<BR>
"Quotes" (src/quotes) is a perl system to fetch stock price data off the net<BR>
and jam it into the GnuCash engine API.  Very alpha, under development.<BR>
<BR>
Scheme<BR>
------<BR>
"The Scheme" (src/scm, src/guile, src/prefs) is a scheme based infrastructure <BR>
meant to provide general extensibility, as well as command-line/resource file<BR>
processing, user-preferences state management,  & other functions.  Very alpha,<BR>
under development.<BR>
<BR>
GnuCash<BR>
-------<BR>
"GnuCash" (src/motif, src/gnome, src/qt) is the main GUI application.  It<BR>
consists of a collection of miscellaneous GUI code to glue together all of the<BR>
pieces above into a coherent, point-and-click whole.   It is meant to be<BR>
easy to use and intuitive to the novice user without sacrificing the power<BR>
and flexibility that a professional might expect.    When people say that<BR>
GnuCash is trying to be a "Quicken/MSMoney look/work/act-alike", this is <BR>
the piece that they are referring to.  It really is meant to be a personal-finance<BR>
manager with enough power for the power user and the ease of use for the beginner.<BR>
<BR>
Currently, the Motif interface is the only operational interface.   The gtk <BR>
code compiles, but most of the functions are not wired in.  The Qt code won't <BR>
compile, most-all functions are missing.<BR>
</FONT>

	
      <?php include("include/table_bottom.inc"); ?>
      
      <! END CONTENT>
      

<?php include("include/footer.inc"); ?> 
