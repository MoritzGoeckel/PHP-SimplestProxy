# PHP-SimplestProxy
A extremely simple proxy written in PHP. Execute the proxy.php with an GET parameter named "url" with the encoded url as value. You can encode the url in PHP with "urlencode($url)" or with "encodeURIComponent(url)" in JQuery.

##Example: 
Before: https://public.opencpu.org/ocpu/library/
After:  proxy.php?url=https%3A%2F%2Fpublic.opencpu.org%2Focpu%2Flibrary%2F

Result -> Profit! :D
