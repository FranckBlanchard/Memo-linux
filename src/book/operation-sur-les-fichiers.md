
## Opération sur les fichiers.

### Créer un fichier.

```
touch fichier
```

### Supprimer un fichier.

```
rm fichier
```

### Copier un fichier.

```
cp fichier1 fichier2
```

### Afficher un fichier.

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

### Afficher les *n* premières lignes d'un fichier

```
head -n fichier
```

### Afficher les *n* dernières lignes d'un fichier

```
tail -n fichier
```

### Renommer ou déplacer un fichier

```
mv source destination
```

### Créer un lien symbolique

Créer un lien symbolique vers un fichier ou un répertoire.

```
ln -s cible nom_du_lien
```

```
ln -s /opt/application ~/application
```

Le lien ~/application pointera vers le répertoire /opt/application.
