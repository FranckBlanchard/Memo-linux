
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
