<?php
/**
 *le routeur est chargeé d'écouter les requètes HTTP provenant
 *du client web puis d'y répondre avec le contenu approprié.
 */

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        echo "page d'accueil";
        break;

    case '/about':
        echo "page de présentation";
        break;

    case '/skills':
        echo "page de de skills";
        break;

    case '/projects':
        echo "page de projets";
        break;

    case '/contact':
        echo "page de contact";
        break;

    default:
        echo "page 404, introuvable";
        break;
}