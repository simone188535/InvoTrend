<?php
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $output = '"'.$username .'","'.$firstname .'","'.
    $lastname .'","'.$age.'","'.$address .'","'.$gender .'"';

    try{
        $pdo = new PDO ('mysql:host=invotrend-db.cb78nxiefg0d.us-east-2.rds.amazonaws.com; dbname=sub_form_db; charset=utf8',
        'invotrend_master','$devteam2015');

        $pdo->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);

        $sql ='INSERT INTO `sub_form_db`.`Magazine_Subs`(`username`,`firstname`,`lastname`,`age`,`address`,`gender`)
        VALUES('.$output.')';
        
        // $result = $pdo->exec($sql);

        $output = $result;
    }

    catch(PDOEXCEPTION $e){
        $output = 'Unable to connect to the database server: ' .
        $e->getMessage() . ' in ' .
        $e->getFile() . ':' . $e->getLine();
    }

    include __DIR__ . '/../templates/output.html.php';

?>