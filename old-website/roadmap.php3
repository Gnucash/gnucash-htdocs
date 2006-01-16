<?php $TITLE = 'Gnucash - Features'; ?>

<?php include("include/header.inc"); ?>

     <! BEGIN CONTENT >

 <?php include("include/table_top.inc"); ?>
the road ahead
 <?php include("include/table_middle.inc"); ?>



Gnucash is approaching the point where it will soon support most of the 
basic features one expects from an accounting/financial application.  When
it gets there, hopefully soon, we will have to contemplate the future.
What lies ahead?
<p>

There are several directions that the project can move in.  These
directions serve different constituencies, different communities of 
users.  Many of these seem incompatible, and so the tension must be 
resolved, or a choice must be made.  The list below is ordered along 
the lines of 'most obvious' to 'far out there'.

<dl>
<dt><b>Small Business Version</b>
<dd>This is probably the #1 most requested 'enhancement' to GnuCash.
    The use of GNU/Linux is sky-rocketing in small businesses; yet there
    are no easy-to-install, easy-to-administer small-business accounting 
    programs, at least not of the 'open' kind.  The feature list is the 
    same-old list from half a century ago: payroll, accounts-payable &amp; 
    receivable, invoicing, billing.   
    <p>
    There are some real problems with moving in this direction.
    Not the least of these is alienating GnuCash's core constituency: 
    the casual/home user.  If we build something with whiz-bang features,
    the home user may conclude that this is an application that is too 
    complex,  too hard to use, too hard to understand.   They'll go 
    looking elsewhere, and meanwhile, we will have done GNU/Linux (and *BSD)
    a dis-service.  The adoption of GNU/Linux by average (home) computer users
    is gated by the availability of the basic desktop cornerstones.
    Personal Finance Management is one of those cornerstones.
    We've got to have a simple, easy-to-install, easy-to-use personal
    financial manager.
    <p>
    
<dt><b>Sophisticated Investor</b>
<dd>GnuCash downloads stock prices and currency exchange rates from
    off the net.   The next beta version should have some sophisticated
    graphing features.  How fancy can one get?  The new GnuCash reporting 
    structure should make it easy, or at least straightforward, to create 
    a variety of sophisticated graphs, charts and reports.  These might
    range from simple technical analysis such as 90-day moving averages 
    and beta, to arcane indicators like 'Bolton-Tremblay', 'Zweig Thrust' 
    or 'McClellan Oscillator'.
    <p>
    Downside?  The 'investor' community is smaller than the home user
    community.  And stock technical analysis doesn't necessarily require
    accounting features.  Thus, such needs may be best served by other
    systems: and there's a <a href="http://www.gnucash.org/links.php3">
    variety</a> of these to choose from.
    <p>

<dt><b>The Financial Browser/The Ultimate Home User Experience</b>
<dd>As the user interface gets slicker, and the druids become more and 
    more helpful in guiding the novice user through setup, QIF import 
    and the like, the natural direction would be to create ultimate 
    home user experience.  That is, build the 'Financial Browser for 
    the Web', the 'Nautilus of Financial Transactions'.   For starters,
    this means using OFX and supporting on-line bill-pay and banking.
    In some distant future, this means integrating with on-line shopping,
    so that your shopping spree shows up in GnuCash without your having 
    to hand-enter all those transactions. 
    <p>
    Some of this integration is mundane: e.g. using an appointment book
    (for example, the calendar in Ximian's Evolution) to show upcoming
    bills and budget items.  Or even using the calendar to enter bills
    into GnuCash.  More broadly, providing a set of accounting interfaces 
    such that any other package (for example, a stock technical analysis
    package) can push data into, and get data out of GnuCash: the holy 
    grail of desktop integration.
    <p>

<dt><b>The Financial Browser, Part II: the ASP</b>
<dd>Gnucash has a built-in web browser.  This browser can not only 
    show standard web pages, but it also understands special markup
    for interactive graphs, and even embedded checkbook registers
    (for example, take a look <a href="/surf/guppi-pie-demo.html">
    this page</a> with a recent build of GnuCash).  GnuCash uses
    these features to create and display reports.  There is no reason
    to have these reports be local to the desktop machine: they could
    be on 'any' website, any server.
    <p>
    GnuCash uses XML as a file-format, but this XML could just as 
    easily be served up by a cgi-bin running on a web server.  
    There's some prototype demo code in <tt>src/experimental/cgi-bin</tt>,
    or you can try loading <a href="/surf/demo.gml">this link</a>
    with GnuCash.  In other words, GnuCash can offer a nice, slick,
    web-integrated front-end to a web-based financial ASP server. 
    A front-end that spanks any other financial ASP out there.
    <p>
    What's wrong with traditional ASP's?  Hmm, let me count the ways.
    (1) World Wide Wait.  No desktop app on some old 386 ever took  
    15 seconds to respond when you hit the 'enter' key.  (2) Those
    'beautiful' web forms.  They might be pretty enough for asking 
    you about airline flight info or filling in your name and address,
    (yes, CSS makes web pages prettier), but they still don't hold
    a candle to desktop-specific apps.  Imagine being able to use
    <a href="/images/gnome-1.5/savings-journal.gif">a real ledger 
    interface</a> for working financial info in a web site.
    (3) Disconnect from the net.  Even if your ASP never crashes, 
    and you never lose your network connection, its still conceivable
    that you might want to fiddle with financial info on your laptop
    somewhere where there's no handy Internet connection.  
    We think we know how to make GnuCash work in 'disconnected' mode,
    using cached data, which can then sync up with the big 'ol server 
    when it gets back on the net again.  That's what the GnuCash engine
    is designed to do.  (Demo soon?)
    <p>

<dt><b>ERP</b>
<dd>These days, it's inappropriate to talk about business accounting
    without also mentioning ERP in the conversation.   GnuCash is not,
    and probably will never be an ERP system, but might become the 
    component of one.  The basic idea behind ERP is that different
    businesses have different business practices: no one does things
    in quite the same way.  And so, there is no 'one-size-fits-all'
    application; instead, one hopes for a framework with extensibility, 
    easy integration, and rapid-development features.  So that you can 
    quickly hook up that brand-new ecommerce package to that decades-old
    billing application.  GnuCash doesn't do this.  Nor is GnuCash easy
    to modify, extend, or enhance.  It takes some considerable 
    sophistication to add new features to GnuCash.  In particular, this
    means that it's hard to integrate GnuCash into your business processes:
    you can't just tell it to suck out financial info from here, and 
    dump it to there.  If you want to do this, go check out 
    <a href="http://www.gnue.org/">GnuE at http://www.gnue.org/</a>
    <p>
    
<dt><b>Napster for Money</b>
<dd>If you thought the music industry hated Napster, just wait till 
    the feds and the banks see its financial equivalent.  Suppose there
    really were an infrastructure for putting secure, anonymous eCash
    into your eWallet.  Or rather, of giving it to your friend or business
    partner, and they in turn could spend it on real goods and services.
    Now, don't confuse the idea of an eWallet with the idea of eMoney.
    There are any number of efforts underway to create eMoney: some
    with pretend-money, such as flooz, or frequent flyer miles, some with
    real money, such as pay-pal, or the latest ecommerce scheme from 
    your credit-card company.  All of these schemes require a centralized 
    server (traditionally called a 'Bank').  This centralized server
    validates your identity, and confirms that you have the money you 
    claim to have.  And actually moves that money around.  And works
    in concert with the IRS to make sure you don't have unreported, 
    taxable income.  And with the DEA, to make sure you're not 
    money-laundering.  And with... who knows.  
    <p>
    By contrast, my wallet is a 'bank' in the sense of holding money; 
    it just doesn't charge me a service fee for doing so.  And
    when I use it for some anonymous peer-to-peer money sharing,
    such as paying the kid down the block to mow the lawn, it 
    doesn't tell the IRS that the kid owes 'em money any more than 
    gnutella tells Metallica about song downloads.  So, where 
    were we?  Oh yes, now try to imagine an 'eWallet'.   
    <p>
    Now, GnuCash will probably never be the Gnutella for money.  
    For several reasons.  Whatever it is that you exchange on-line, 
    its just funny-money, the electronic equivalent of chain-store 
    coupons, until you have a broker, an under-writer, a market-maker 
    who will guarantee the exchange of your eCash for that other 
    kind of money that banks accept.  And as you may guess, the 
    resulting shadow economy would prompt the Federal Reserve Bank
    to shut down said underwriter faster than Alan Greenspan can say 
    'the expansion in the M2 Money Supply Index'.  But since we were 
    dealing with network-enabled accounting, I thought I'd throw in 
    something fun to think about.
    <p>
    
</dl>

 <?php include("include/table_bottom.inc"); ?>      
      <! END CONTENT >

<?php include("include/footer.inc"); ?> 
