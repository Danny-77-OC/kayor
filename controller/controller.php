<?php

require_once("model/DataBase.php");

require_once("model/Customer.php");

require_once("model/Command.php");


class Controller{

public function welcomePage(){
    require("view/welcome.php");
}


public function introPage(){
    require("view/introduction.php");
}

public function InscriptionPage(){
    require("view/inscription.php");
}

public function connexionPage(){
    require("view/connexion.php");
}

public function productPage(){
    require("view/productList.php");
}

public function deconnexionPage(){
    require("view/deconnexion.php");
}


public function checkInscription(){
    $checkTheUser = new Customer;
   $checking = $checkTheUser->checkCustomer($_POST['nom']);
    if ($checking === true){
        require("view/error.php");
        ?><script>$("#nameError").css("display","block")</script>  <?php
       
    }
   else{
    $customer= new Customer;
        $customer->addCustomer();
        require("view/connexion.php");
    } 
}



public function verifyConnexion(){
    $checkCo = new Customer;
    $checkTheCo =  $checkCo->checkPassword($_POST['nameCo']);
    $passCheck = password_verify($_POST['mdpCo'], $checkTheCo['mdpCustomer']);
    $nameCheck =  $checkCo->checkCustomer($_POST['nameCo']);
    if ($passCheck==true &&  $nameCheck==true) {
      require("view/welcome.php");
    }else{
        require("view/error.php");
        ?><script>$("#psdError").css("display","block")</script><?php
    }
}




public function addNewCommand(){
$cmd = new Command;
$cmd->addCommand();  
}



public function myCmd(){
    $myCmd = new Command;
    $theCmd = $myCmd->showMyCommand($_SESSION['pseudo']);
    require("view/validCommand.php");
}

public function fullListCmd(){
    $command = new Command;
    $showCommand = $command->theListCmd();
    require("view/listCmd.php");
}


public function theListCst(){
    $cst = new Customer;
    $showCst = $cst->theListCst();
    require("view/listMember.php");
}


public function deleteMyCmd(){
    $delCmd = new Command;
    $delCmd->deleteCmd($_GET['idCmd']);
    require("view/validDelete.php");
}


}