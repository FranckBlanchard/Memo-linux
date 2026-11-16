# Suggestions pour le mémo Linux

## Contenu à ajouter

- [ ] Ajouter une section sur les permissions et les propriétaires : `chmod`, `chown` et `umask`, avec des exemples numériques et symboliques.
- [ ] Ajouter une section sur la recherche de fichiers et de contenu : `find` et `grep`.
- [ ] Ajouter une section sur les processus et les services : `ps`, `top`, `kill` et `systemctl`.
- [ ] Ajouter une section sur les disques et l'espace utilisé : `df -h`, `du -sh`, `lsblk` et `mount`.

## Contenu à compléter

- [ ] Moderniser la section SSH : présenter `ssh-keygen -t ed25519`, `ssh-copy-id` et la vérification de la clé d'hôte; conserver RSA comme option de compatibilité.
- [ ] Ajouter des précautions pour les commandes destructrices ou privilégiées, notamment `rm -r`, `apt purge` et `dpkg -P`.
- [ ] Préciser le contexte du mémo : distributions visées, shell utilisé, notation des paramètres et commandes nécessitant `sudo`.
- [ ] Revoir les exemples `rsync` : expliquer le slash final des chemins et montrer `--dry-run` avant une copie importante.

## Révision éditoriale

- [x] Relire les descriptions et corriger les fautes restantes, notamment dans la section réseau.
