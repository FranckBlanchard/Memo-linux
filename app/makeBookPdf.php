<?php

/**
 * makeBookPdf.php
 */

declare(strict_types=1);

$rootDir = dirname(__DIR__);

$htmlFile = $rootDir . '/build/html/memo-linux.html';
$pdfFile = $rootDir . '/build/pdf/memo-linux.pdf';

$cmd = sprintf(
    'wkhtmltopdf --enable-local-file-access '
    . '--page-size letter '
    . '%s %s',
    escapeshellarg($htmlFile),
    escapeshellarg($pdfFile)
);

system($cmd, $returnCode);

if ($returnCode !== 0) {
    throw new RuntimeException('Erreur lors de la génération du PDF.');
}