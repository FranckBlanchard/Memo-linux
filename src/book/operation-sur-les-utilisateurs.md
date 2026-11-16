
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
