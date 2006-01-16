<?php $TITLE = 'Gnucash - Features'; ?>

<?php include("include/header.inc"); ?>

     <! BEGIN CONTENT >

 <?php include("include/table_top.inc"); ?>
features
 <?php include("include/table_middle.inc"); ?>



<BR>
GnuCash is a personal finance manager. A check-book like register GUI
allows you to enter and track bank accounts, stocks, income and
expenses.  The interface is designed to be simple and easy to use,
but is backed with double-entry accounting principles to ensure 
balanced books.
<BR>
<BR>

Gnucash.org is a project that aims to develop top-notch financial tools
for Linux and Unix users.  This includes the components and libraries
that the Gnucash software uses, and is meant to grow to include an 
infrastructure for general financial computing.  The project is quite
active, and is developing new software and adding features on a regular
basis.
<BR>
<BR>

Features include:
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
makes reconciliation easy. 
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
Reports: Display Balance Sheet, Profit & Loss, Portfolio Valuation, 
or print them as HTML. 
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
Split Transactions: A single transaction can be split into several 
pieces to record taxes, fees, and other compound entries. 
</LI>
<BR><BR>
<LI>
Double Entry: When enabled, every
transaction must debit one account and credit others by an
equal amount. This ensures that
the "books balance": that the difference between income and
outflow exactly equals the sum of
all assets, be they bank, cash, stock or other. 
</LI>
<BR><BR>
<LI>
Income/Expense Account Types
(Categories): These serve not only to categorize your cash flow,
but when used properly with the
double-entry feature and equity accounts, these can provide an 
accurate Profit & Loss statement. 
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
Function is split between a financial engine module, written
in C, and a Gnome-based GUI.  The engine is designed to 
function as a generic financial server back-end: for example, 
wrapped as a perl module for a web-based interface.
Several GUI's have been developed: KDE, Motif and Gnome.
Currently, most GUI development efforts are focused on Gnome.
</LI>
<BR><BR>
<LI>
File access is locked in a network-safe fashion, preventing 
accidental damage if several users attempt to access the same file,
even if the file is NFS-mounted. 
</LI>
<BR><BR>
<LI>
Provides a byte-stream format,
which allows accounts and account groups to be transmitted to
other processes via pipes or
sockets. 
</LI>
<BR><BR>
<LI>
Multiple Currencies & Currency Trading: Multiple currencies are supported 
and can be bought and sold (traded). Currency movements
between accounts are fully balanced when double-entry is
enabled. (Some aspects of multiple currency support are not 
fully implemented.) 
</LI>
<BR><BR>
<LI>
Check Printing: a check printing interface is in development,
based on the gnome-print technology.
</LI>
</UL>

 <?php include("include/table_bottom.inc"); ?>      
      <! END CONTENT >

<?php include("include/footer.inc"); ?> 
