
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
