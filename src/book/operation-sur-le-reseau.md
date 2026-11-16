
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
