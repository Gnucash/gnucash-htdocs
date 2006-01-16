
<?php include("include/header.inc"); ?>

      <! BEGIN CONTENT >


      <?php include("include/table_top.inc"); ?>
      about gnucash!
      <?php include("include/table_middle.inc"); ?>

GnuCash is a program to help you manage your personal finances.
A check-book like register GUI
allows you to enter and track bank accounts, stocks, income and
expenses.  The interface is designed to be simple and easy to use,
but is backed with double-entry accounting principles to ensure 
balanced books.
<BR>
<BR>

Gnucash.org is a project that is committed to developing top-notch 
financial tools for Linux and Unix users.  This includes the 
development of programming API's and components that can be used 
to create both server and personal applications for home and business use.
By focusing on ease-of-use, modular design and well-documented code, 
we hope that GnuCash becomes the the choice of the GNU Generation of
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
	print  "<b>".date( "m.d.Y  -  H:i:s",$newsfile[$key]). "</b><BR><br>\n"; 
        for  ($i=0;  $i<$n;  $i=$i+1)  { 
            $s=chop($fa[$i]); 
            print  $s; 
        } 
        echo("</UL></LI>");
        echo("<hr>");
    }    
    
    $hd->close();  
    ?>  

                  
<?php include("include/table_bottom.inc"); ?>

<?php include("include/footer.inc"); ?> 
