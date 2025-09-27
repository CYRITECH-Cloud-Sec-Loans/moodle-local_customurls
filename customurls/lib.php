<?php
// Fichier : local/customurls/lib.php

/**
 * Hook pour modifier les URLs générées par Moodle
 */
function local_customurls_extend_navigation($navigation) {
    // Intercepter et modifier les URLs dans la navigation
}

/**
 * Override des fonctions URL de Moodle
 */
function local_customurls_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options=array()) {
    // Gestion des fichiers avec URLs personnalisées
}
?>