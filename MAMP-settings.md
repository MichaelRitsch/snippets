# Mamp Settings

## Ports

Apache Port: 80
Nginx Port: 80
MySQL Port: 3306

Wenn das nicht geht einfach auf den Standard Ports weitermachen

## Host File eintrag erstellen
Hostfile übers Terminal öffnen:
```
sudo code /etc/hosts
bzw. sudo vim /etc/hosts
```
Hier die Domain eintragen

```
127.0.0.1   incredible.mulk
```

## http.conf
http.conf übers Terminal öffnen:
```
code /Applications/MAMP/conf/apache/httpd.conf
bzw.: vim /Applications/MAMP/conf/apache/httpd.conf
```

Und hier 'virtual hosts' (ca #574) einkommentieren

## Virtual hosts

Virtual Hosts über das Terminal öffnen:
```
code /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf
bzw.: vim /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf
```
Und anschließend diesen Block unterhalb hinzufügen
```
<VirtualHost *:80>
ServerAdmin webmaster@dummy-host2.example.com
DocumentRoot “/Users/ritschm/Documents/LocalWordpress/IncredibleWebsite”
ServerName incredible.mulk
</VirtualHost>
```
### Anschließend den Server einmal NEU STARTEN.
