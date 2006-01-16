
<?php include("include/header.inc"); ?>

      <! BEGIN CONTENT >

<?php include("include/table_top.inc"); ?>
      older announcements

<?php include("include/table_middle.inc"); ?>
       
<?php
    //  change  this  to  the  directory  of  your  news  files 
    //  they  should  be  plain  ASCII  text  files  with  extension  ".txt" 

    # Perhaps we should be using this, but it won't work until we have
    # the DocumentRoot set up.
    # $newspath = $GLOBALS['DOCUMENT_ROOT']."/news/

    # So we'll just do this for now...
    $newspath  =  "news/old/"; 

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

<?php include("include/table_bottom.inc"); ?>

<?php include("include/footer.inc"); ?> 
