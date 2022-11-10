<?php
try {
    $mbd = new PDO('mysql:host=db;dbname=integracion-continua',"root", "123456");
    foreach($mbd->query('SELECT * from usuarios') as $fila) {
        print_r($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>