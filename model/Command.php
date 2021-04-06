<?php


require_once("model/DataBase.php");



class Command extends Database
{

    public function addCommand()
    {
        $dbAddCommand = $this->dbConnect();
        $reqCommand = $dbAddCommand->prepare('INSERT INTO command(nameCustomer,telCustomer,mailCustomer,nameStreet,postalCode,city,country,gombo,piment,ananas,aubergine,mangue,détail,dateCommand) VALUES(:val1,:val2,:val3,:val4,:val5,:val6,:val7,:val8,:val9,:val10,:val11,:val12,:val13,NOW())');
      
        $reqCommand->execute(array(
            'val1' => $_POST['nameCmd'],
            'val2' => $_POST['telCmd'],
            'val3' => $_POST['mailCmd'],
            'val4' => $_POST['street'],
            'val5' => $_POST['postal'],
            'val6' => $_POST['city'],
            'val7' => $_POST['country'],
            'val8' => $_POST['gombo'],
            'val9' => $_POST['piment'],
            'val10' => $_POST['ananas'],
            'val11' => $_POST['aubergine'],
            'val12' => $_POST['mangue'],
            'val13' => $_POST['textCmd']
        ));
    }



    public function showMyCommand($name){
        $dbShowCmd = $this->dbConnect();
        $reqCmd =  $dbShowCmd->prepare('SELECT 	
        idCommand,
        nameCustomer,
        telCustomer,
       
        nameStreet,
        postalCode,
        city,
        country,
       
        détail,
        dateCommand
         FROM command WHERE nameCustomer = ?');
        $reqCmd->execute(array($name));
        $infoCmd =  $reqCmd->fetch();
        return $infoCmd;
    
    }


    public function theListCmd(){
        $dbCmd = $this->dbConnect();
        $reqListCmd =  $dbCmd->query('SELECT * FROM command ' );
        return $reqListCmd;
    }



    public function deleteCmd($theCmd){
        $dbTheCmd = $this->dbConnect();
        $reqTheCmd =  $dbTheCmd->prepare('DELETE FROM command WHERE idCommand = ?');
        $reqTheCmd->execute(array($theCmd));
    }
}
