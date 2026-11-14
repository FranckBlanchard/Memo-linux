<?php

/**
 * makeBookPdf.php
 */

$cmd = "wkhtmltopdf --enable-local-file-access --page-size letter build/html/memo-linux.html build/pdf/memo-linux.pdf";
system($cmd);