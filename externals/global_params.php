<?php
     // This section defines the most recent version numbers for all platforms.
     // Each platform can define its own latest version or follow the default.
     // Both a latest stable version and a latest unstable version are defined.
     $major_stable		="2.6";
     $minor_stable		="18";
     $latest_stable             = $major_stable.".".$minor_stable;
#     $latest_stable_win		= $latest_stable;
     $latest_stable_win         = $latest_stable."-2";
     $latest_stable_mac_ppc     = $latest_stable."-1";
     $latest_stable_mac_intel   = $latest_stable."-1";
// Change this when there has been a re-tag to add the re-tag letter,
// e.g. if one retagged 2.6.13 to 2.6.13a, make $tarball = $latest_stable."a".
     $tarball                   = $latest_stable."-1";
     
#     $major_latest_unstable		="2.5";
#     $minor_latest_unstable		="10"; 
#     $latest_unstable           = $major_latest_unstable.".".$minor_latest_unstable;
     // There's currently no unstable release being worked on, so disable it
     $latest_unstable           = False;
     $latest_unstable_win       = $latest_unstable;
     $latest_unstable_mac_ppc   = $latest_unstable."-1";
     $latest_unstable_mac_intel = $latest_unstable."-1";

     $major_old_stable		="2.4";
     $minor_old_stable		="15";
     $old_stable           = $major_old_stable.".".$minor_old_stable;
     $old_stable_win       = $old_stable;
     $old_stable_mac_ppc   = $old_stable."-1";
     $old_stable_mac_intel = $old_stable."-2";

     // The definitions below use the latest version definitions above
     // to define several paths that will be used on several pages
     // on the website.
     // Please don't make changes below unless you know what you are doing.
     $stable_path="http://sourceforge.net/projects/gnucash/files/gnucash%20(stable)/";
     $latest_stable_path=$stable_path.$latest_stable."/";
     
     $latest_stable_win="gnucash-".$latest_stable_win.".setup.exe";
     $latest_stable_mac_intel="Gnucash-Intel-".$latest_stable_mac_intel.".dmg";
     $latest_stable_mac_ppc="Gnucash-PPC-".$latest_stable_mac_ppc.".dmg";
     $latest_stable_source="gnucash-".$tarball.".tar.bz2";

     $old_stable_path=$stable_path.$old_stable."/";
     
     $old_stable_win="gnucash-".$old_stable_win."-setup.exe";
     $old_stable_mac_intel="Gnucash-Intel-".$old_stable_mac_intel.".dmg";
     $old_stable_mac_ppc="Gnucash-PPC-".$old_stable_mac_ppc.".dmg";
     $old_stable_source="gnucash-".$old_stable.".tar.bz2";
     
     $unstable_path="http://sourceforge.net/projects/gnucash/files/gnucash%20(unstable)/";
     $latest_unstable_path=$unstable_path.$latest_unstable."/";
     
     $latest_unstable_win="gnucash-".$latest_unstable_win."-setup.exe";
     $latest_unstable_mac_intel="Gnucash Intel ".$latest_unstable_mac_intel.".dmg";
     $latest_unstable_mac_ppc="Gnucash-PPC-".$latest_unstable_mac_ppc.".dmg";
     $latest_unstable_source="gnucash-".$latest_unstable.".tar.bz2";
     
     $download_path="http://downloads.sourceforge.net/sourceforge/gnucash/";
     
?>
