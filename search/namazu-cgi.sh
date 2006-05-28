#!/bin/sh
#
# Namazu CGI wrapper. Deal with LANG
#

# compute the langinfo from the PATH_INFO
langinfo=`echo $PATH_INFO | grep '^/\w*' | sed -e 's#^/\(\w*\).*$#\1#'`

if [ -n "$langinfo" ] ; then
  LANG="$langinfo"
  SCRIPT_NAME="$SCRIPT_NAME/$langinfo"
  export LANG
fi
SCRIPT_NAME="$SCRIPT_NAME/"
export SCRIPT_NAME

exec /var/www/cgi-bin/namazu.cgi
