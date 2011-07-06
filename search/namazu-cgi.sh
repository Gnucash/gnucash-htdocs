#!/bin/sh
#
# Namazu CGI wrapper. Deal with LANG
#

# compute the langinfo from the $QUERY_STRING
langinfo=`echo "$QUERY_STRING" | grep -oE '(^|[?&])lang=([a-zA-Z_]+)' | cut -f 2 -d "="`
if [ -z "$langinfo" ]; then
  # if cannot get langinfo from $QUERY_STRING, then get it from COOKIE
  langinfo=`echo "$HTTP_COOKIE" | grep -oE '(^|[?&])lang_cookie=([a-zA-Z_]+)' | cut -f 2 -d "="`
fi

if [ -n "$langinfo" ] ; then
  LANG="$langinfo"
  export LANG
  echo "Set-Cookie: lang_cookie=$langinfo"
fi

exec /var/www/cgi-bin/namazu.cgi
