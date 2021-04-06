<?php

require('controller/controller.php');

if (isset($_GET['action'])) {
    session_start();
    if ($_GET['action'] == "introduction") {
        $page = new Controller;
        $page->introPage();
    } elseif ($_GET['action'] == "inscription") {
        $page = new Controller;
        $page->InscriptionPage();
    } elseif ($_GET['action'] == "inscriptionValid") {

        if (!empty($_POST["nom"]) && !empty($_POST["mdp"]) && !empty($_POST["email"]) && strlen($_POST["nom"])>1 && strlen($_POST["mdp"])>3) {

            $_POST["nom"] = strip_tags($_POST["nom"]);
            $_POST["mdp"] = strip_tags($_POST["mdp"]);
            $_POST["email"] = strip_tags($_POST["email"]);

           

       

        $page = new Controller;
        $page->checkInscription();
        }else{
            require("view/error.php");
            ?><script>$("#emptyField").css("display","block")</script><?php
        }
    } elseif ($_GET['action'] == "connexion") {
        $page = new Controller;
        $page->connexionPage();
    } elseif ($_GET['action'] == "validConnexion") {

        if (!empty($_POST["nameCo"]) && !empty($_POST["mdpCo"])) {

        $_POST["nameCo"] = strip_tags($_POST["nameCo"]);
        $_POST["mdpCo"] = strip_tags($_POST["mdpCo"]);

        $_SESSION['pseudo'] = $_POST['nameCo'];
        $_SESSION['password'] = $_POST['mdpCo'];

        $page = new Controller;
        $page->verifyConnexion();
       
        if ($_SESSION["pseudo"]==="sow" && $_SESSION["password"]==="admin") {
            ?><script>$("#menuAdmin").css("display","block")</script>  <?php
           
        }
        }else {
            require("view/error.php");
            ?><script>$("#emptyFieldCo").css("display","block")</script><?php
        }
    } elseif ($_GET['action'] == "product") {
        $page = new Controller;
        $page->productPage();
    } elseif ($_GET['action'] == "command") {

        if (isset( $_SESSION['pseudo'] )) {
            if (  $_POST['nameCmd']==$_SESSION['pseudo'] && !empty($_POST["nameCmd"]) && !empty($_POST["nameCmd"])
            && !empty($_POST["telCmd"])&& !empty($_POST["mailCmd"])&& !empty($_POST["street"])&& !empty($_POST["postal"])
            && !empty($_POST["city"])&& !empty($_POST["validCmd"])&& !empty($_POST["gombo"])
            ||!empty($_POST["piment"])||!empty($_POST["ananas"])||!empty($_POST["aubergine"])||!empty($_POST["mangue"])) {
                $page = new Controller;
                $page->addNewCommand();
                $page->myCmd();
            }else{
             require("view/error.php");
             ?><script>$("#coForCmd").css("display","block")</script><?php
            }
        
        
        
        }else{
             require("view/error.php");
            ?><script>$("#coForCmd").css("display","block")</script><?php
        }
      

    }elseif ($_GET['action'] == "errorInscription") {
        $page = new Controller;
        $page->InscriptionPage();
    }elseif ($_GET['action'] == "errorConnexion") {
        $page = new Controller;
        $page->connexionPage();
    }elseif ($_GET['action'] == "errorCmd") {
        require("view/connexion.php");
    }elseif ($_GET['action'] == "deconnexion"){
        $page = new Controller;
        $page->deconnexionPage();
    }elseif ($_GET['action'] == "listCmd"){
        $page = new Controller;
        $page->fullListCmd();
        if ($_SESSION["pseudo"]==="sow" && $_SESSION["password"]==="admin") {
            ?><script>$("#menuAdmin").css("display","block")</script>  <?php
           
        }
    }elseif ($_GET['action'] == "listMember"){
        $page = new Controller;
        $page->theListCst();
        if ($_SESSION["pseudo"]==="sow" && $_SESSION["password"]==="admin") {
            ?><script>$("#menuAdmin").css("display","block")</script>  <?php
           
        }
    }elseif ($_GET['action'] == "deleteCmd"){
        $page = new Controller;
        $page->deleteMyCmd();
        if ($_SESSION["pseudo"]==="sow" && $_SESSION["password"]==="admin") {
            ?><script>$("#menuAdmin").css("display","block")</script>  <?php
           
        }
    }
} else {
    $page = new Controller;
    $page->introPage();
}
