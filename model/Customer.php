<?php

require_once("model/DataBase.php");


class Customer extends Database{

    public function addCustomer(){
        $dbAddUser = $this->dbConnect();
        $reqAddUser = $dbAddUser->prepare('INSERT INTO customer(nameCustomer,mdpCustomer,mailCustomer) VALUES(:val1,:val2,:val4)');
        $reqAddUser->execute(array(
            'val1'=>$_POST['nom'],
            'val2'=>password_hash($_POST['mdp'], PASSWORD_DEFAULT),
            'val4'=>$_POST['email']
        ));
    }





    public function checkCustomer($pseudo){
        $dbCheckUser =  $this->dbConnect();
        $reqCheckUser = $dbCheckUser->prepare('SELECT nameCustomer From customer WHERE nameCustomer = ?');
        $reqCheckUser->execute(array($pseudo));
        $count = $reqCheckUser->rowCount();
        if ($count > 0) {
          return true;
        }else{
            return false;
        }
    }

    public function checkPassword($pseudo){
        $db = $this->dbConnect();
        $check = $db->prepare('SELECT idCustomer, nameCustomer, mdpCustomer, mailCustomer From customer WHERE nameCustomer = ?');
        $check->execute(array($pseudo));
        $infoUser = $check->fetch();
        return $infoUser;
    }



    public function theListCst(){
        $dbCst = $this->dbConnect();
        $reqListCst =  $dbCst->query('SELECT * FROM customer ' );
        return $reqListCst;
    }



}