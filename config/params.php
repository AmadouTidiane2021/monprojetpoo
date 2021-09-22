<?php

/**
 * Fichier contenant la configuration de l'application
 */
const CONFIG = [
    'db' => [
        'DB_HOST' => 'localhost',
        'DB_PORT' => '8889',
        'DB_NAME' => 'projetpoo',
        'DB_USER' => 'root',
        'DB_PSWD' => 'root',
    ],
    'app' => [
        'name' => 'Mon Projet',
        'projectBaseUrl' => 'http://localhost:8888/mvc'
    ]
];

/**
 * Constantes pour accéder rapidement aux dossiers importants du MVC
 */
const BASE_DIR      = __DIR__ . '/../';
const BASE_PATH     = CONFIG['app']['projectBaseUrl'] . '/public/index.php/';
const PUBLIC_FOLDER = BASE_DIR . 'public/';
const VIEWS         = BASE_DIR . 'views/';
const MODELS        = BASE_DIR . 'src/models/';
const CONTROLLERS   = BASE_DIR . 'src/controllers/';
const PHOTO         = '../../public/upload/'; 

/**
 * Liste des actions/méthodes possibles (les routes du routeur)
 */
$routes = [
    ''                          => ['AppController', 'index'],
    '/'                         => ['AppController', 'index'],
    '/produits/add'             => ['ProduitsController', 'add'],
    '/produits/save'            => ['ProduitsController','save'],
    '/produits/list'            => ['ProduitsController','list'],
    '/categories/add'           => ['CategoriesController','add'],
    '/categories/save'          => ['CategoriesController','save'],
    '/categories/list'          => ['CategoriesController','list'],
    '/categories/delete'        => ['CategoriesController', 'delete'],
    '/produits/delete'          => ['ProduitsController', 'delete'],
    '/panier/add'               => ['AppController', 'add'],
    '/panier/list'              => ['AppController', 'list'],
    '/user/inscription'         => ['AppController', 'inscription'],
    '/user/connexion'           => ['AppController', 'connexion'],
    '/user/connexion'           => ['AppController', 'connexion'],
    '/produits/commande'        => ['ProduitsController','commande'],
    '/produits/recap'           => ['ProduitsController','recap'],
    '/email/send'               => ['MailController', 'send'],
    '/avis/commentaires'        =>['AvisController' , 'commentaires'],
    '/avis/add'                 => ['AvisController', 'add']

    

];
