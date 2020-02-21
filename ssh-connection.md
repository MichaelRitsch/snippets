# SSH Verbindung einrichten am Beispiel Preivorteile

## 1. CPANEL
In CPANEL einen neuen SSH User anlegen und ein PWD festlegen, das geht unter cPanel -> SSH/Shell Access.
Anschließend den Private Key öffnen und kopieren

## 2. Terminal
Im Terminal einen Ordner machen wo die SSH Keys gespeichert werden sollen. Dort mit dem Befehl ```vim preisvorteile```eine neue Datei erstellen, dort den Private Key einfügen und file speichern.

Über den Befehl ```chmod 600 preisvorteile```müssen dann die Schreibrechte angepasst werden.

Anschließend muss der Key noch mit dem Befehl ```ssh-add preisvorteile``` eingelesen und mit dem Passwort von Schritt 1 bestätigt werden.


## 3. Per SSH mit dem Server verbinden

Die Verbindung kann jetzt mit folgendem Befehl hergstellt werden:
```ssh preisvo0@35.214.203.118 -p18765```


## Quellen:

[how_to_log_in_to_my_shared_account_via_ssh_in_linux](https://www.siteground.com/kb/how_to_log_in_to_my_shared_account_via_ssh_in_linux/)
