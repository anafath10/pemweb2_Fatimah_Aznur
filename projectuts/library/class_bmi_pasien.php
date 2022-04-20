<?php
class bmi_pasien{
    Public $id,
           $tgl_pemeriksaan,
           $pasien,
           $bmi;

    function __construct($id, $tgl_pemeriksaan, $pasien, $bmi){
        $this->id=$id;
        $this->tgl_pemeriksaan=$tgl_pemeriksaan;
        $this->pasien=$pasien;
        $this->bmi=$bmi;

    }
}


?>