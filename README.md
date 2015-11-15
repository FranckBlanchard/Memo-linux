# memo-linux
Dépot contenant des aides mémoires sur Linux.

Les exemples cités dans ce document ne sont que des exemples, pour avoir plus d'information se référer au pages du manuel de la commande, ou a l'aide en ligne.

## Pour obtenir plus d'information sur une commande faire
**man** commande

Pour la majoritée des commandes il est possible d'afficher de l'aide directement depuis la commande en faisant:

**commande** *--help*
## Opération sur les fichiers.
### Créer un fichier.
**touch** fichier
### Supprimer un fichier.
**rm** fichier
### Copier un fichier.
**cp** fichier1 fichier2
### Afficher un fichier.
**cat** fichier
### Afficher un fichier avec un pager
**less** fichier

**more** fichier
### Afficher les *n* premières lignes d'un fichier
**head** *-n* fichier
### Afficher les *n* dernières lignes d'un fichier
**tail** *-n* fichier
### Renommer ou déplacer un fichier
**mv** source destination
##Opérations sur les répertoires
###Créer un répertoire
**mkdir** répertoire
###Effacer un répertoire vide
**rmdir** répertoire
###Effacer un répertoire de façon récurdive
**rm** *-r* répertoire
###Afficher les fichiers du répertoire courant
**ls**
###Afficher les fichiers du répertoire courant au format long
**ls** *-l*
###Afficher les fichiers du répertoire courant au format long ainsi que les fichiers cachés
**ls** *-la*
