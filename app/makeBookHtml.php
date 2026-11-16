<?php

/**
 * makeBookHtml.php
 *
 */
use \Michelf\Markdown;
use \Twig\Environment;
use \Twig\Loader\FilesystemLoader;

define('EOL', "\n");
// Répertoire des templates
$templateDir = __DIR__ . '/templates';
// Titre html pour le fichier html
$title = "memo linux";
// Fichier mardown a transformer
$mdFile = __DIR__ . "/../src/concat/Memo-Linux.md";
// Fichier html a créer
$htmlFile = __DIR__ . "/../build/html/memo-linux.html";
// Iniatilisation de la variable $mdContent avec le contenu du fichier a transformer
/**
 * @var string $mdContent Contenu du fichier concatené.
 */
$mdContent = '';
if (file_exists($mdFile)) {
    $mdContent = file_get_contents($mdFile);
    if ($mdContent === false) {
        throw new RuntimeException("Impossible de lire le fichier $mdFile");
    }
} else {
    $mdContent = "## Le fichier $mdFile ne semble pas exister !";
}
// Date de création du document
$fuseauHoraire = new \DateTimeZone("America/Montreal");
$date = new \DateTime('now', $fuseauHoraire);
// Template Twig a utiliser
$twigTemplate = "memo-linux.html.twig";
/**
 * Initialisation de l'autoloarder de composer
 */
$fileAutoload = __DIR__ . "/../vendor/autoload.php";
if (!is_file($fileAutoload)) {
    throw new RuntimeException("Autoloader Composer introuvable : $fileAutoload");
}
echo EOL . 'Chargement de l\'autoloader ' . $fileAutoload . EOL;
require_once $fileAutoload;
/**
 * Initialisation du parser markdown
 */
$htmlBook = Markdown::defaultTransform($mdContent);

/**
 * Initialisation du moteur de template Twig
 */
$loader = new FilesystemLoader($templateDir);
$twig = new Environment($loader, array(
    "autoescape" => false
        ));
echo EOL . 'Génération de la page html' . EOL;
$html = $twig->render($twigTemplate, array(
    "htmlTitleBar" => $title,
    "htmlTitle" => $title,
    "dateCompilation" => $date->format("Y-m-d H:i:s"),
    "htmlFromMdFile" => $htmlBook
        ));

echo EOL . 'Enregistrement de la page ' . $htmlFile . EOL;
$htmlDirectory = dirname($htmlFile);
if (!is_dir($htmlDirectory) && !mkdir($htmlDirectory, 0775, true) && !is_dir($htmlDirectory)) {
    throw new RuntimeException("Impossible de créer le répertoire $htmlDirectory");
}

$bytesWritten = file_put_contents($htmlFile, $html);
if ($bytesWritten !== strlen($html)) {
    throw new RuntimeException("Impossible d'écrire complètement le fichier $htmlFile");
}
