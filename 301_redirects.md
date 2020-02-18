### htaccess Redirect von einzelnen Seiten oder URLs

```
RewriteEngine On
Redirect 301 /alter-pfad/ http://www.domain.de/neuer-pfad/
```

### htaccess Redirect von www auf non-www

RewriteEngine On
RewriteCond %{HTTP_HOST} ^www\.domain\.de$ [NC]
RewriteRule ^(.*)$ http://domain.de/$1 [L,R=301]

### htaccess Redirect von non-www auf www

```
RewriteEngine On
RewriteCond %{HTTP_HOST} !^www\.domain\.de$ [NC]
RewriteRule ^(.*)$ http://www.domain.de/$1 [L,R=301]
```

### htaccess Redirect von http auf https

```
RewriteEngine On
RewriteCond %{SERVER_PORT} !^443$
RewriteRule (.*) https://%{HTTP_HOST}/$1 [R=301,L]
```

### Umleitung der alten Seitenstruktur auf eine neue Domain

```
RewriteEngine On
RewriteCond %{REQUEST_URI} (.*)
RewriteRule ^(.*)$ http://neue-domain.tld/$1 [L,R=301]
```

### Alle Links auf die Startseite der neuen Domain weiterleiten
```
RewriteEngine On
RewriteCond %{REQUEST_URI} (.*)
RewriteRule ^(.*)$ http://www.neue-domain.tld/ [L,R=301]
```
