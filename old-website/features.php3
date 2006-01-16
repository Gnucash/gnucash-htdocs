<?php $TITLE = 'Gnucash - Features'; ?>

<?php include("include/header.inc"); ?>

     <! BEGIN CONTENT >

 <?php include("include/table_top.inc"); ?>
features
 <?php include("include/table_middle.inc"); ?>


<BR>
If you've been looking for a way to manage your personal finances 
under Linux, you've found it!  Designed to be easy to use,
yet powerful and flexible, GnuCash allows you to track
bank accounts, stocks, income and expenses.   As quick and intuitive
to use as a checkbook register, it is based on professional
accounting principles to ensure balanced books and accurate reports.
GnuCash is backed by an active development community and is blossoming
into a full-fledged accounting system.  Developed under the GPL, 
you have no need to worry about obsolescence: GnuCash will be there 
for you.
<BR>
<BR>
This web site is devoted to promoting the Gnucash.org software
development project.
We are committed to developing top-notch 
financial tools for Linux and Unix users.  This includes the 
development of programming API's and components that can be used 
to create both server and personal applications for home and business use.
By focusing on ease-of-use, modular design, architected interfaces
and well-documented code, we hope that GnuCash and its associated 
financial libraries become the choice of a GNU generation of
programmers and users.
<BR>
<BR>

GnuCash Application Features include:
<BR>
<BR>
<UL>
<LI>
An easy-to-use interface. If you can use the register in the back of 
your checkbook, you can use Gnucash. Type directly into the
register, tab between fields, and use quick-fill to automatically
complete the transaction. 
</LI>
<BR><BR>
<LI>
A reconcile window with running reconciled and cleared balances 
makes balancing against bank statements easy. 
</LI>
<BR><BR>
<LI>
Stock/Mutual Fund Portfolios: Track stocks individually ( one per 
account ) or in portfolio of accounts ( a group of accounts
that can be displayed together). 
</LI>
<BR><BR>
<LI>
Intuit&reg; Quicken&reg; QIF files can be imported, and are automatically
merged to eliminate duplicate transactions. 
</LI>
<BR><BR>
<LI>
Handles internationalized dates and currencies.  The Gnucash 
menus and popups have been translated to French, German, Swedish,
Italian, Japanese and British English.  Documentation is available 
in English and French.
</LI>
<BR><BR>
<LI>
Reports: Display Balance Sheet, Profit & Loss, Portfolio Valuation, 
or print them as HTML.  Work is proceeding on an integrated graphing 
environment that will allow graphs to be embedded within reports.
</LI>
<BR><BR>
<LI>
Chart of Accounts: A master account can have a hierarchy of detail 
accounts underneath it. This allows similar accounts types (
e.g. Cash, Bank, Stock ) to be grouped into one master account ( e.g.
Assets ). 
</LI>
<BR><BR>
<LI>
Transaction Finder: a powerful transaction query dialogue can help
you quickly locate a needle in a haystack.
</LI>
<BR><BR>
<LI>
Split Transactions: A single transaction can be split into several 
pieces to record taxes, fees, and other journal entries. 
</LI>
<BR><BR>
<LI>
Double Entry: When enabled, every
transaction must debit one account and credit others by an
equal amount. This ensures that
the "books balance": that the difference between income and
outflow exactly equals the sum of
all assets and equity.
</LI>
<BR><BR>
<LI>
Income/Expense Account Types (Categories) allow you to 
categorize your cash flow.  When used properly with 
the double-entry feature and equity accounts, these 
enable you to generate reports, such as Profit & Loss, 
that plain-vanilla systems cannot handle.
</LI>
<BR><BR>
<LI>
General Ledger: Multiple accounts
can be displayed in one register window at the same time. This
can ease the trouble of tracking
down typing/entry errors. It also provides a convenient way of
viewing a portfolio of many
stocks, by showing all transactions in that portfolio. 
</LI>
<BR><BR>
<LI>
Get Stock & Mutual Fund quotes
from various web sites, update portfolio automatically. 
Additional pricing sources are added regularly.
</LI>
<BR><BR>
<LI>
Keyboard accelerators and transaction auto-completion make
entering transactions quick and smooth.
</LI>
<BR><BR>
<LI>
Tip-of-the-day popups make learning about new GnuCash features
easy.  Extensive built-in documentation helps answer questions 
you might have about particular features and accounting practices.
</LI>
<BR><BR>
<LI>
Check Printing:  Checks may be printed in standard formats
on common check stocks.  The latest versions of gnome-print 
must be installed to use this feature.
</LI>
<BR><BR>
<LI>
Preferences: the appearance and behavior of the main window
and the register windows can be thoroughly customized through
n application preferences dialog.
</LI>
<BR><BR>
<LI>
Multiple Currencies & Currency Trading: Multiple currencies are supported 
and can be bought and sold (traded). Currency movements
between accounts are fully balanced when double-entry is
enabled.  A simplified interface to multiple-currency handling
is in development.
</LI>
<BR><BR>
</UL>

GnuCash Technology Features include:
<BR>
<BR>
<UL>
<LI>
Architected interfaces. 
Function is split between a financial engine module, written
in C, and a Gnome-based GUI.  The engine is designed to 
function as a generic (GUI-independent) financial server back-end, 
providing extensive support for charts-of-accounts and transactions.
The front end makes heavy use of Scheme for extensibility and 
configurability, allowing new features to be easily incorporated.
</LI>
<BR><BR>
<LI>
File access is locked in a network-safe fashion, preventing 
accidental damage if several users attempt to access the same file,
even if the file is NFS-mounted. 
</LI>
<BR><BR>
<LI>
The current binary file-format is being redeveloped as XML,
thus simplifying storage and network transport questions. 
Both the old and new formats are byte-stream oriented, and 
can be parsed concurrently, on the fly: they do not require 
a completed download before parsing can begin.
</LI>
<BR><BR>
</UL>

 <?php include("include/table_bottom.inc"); ?>      
      <! END CONTENT >

<?php include("include/footer.inc"); ?> 
