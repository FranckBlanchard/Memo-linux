
Pour obtenir des informations sur une commande, consultez sa page de manuel ou son aide intégrée.

## Consulter le manuel d'une commande

```
man commande
```

Remplacez `commande` par le nom de la commande recherchée.

## Afficher l'aide d'une commande

De nombreuses commandes affichent un résumé de leur utilisation avec l'option `--help` :

```
commande --help
```

## Opérations sur les fichiers

### Créer un fichier

```
touch fichier
```

### Supprimer un fichier

```
rm fichier
```

### Copier un fichier

```
cp fichier1 fichier2
```

### Afficher un fichier

```
cat fichier
```

### Afficher un fichier avec un pager

```
less fichier
```

```
more fichier
```

### Afficher les 10 premières lignes d'un fichier

```
head -n 10 fichier
```

### Afficher les 10 dernières lignes d'un fichier

```
tail -n 10 fichier
```

### Renommer ou déplacer un fichier

```
mv source destination
```

### Créer un lien symbolique

Créer un lien symbolique vers un fichier ou un répertoire :

```
ln -s cible nom_du_lien
```

```
ln -s /opt/application ~/application
```

Le lien `~/application` pointera vers le répertoire `/opt/application`.
## Opérations sur les répertoires

### Créer un répertoire

```
mkdir répertoire
```

### Supprimer un répertoire vide

```
rmdir répertoire
```

### Supprimer un répertoire de façon récursive

```
rm -r répertoire
```

### Afficher les fichiers du répertoire courant

```
ls
```

### Afficher les fichiers du répertoire courant au format long

```
ls -l
```

### Afficher les fichiers du répertoire courant au format long, y compris les fichiers cachés

```
ls -la
```

### Afficher le répertoire courant

```
pwd
```

### Changer de répertoire

```
cd répertoire
```

### Accéder au répertoire parent

```
cd ..
```

### Accéder au répertoire personnel de l'utilisateur courant

```
cd ~
```

### Renommer ou déplacer un répertoire

```
mv source destination
```
## Opérations sur les archives

### Créer une archive avec tar

Depuis le répertoire parent de `documents`, créez une archive compressée au format gzip contenant ce répertoire :

```
tar -czvf archive.tar.gz documents/
```

### Afficher le contenu d'une archive créée avec tar

```
tar -ztvf archive.tar.gz
```

### Extraire les fichiers d'une archive créée avec tar

```
tar -xzvf archive.tar.gz
```

## Opérations sur les utilisateurs

Les commandes de cette section nécessitent des privilèges d'administration.

### Ajouter un compte utilisateur

Consultez le manuel (`man useradd`) pour connaître les options disponibles.

```
useradd [option] identifiant
```

### Supprimer un compte utilisateur

```
userdel utilisateur
```

### Supprimer un compte utilisateur et son répertoire personnel

```
userdel -r utilisateur
```

Attention : l'option `-r` supprime aussi le répertoire personnel et la boîte
aux lettres de l'utilisateur. Sauvegardez les données à conserver avant de
l'utiliser.

`userdel` met à jour les fichiers de comptes système concernés, notamment
`/etc/passwd`, `/etc/shadow` et `/etc/group`. Il n'est normalement pas nécessaire
de supprimer ces entrées manuellement.

### Modifier un compte utilisateur

Les options dépendent des informations à modifier. Consultez le manuel
(`man usermod`) avant d'utiliser cette commande.

```
usermod [option] identifiant
```

## Opérations sur le système

### Debian et les distributions dérivées

Mettre à jour la liste des paquets disponibles :

```
apt-get update
```

Mettre à jour les paquets déjà installés :

```
apt-get upgrade
```

Installer un paquet :

```
apt-get install paquet
```

```
dpkg -i paquet
```

Supprimer un paquet :

```
apt-get remove paquet
```

```
dpkg -r paquet
```

Pour supprimer également les fichiers de configuration :

```
apt-get --purge remove paquet
```

```
dpkg -P paquet
```

Afficher la liste des paquets installés :

```
dpkg --get-selections | less
```

Rechercher des paquets correspondant à une chaîne de caractères :

```
apt-cache search chaîne
```
 
Rechercher uniquement dans les noms des paquets :

```
apt-cache search --names-only chaîne
```

Afficher les informations d'un paquet connu :

```
apt show paquet
```

## Opérations sur le réseau

### Interfaces réseau

La commande `ip` permet de consulter et de configurer les interfaces réseau.

Afficher les interfaces réseau et leurs adresses IP :

```
ip addr
```

### Routes

La commande `ip route` permet de consulter et de gérer les routes du noyau.

Afficher la table de routage :

```
ip route
```

### Tester la connectivité réseau

Envoyer 10 requêtes ping à `google.ca` pour tester la connectivité :

**Remarque :** un hôte peut être configuré pour ne pas répondre aux requêtes ping,
par exemple si un pare-feu les bloque.

```
ping -c 10 google.ca
```

Afficher le chemin suivi par les paquets jusqu'à l'hôte de destination :

```
traceroute google.com
```

Afficher les adresses IP et MAC des voisins connus :

```
ip neigh
```

Afficher les connexions TCP et UDP ainsi que les processus associés. Les
privilèges d'administration sont nécessaires pour voir tous les processus :

```
sudo ss -tunap
```

`ifconfig`, `route`, `arp` et `netstat` sont d'anciennes commandes du paquet
`net-tools`. Sur les systèmes récents, préférer les commandes `ip` et `ss`
présentées ci-dessus.

### Connexion à distance

**SSH** (Secure Shell) est un protocole sécurisé et le nom du programme client
qui permet d'ouvrir une session sur une machine distante. Les outils associés
permettent notamment de générer et de copier des clés.

Se connecter à une machine par son nom de domaine :

```
ssh login@domaine.com
```

Ou par son adresse IP :

```
ssh login@172.217.13.110
```

Générer une paire de clés SSH (une clé publique et une clé privée) :

```
ssh-keygen -t rsa -b 4096
```

Le programme demande une phrase secrète (passphrase) pour protéger la clé
privée, ainsi que l'emplacement où enregistrer les clés. Habituellement, elles
sont stockées dans `~/.ssh/`.

Effectuer une sauvegarde avec `rsync` via SSH. Exécutée depuis la machine de
destination, cette commande copie le contenu du répertoire distant vers le
répertoire local :

```
rsync -avz -e "ssh -p 22" utilisateur@serveur2:/chemin/source/ /chemin/destination/
```

## Copyright

Copyright © 2015-2026 Franck Blanchard

This work is licensed under the
[BSD 2-Clause License](https://github.com/FranckBlanchard/Memo-linux/blob/master/LICENSE).

The source code and latest version are available at:

[https://github.com/FranckBlanchard/Memo-linux](https://github.com/FranckBlanchard/Memo-linux)
