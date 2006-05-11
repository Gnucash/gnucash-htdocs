#!/usr/bin/perl -w
#
# This perl script is used to make po/POTFILES, the list
# of PHP and phtml files to be searched for translatable strings.
#
# Author: Dave Peticolas <dave@krondo.com>
# Adapted for PHP by Neil Williams <linux@codehelp.co.uk>

use strict;

use File::Basename;

my @cvsignores = `find . -name '.cvsignore'`;
my @phtml_files = `find . -name '*.php' -o -name '*.phtml' -maxdepth 1`;
my @news_files = `find news -name '*.phtml'`;
#my @news_files = ();
my @possible_files = (@phtml_files, @news_files);

chomp(my $cwd = `pwd`);

my %ignores;

foreach my $one_ignore (@cvsignores) {
  chomp($one_ignore);
  my ($name, $path) = fileparse($one_ignore);
  $path =~ s/^\.\///;
  open (IG, $one_ignore);
  chdir ("$path");
  foreach my $fl (<IG>) {
    chomp $fl;
    next unless $fl;
    my @matches = glob ($fl);
    foreach my $match (@matches) {
      chomp($match);
      next unless $match;
      $ignores{$path . $match} = 1;
    }
  }
  close (IG);
  chdir $cwd;
}


foreach my $file (@possible_files) {
  chomp($file);
  my ($name, $path) = fileparse($file);
  $path =~ s/^\.\///;

  next if $ignores{$path . $name};

  print $path . $name . "\n";
}

