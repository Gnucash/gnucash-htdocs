HTBINDIR=/var/httpd/www.gnucash.org/cgi-bin
QUERY_STRING="$@"
REQUEST_METHOD=GET
export QUERY_STRING REQUEST_METHOD
$HTBINDIR/htsearch
