<?php

// meu codigo php vem aqui

//MARIA MARIAAAAAAAAA!!!!!!

$pg = isset($_GET['pg']);
if ($pg) {
//verdadeiro
    switch ($_GET['pg']) {

        case 'contato':

            include_once 'paginas/includes/header.php';
            include_once 'paginas/contato.php';
            include_once'paginas/includes/footer.php';
            break;

        case 'login':
            include_once 'paginas/includes/login.php';
            break;
        case 'login2':

            include_once 'paginas/includes/login2.php';
            break;
        case 'login3':

            include_once 'paginas/includes/login3.php';
            break;
        default :

            echo 'pagina não encontrada <br> digite esse negocio';
            break;
    }
} else {
//Falso
    include_once 'paginas/includes/header.php';

    include_once 'paginas/inicio.php';
    include_once 'paginas/produtos.php';

    include_once'./paginas/includes/footer.php';
    echo "";
}
