# Mamp Settings

## Ports

Apache Port: 80
Nginx Port: 80
MySQL Port: 3306

Wenn das nicht geht einfach auf den Standard Ports weitermachen

## Host File eintrag erstellen

sudo code /etc/hosts
bzw. sudo vim /etc/hosts

127.0.0.1   incredible.mulk

## http.conf

code /Applications/MAMP/conf/apache/httpd.conf
bzw.: vim /Applications/MAMP/conf/apache/httpd.conf

virtual hosts (ca #574) einkommentieren

## Virtual hosts

code /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf
bzw.: vim /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf

<VirtualHost *:80>
ServerAdmin webmaster@dummy-host2.example.com
DocumentRoot “/Users/ritschm/Documents/LocalWordpress/IncredibleWebsite”
ServerName incredible.mulk
</VirtualHost>
