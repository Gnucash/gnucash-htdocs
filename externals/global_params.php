<?php
     // This section defines the most recent version numbers for all platforms.
     // Each platform can define its own latest version or follow the default.
     // Both a latest stable version and a latest unstable version are defined.
     $latest_stable             = "2.4.13";
#     $latest_stable_win		= $latest_stable."-1";
     $latest_stable_win         = $latest_stable;
#     $latest_stable_mac_ppc     = $latest_stable."-2";
     $latest_stable_mac_ppc     = $latest_stable;
#     $latest_stable_mac_intel   = $latest_stable."-2";
     $latest_stable_mac_intel   = $latest_stable;
 
     $latest_unstable           = "2.5.2";
     // There's currently no unstable release being worked on, so disable it
#     $latest_unstable           = False;
     $latest_unstable_win       = $latest_unstable;
     $latest_unstable_mac_ppc   = $latest_unstable;
     $latest_unstable_mac_intel = $latest_unstable;

     // The definitions below use the latest version definitions above
     // to define several paths that will be used on several pages
     // on the website.
     // Please don't make changes below unless you know what you are doing.
     $stable_path="http://sourceforge.net/projects/gnucash/files/gnucash%20(stable)/";
     $latest_stable_path=$stable_path.$latest_stable."/";
     
     $latest_stable_win="gnucash-".$latest_stable_win."-setup.exe";
     $latest_stable_mac_intel="Gnucash-Intel-".$latest_stable_mac_intel.".dmg";
     $latest_stable_mac_ppc="Gnucash-PPC-".$latest_stable_mac_ppc.".dmg";
     $latest_stable_source="gnucash-".$latest_stable.".tar.bz2";
     
     $unstable_path="http://sourceforge.net/projects/gnucash/files/gnucash%20(unstable)/";
     $latest_unstable_path=$unstable_path.$latest_unstable."/";
     
     $latest_unstable_win="gnucash-".$latest_unstable_win."-setup.exe";
     $latest_unstable_mac_intel="Gnucash Intel ".$latest_unstable_mac_intel.".dmg";
     $latest_unstable_mac_ppc="Gnucash-PPC-".$latest_unstable_mac_ppc.".dmg";
     $latest_unstable_source="gnucash-".$latest_unstable.".tar.bz2";
     
     $download_path="http://downloads.sourceforge.net/sourceforge/gnucash/";
     
?>
