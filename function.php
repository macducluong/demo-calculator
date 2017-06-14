
<?php
    require 'calculator.php';
    $return=null;
    $firstname=0;
    $secondname=0;
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $firstname=$_POST['firstname'];
        $secondname=$_POST['secondname'];
        $operator=$_POST['operator'];
        $calculator=new calculator();
        switch ($operator){
            case '+':
                $result=$calculator->cong($firstname,$secondname);
                break;
            case '-':
                $result=$calculator->tru($firstname,$secondname);
                break;
            case '*':
                $result=$calculator->nhan($firstname,$secondname);
                break;
            case '/':
                $result=$calculator->chia($firstname,$secondname);
                break;
        }
        echo $result;
    }
?>

