# WP-CLI Setup / Einrichtung

1. Homebrew installieren [Homebrew](https://brew.sh/index_de)
2. WP-CLI über Homebrew installieren

```
brew install wp-cli
```

3.  Wenn ZSH: über ~/ ins Homeverzeichnis wechsel und dort die Datei '.zshrc' anleigen falls sie nicht existiert.
    Wenn Bash: über ~/ ins Homeverzeichnis wechsel und dort die Datei '.bash_profile' anleigen falls sie nicht existiert.
4. Dort folgenden Inhalt eintragen:

```
PATH=$PATH:/Applications/MAMP/Library/bin
export PATH
```

5. Terminal neu starten und testen ob der Command 'mysql' funktioniert

## Anmerkung

Das ganze Funktioniert für zsh Terminals wie zb. dem Hyper Terminal - bei anderen Terminals kann es sein dass diese Anleitung nicht funkioniert.
