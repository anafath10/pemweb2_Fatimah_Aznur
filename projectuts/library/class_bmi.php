<?php
class Bmi{
    public $Berat_badan,
           $Tinggi_badan;

    function __construct($Berat_badan, $Tinggi_badan){
        $this->Berat_badan=$Berat_badan;
        $this->Tinggi_badan=$Tinggi_badan;
    }
    function nilaiBmi(){
        $nilaiBmi=$this->berat/(pow($this->tinggi/100, 2));
        return number_format($nilaiBmi, 1);
    }

    function statusBmi(){
        $nilaiBmi=$this->nilaiBmi();
        $statusBmi;
        
        if ($nilaiBmi >= 30.0){
            $statusBmi="Kegemukan (Obesitas)";
        }else if ($nilaiBmi > 25.0 && $nilaiBmi < 29.9) {
            $statusBmi="Kelebihan berat badan";
        }else if ($nilaiBmi > 18.5 && $nilaiBmi < 25.0){
            $statusBmi="Normal (Ideal)";
        }else if($nilaiBmi < 18.5){
            $statusBmi="Kekurangan berat badan";
        }
        return $statusBmi;
    }
}

?>