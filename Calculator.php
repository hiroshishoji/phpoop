<?php

class Calculate{
    public $Num;
    public $Cal;
    public $Num2;

    public function setValue($num,$cal,$num2){
        $this->Num = $num;
        $this->Cal = $cal;
        $this->Num2 = $num2;
    }

    public function getNum(){
        return $this->Num;
    }
    public function getCal(){
        return $this->Cal;
    }
    public function getNum2(){
        return $this->Num2;
    }
    public function getTotal(){
        if($this->Cal == "+" ){
            return $this->Num + $this->Num2;
        }
        elseif($this->Cal == "-"){
            return $this->Num - $this->Num2;
        }
        elseif($this->Cal == "*"){
            return $this->Num * $this->Num2;
        }
        else{
            return $this->Num / $this->Num2;
        }
    }
}


?>