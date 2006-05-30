#!/bin/sh
#
# Build the Namazu search indices
#
# Written by:  Derek Atkins <derek@ihtfp.com>
#
# $Id$

######
# Potential things you might want/need to change

# This is the top of the namazu tree
topdir=/home/nmz

# This is the top of the namazu indices; the individual
# indexes live below here.  This is relative to $topdir
indexdir=index

# This is the top of the namazu templates.  Right now
# this is the only template directory available, but
# in the future we could turn this into the top-level
# of the per-list template.  This is also relative to
# $topdir
templatedir=nmz/search/templates

# This is the top of the mailman archives.
mailmandir=/home/mailman/archives/public

# This is the list of mailman lists to index
lists="gnucash-announce gnucash-br gnucash-de gnucash-devel gnucash-es gnucash-fr gnucash-it gnucash-user"

# Nothing to see/change below this line
###########################################################################
#

mydie()
{
    echo "$1"
    exit 1
}

cd $topdir || mydie "Cannot cd to $topdir"

for list in $lists ; do

  # Make sure the template directory exists
  [ -d $templatedir ] || mydie "Cannot find template directory: $templatedir"

  # Make sure the archive exists
  [ -d $mailmandir/$list ] || mydie "Cannot find the $list mailman archive"

  # Make sure the index directory exists
  if [ ! -d $indexdir/$list ] ; then
    mkdir -p $indexdir/$list || mydie "Cannot mkdir $indexdir/$list"
  fi

  # Build the namazu index for this list
  mknmz -s -Z -q -e -O $indexdir/$list \
    --media-type='text/html; x-type=pipermail' \
    --template-dir=$templatedir $mailmandir/$list 2>/dev/null

done
