
<?php include("include/header.inc"); ?>

      <! BEGIN CONTENT >


      <?php include("include/table_top.inc"); ?>
      about gnucash!
      <?php include("include/table_middle.inc"); ?>

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
      
      <?php include("include/table_bottom.inc"); ?>



<?php include("include/table_top.inc"); ?>
      news

<?php include("include/table_middle.inc"); ?>
       
<?php
    //  change  this  to  the  directory  of  your  news  files 
    //  they  should  be  plain  ASCII  text  files  with  extension  ".txt" 

    # Perhaps we should be using this, but it won't work until we have
    # the DocumentRoot set up.
    # $newspath = $GLOBALS['DOCUMENT_ROOT']."/news/

    # So we'll just do this for now...
    $newspath  =  "news/"; 

    //  Declare  array  to  hold  filenames 
    $newsfile  =  array(); 
    
    //  Create  handle  to  search  directory  $newspath  for  files 
    $hd  =  dir($newspath); 
    
    //  Get  all  files  and  store  them  in  array 
    while(  $filename  =  $hd->read()  )  { 
        $s=strtolower($filename); 
        if  (strstr($s, ".txt"))  { 
            //  Determine  last  modification  date 
            $lastchanged=filemtime($newspath.$filename); 
            $newsfile[$filename]  =  $lastchanged; 
        }    
    } 
    
    //  Sort  files  in  descending  order 
    arsort($newsfile); 
    //  Output  files  to  browser 
    for(reset($newsfile);  $key  =  key($newsfile);  next($newsfile))  { 
        $fa  =  file($newspath.$key); 
        $n=count($fa); 
	echo("<UL><LI>");
	print  "<b>".date( "Y-m-d",$newsfile[$key]);
	print  "&nbsp; &nbsp;".date( "H:i:s",$newsfile[$key]). "</b><BR><br>\n"; 
        for  ($i=0;  $i<$n;  $i=$i+1)  { 
	    print $fa[$i];
        } 
        echo("</UL></LI>");
        echo("<hr>");
    }    
    
    $hd->close();  
    ?>  

<a href="surf/guppi-pie-demo.html">test</a>
<a href="surf/short.gml">test2</a>
<a href="surf/demo.gml">test3</a>
                  
<?php include("include/table_bottom.inc"); ?>

<?php include("include/footer.inc"); ?> 
