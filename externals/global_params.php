<?php
  require_once 'lang.php';
     // This section defines the most recent version numbers for all platforms.
     // Each platform can define its own latest version or follow the default.
     // Both a latest stable version and a latest unstable version are defined.
     $major_stable              ="4";
     // TODO: on major_stable 5 in download.phtml copy from $old_stable into the historical
     // section: last_win7 and $last_mac_sierra
     $minor_stable              ="11";
     // Number of Translations: Did we add or dropped some?
     define("PROG_TRANSLATIONS", 58);

     $latest_stable             = $major_stable.".".$minor_stable;
     //$latest_stable_win         = $latest_stable;
     $latest_stable_win         = $latest_stable."-1";
     $latest_stable_mac_intel   = $latest_stable."-1";
// Change this when there has been a re-tag to add the re-tag letter,
// e.g. if one retagged 2.6.13 to 2.6.13a, make $tarball = $latest_stable."a".
     $tarball                   = $latest_stable."";

     $major_unstable            ="3";
     $minor_latest_unstable     ="906";
     $latest_unstable           = $major_unstable.".".$minor_latest_unstable;
// To publicize an unstable release:
     $show_unstable             = $major_unstable >= $major_stable;
     $latest_unstable_win       = $latest_unstable;
     $latest_unstable_mac_intel = $latest_unstable."-1";

     $major_old_stable          ="3";
     $minor_old_stable          ="11";
     $old_stable            = $major_old_stable.".".$minor_old_stable;
     $old_stable_win        = $old_stable;
     $old_stable_mac_intel  = $old_stable."-1";

     // Supported targets:
     define("LABEL_WIN", "Microsoft Windows");
     define("LABEL_MAC", "Apple macOS");
     define("SUPPORTED_WIN", "8/10/11");
     define("SUPPORTED_MAC", "&ge; 10.13—\"High Sierra\"");
     // Frozen versions:
     $show_historical = True;
     $last_win7_version = "3.11"; //Still used in download block on index.phtml
     $last_mac_sierra  = "3.11-1";
     $last_xp_vista_version = "2.6.21"; // used also in text
     $last_mac_ppc  = "2.6.21-1";
     $last_win2k_version = "2.2.9";

     // The definitions below use the latest version definitions above
     // to define several paths that will be used on several pages
     // on the website.
     // Please don't make changes below unless you know what you are doing.
     $base_path="https://sourceforge.net/projects/gnucash/files";
     $stable_path=$base_path."/gnucash%20(stable)/";
     $latest_stable_path=$stable_path.$latest_stable."/";
     $last_2_2_path=$stable_path."/".$last_win2k_version."/";
     $last_2_6_path=$stable_path."/".$last_xp_vista_version."/";
     $last_3_path=$stable_path."/".$last_win7_version."/";
     
     $latest_stable_win="gnucash-".$latest_stable_win.".setup.exe";
     $last_win7="gnucash-".$last_win7_version.".setup.exe";
     $last_xp_vista="gnucash-".$last_xp_vista_version."-setup.exe";
     $last_win2k="gnucash-".$last_win2k_version."-setup.exe";
     $latest_stable_mac_intel="Gnucash-Intel-".$latest_stable_mac_intel.".dmg";
     $last_mac_sierra="Gnucash-Intel-".$last_mac_sierra.".dmg";
     $last_mac_ppc="Gnucash-PPC-".$last_mac_ppc.".dmg";
     $latest_stable_source="gnucash-".$tarball.".tar.bz2";

     $old_stable_path=$stable_path.$old_stable."/";

     $old_stable_win="gnucash-".$old_stable_win.".setup.exe";
     $old_stable_mac_intel="Gnucash-Intel-".$old_stable_mac_intel.".dmg";
     $old_stable_source="gnucash-".$old_stable.".tar.bz2";

     $unstable_path=$base_path . "/gnucash%20(unstable)/";
     $latest_unstable_path=$unstable_path.$latest_unstable."/";

     $latest_unstable_win="gnucash-".$latest_unstable_win.".setup.exe";
     $latest_unstable_mac_intel="Gnucash Intel ".$latest_unstable_mac_intel.".dmg";
     $latest_unstable_source="gnucash-".$latest_unstable.".tar.bz2";

     // The URLs, we use:
     define("DEFAULT_URL", "https://www.gnucash.org/"); // The main webserver
     define("SERVER_IRC", "irc.gnome.org"); // alias The GIMPNet
     define("URL_IRC", "irc://".\SERVER_IRC."/gnucash");
     $URL_FLATHUB="https://flathub.org/apps/details/org.gnucash.GnuCash";
     $URL_FLATPAK="https://flatpak.org/";
     $URL_WIKI="https://wiki.gnucash.org/wiki/";

     // some defaults for metatags in case the page does not set them
     $default_title= T_("Free Accounting Software");
     $default_description= T_("<span class=\"gnucash\">GnuCash</span> is personal and small-business financial-accounting software, freely licensed under the <a href=\"https://www.gnu.org/\">GNU</a> GPL and available for GNU/Linux, BSD, Solaris, Mac OS X and Microsoft Windows.");
     ?>
