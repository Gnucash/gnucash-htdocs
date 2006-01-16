<?php $TITLE = 'Gnucash - Developers'; ?>


<?php include("include/header.inc"); ?>

      <! BEGIN CONTENT>
      
      
      <?php include("include/table_top.inc"); ?>
        gnucash developers & contributors
      <?php include("include/table_middle.inc"); ?>      
        
<! ************************* >
<! Developer Content - START >
<! ************************* >

<FONT SIZE="2" FACE="VERANDA,HELVETICA">
<B>
   Whose blood, sweat and tears is this anyway?
</B> 
</FONT>

<BR><BR><font size="4"><b>Lead Developers</b></font>
<HR>

<FONT SIZE="2" FACE="VERANDA,HELVETICA">

<dl>
  <dt>
  <b>Linas Vepstas</b>
  </dt>
  <dd>
  liked what he saw: the GUI was slick, the code was documented and well structured, 
  and it was all GPL'ed. And so he re-wrote it: adding cell-widgets to XbaeMatrix,
  so that the combobox and arrows would make an even slicker GUI, rewrote the X-Accountant 
  internals to add double-entry, an account hierarchy, split out a transaction 
  mini-engine, add support for stocks, and spiff up the help menus. This was version 1.0 as 
  of January 1998. Since then, for version 1.1, the engine was expanded and refined, 
  and the register window code completely redesigned and made mostly 
  Motif-(and GUI-)independent. Did some prototype OFX work. 
  </dd>
</dl>

<BR>

<dl>
  <dt>
  <b>Rob Browning</b>
  </dt>
  <dd>
  abused everyone for not using perl, and then after we added perl support, 
  dumped perl in favor of guile/scheme support. Rob maintains the build infrastructure, 
  is handling the whole guile/perl extension language thing, and is dealing with 
  configuration and configurability. 
  </dd>
</dl>

<BR>

<dl>
  <dt>
  <b>Jeremy Collins</b> 
  </dt>
  <dd>
   publicized the GnoMoney project widely and broadly, and then changed its name to GnuCash. 
   Jeremy created the gnucash.org web site, registered the domain, 
   got the initial GTK/gnome code working.  He now maintains the GNUcash.org website, FTP site,
   and all of the other issue related to running your own domain!
  </dd>
</dl>

<BR>

<dl>
  <dt>
  <b>Dave Peticolas</b>
  </dt>
  <dd>
    hacks obsessively on GnuCash. But he can stop anytime he wants to. Really. 
  </dd>
</dl>


<BR>

<dl>
  <dt>
  <b>Rob Clark</b>
  </dt>
  <dd>
   wrote the original X-Accountant in Motif as a school project, 
   taking it to version 0.9 by October 1997.
  </dd>
</dl>

<BR>

<dl>
  <dt>
  <b>Bill Gribble</b>
  </dt>
  <dd>
  works magic. If your checks print wrong, blame him. If you don't like the amount
  printed on your checks, blame him. If you don't like your your bank balances, your bank, 
  or your life, blame him too. 
  </dd>
</dl>

<BR>

<font size="4"><b>Fixers and Patchers</b></font>
<hr>

<dl>
      <dt> <a href="mailto:arensb@cfar.umd.edu"> Andrew
      Arensburger</a></dt>

      <dd>for FreeBSD and other patches</dd>

      <dt> <a href="mailto:matt_armstrong@bigfoot.com"> Matt
      Armstrong</a></dt>

      <dd>for misc fixes</dd>

      <dt> <a href="mailto:fred@moremagic.com"> Fred Baube</a></dt>

      <dd>for attempted Java port/MoneyDance</dd>

      <dt> <a href="mailto:dennisb@cs.chalmers.se"> Dennis
      Björklund</a></dt>

      <dd>Swedish translation</dd>

      <dt> <a href="mailto:bojsen@worldnet.att.net"> Per Bojsen</a></dt>

      <dd>several core dump fixes</dd>

      <dt> <a href="http://www.hex.net/~cbbrowne"> Christopher B.
      Browne</a></dt>

      <dd>for perl stock scripts, Guile-based QIF import code, lots
      of changes to English documentation, and lots of guile code</dd>

      <dt> <a href="mailto:grahamc@zeta.org.au"> Graham
      Chapman</a></dt>

      <dd>for the xacc-rpts addon package</dd>

      <dt> <a href="mailto:georgec@sco.com"> George Chen</a></dt>

      <dd>for MS-Money QIF support</dd>

      <dt> <a href="mailtochina@thewrittenword.com">Albert
      Chin-A-Young</a></dt>

      <dd>configure.in patch</dd>

      <dt> <a href="mailto:jcollins@gnucash.org"> Jeremey
      Collins</a></dt>

      <dd>for GnoMoney and GTK port</dd>

      <dt> <a href="mailto:mcondell@bbn.com"> Matthew Condell</a></dt>

      <dd>FreeBSD patch</dd>

      <dt> <a href="mailto:pcondon@rackspace.com"> Patrick
      Condron</a></dt>

      <dd>for webserver and T1 connection.</dd>

      <dt> <a href="mailto:Ciaran.Deignan@bull.net"> Ciaran
      Deignan</a></dt>

      <dd>for AIX binary version</dd>

      <dt> <a href="mailto:tyson@tyse.net"> Tyson Dowd</a></dt>

      <dd>for config/make patches and debian maintenance</dd>

      <dt> <a href="mailto:ripley@xs4all.nl"> Koen D'Hondt</a></dt>

      <dd>for Solaris patches to XmHTML</dd>

      <dt> <a href="mailto:bob@mostly.com"> Bob Drzyzgula</a></dt>

      <dd>for budgeting design notes</dd>

      <dt> <a href="mailto:pjf@schools.net.au"> Paul Fenwick</a></dt>

      <dd>ASX support</dd>

      <dt> <a href="mailto:hfiguiere@teaser.fr"> Hubert Figuiere</a></dt>

      <dd>patch to gnc-prices</dd>

      <dt> <a href="mailto:ju_finck@mail.netwave.de"> Jan-Uwe
      Finck</a></dt>

      <dd>for German message translation</dd>

      <dt> <a href="mailto:rjf@aracnet.com"> Ron Forrester</a></dt>

      <dd>for gnome patches</dd>

      <dt> <a href="mailto:DFreese@osc.uscg.mil"> Dave
      Freese</a></dt>

      <dd>for leap-year fix</dd>

      <dt> <a href="mailto:grib@billgribble.com"> Bill Gribble</a></dt>

      <dd>qif importation code</dd>

      <dt> <a href="mailto:otto@bug.redhat.com"> Otto
      Hammersmith</a></dt>

      <dd>for RedHat RPM packaging</dd>

      <dt> <a href="mailto:offby1@blarg.net"> Eric Hanchrow</a></dt>

      <dd>updated currency documentation</dd>

      <dt> <a href="mailto:haral@codec.ro"> Alexandru
      Harsanyi</a></dt>

      <dd>for fixing miscellaneous core dumps and lockups.</dd>

      <dt> <a href="mailto:john@dhh.gt.org"> John Hasler</a></dt>

      <dd>engine patch</dd>

      <dt> <a href="mailto:jk@isdn-a33.itea.ntnu.no"> Jon K}re
      Hellan</a></dt>

      <dd>for fixing miscellaneous core dumps and lockups.</dd>

      <dt> <a href="mailto:PrakashK@bigfoot.com"> Prakash
      Kailasa</a></dt>

      <dd>for gnome build fixes</dd>

      <dt> <a href="mailto:tkludy@csd.sgi.com"> Tom Kludy</a></dt>

      <dd>for SGI Irix port</dd>

      <dt> <a href="mailto:sk@xgm.de"> Sven Kuenzler</a></dt>

      <dd>for SuSE README file</dd>

      <dt><a href="mailto:blarsen@ada-works.com"> Bryan Larsen</a></dt>

      <dd>guile budget report</dd>

      <dt> <a href="mailto:mellon@andare.fugue.com"> Ted
      Lemon</a></dt>

      <dd>for NetBSD port</dd>

      <dt> <a href="mailto:y-le-ny@ifrance.com"> Yannick Le
      Ny</a></dt>

      <dd>pour la traduction en Fran&ccedil;ais</dd>

      <dt> <a href="mailto:glikely@nortelnetworks.com"> Grant
      Likely</a></dt>

      <dd>gnome and engine patches</dd>

      <dt> <a href="mailto:martinh@pegasus.cc.ucf.edu"> Heath
      Martin</a></dt>

      <dd>major work on the gnome register</dd>

      <dt> <a href="mailto:mgmartin@abacusnet.net"> Matt
      Martin</a></dt>

      <dd>guile error handling code</dd>

      <dt> <a href="mailto:rgmerk@mira.net"> Robert Graham
      Merkel</a></dt>

      <dd>reporting, gnome, and configuration patches.</dd>

      <dt> <a href="mailto:mooney@dogbert.cc.ndsu.NoDak.edu"> Tim
      Mooney</a></dt>

      <dd>port to alpha-dec-osf4.0f</dd>

      <dt> <a href="mailto:gam3@ann.softgams.com"> G. Allen Morris
      III</a></dt>

      <dd>for QIF core dump fix</dd>

      <dt> <a href="mailto:brent@baton.phys.lsu.edu"> Brent Neal</a></dt>

      <dd>TIAA-CREF support.</dd>

      <dt> <a href="mailto:spacey@inch.com"> Peter Norton</a></dt>

      <dd>for a valiant attempt at a GTK port</dd>

      <dt> <a href="mailto:webmaster@obsidian.uia.net">
      OmNiBuS</a></dt>

      <dd>web site graphics and content</dd>

      <dt> <a href="mailto:mopyr@IPM.Lviv.UA"> Myroslav
      Opyr</a></dt>

      <dd>for misc patches</dd>

      <dt> <a href="mailto:laurent.pelecq@wanadoo.fr"> Laurent
      P{'e}lecq</a></dt>

      <dd>i18n patches with gettext</dd>

      <dt> <a href="mailto:Alain.Peyrat@nmu.alcatel.fr"> Alain
      Peyrat</a></dt>

      <dd>for <tt>configure.in</tt> patches</dd>

      <dt> <a href="mailto:peter@wuzel.m.isar.de"> Peter
      Pointner</a></dt>

      <dd>motif and configuration patches</dd>

      <dt> <a href="mailto:maufk@csv.warwick.ac.uk"> Gavin
      Porter</a></dt>

      <dd>for euro style dates</dd>

      <dt> <a href="mailto:rr@sco.com"> Ron Record</a></dt>

      <dd>for SCO Unixware and OpenServer binaries</dd>

      <dt> <a href="mailto:schoenberger@signsoft.com"> Dirk
      Schoenberger</a></dt>

      <dd>began the Qt/KDE port</dd>

      <dt> <a href="mailto:jan.schrage@urz.uni-heidelberg.de"> Jan
      Schrage</a></dt>

      <dd>documentation patches</dd>

      <dt> <a href="mailto:cls@seawood.org"> Christopher
      Seawood</a></dt>

      <dd>for XbaeMatrix core dump</dd>

      <dt> <a href="mailto:msimons@fsimons01.erols.com"> Mike
      Simons</a></dt>

      <dd>misc <tt> configure.in</tt> patches</dd>

      <dt> <a href="mailto:rich@brake.demon.co.uk"> Richard
      Skelton</a></dt>

      <dd>for Solaris cleanup</dd>

      <dt> <a href="mailto:spruth@bigfoot.com"> Henning
      Spruth</a></dt>

      <dd>for German text and euro date rework</dd>

      <dt> <a href="mailto:parys@freewwweb.com"> Robby Stephenson</a></dt>

      <dd>register patch</dd>

      <dt> <a href="mailto:tma@iis.fhg.de"> Herbert Thoma</a></dt>

      <dd>gnome register & euro support patches</dd>

      <dt> <a href="mailto:detrout@earthlink.net"> Diane
      Trout</a></dt>

      <dd>scheme qif import patch</dd>

      <dt> <a href="mailto:rkw@dataplex.net"> Richard Wackerbarth</a></dt>

      <dd>patch to gnc-prices</dd>

      <dt> <a href="mailto:rob@valinux.com"> Rob Walker</a></dt>

      <dd>guile and register patches</dd>

      <dt> <a href="mailto:dwmw2@infradead.org"> David Woodhouse</a></dt>

      <dd>Great Britain translations</dd>

      <dt> <a href="mailto:gooch@ic.EECS.Berkeley.EDU"> Ken
      Yamaguchi</a></dt>

      <dd>QIF import fixes; MYM import</dd>
    </dl>


</FONT>

<! ************************** >                        
<! Developer Content - FINISH >
<! ************************** >    
		
      <?php include("include/table_bottom.inc"); ?>
      
      <! END CONTENT>
      

<?php include("include/footer.inc"); ?> 
