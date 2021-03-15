<?php 

trait GetFamglia {
    public $grandezzaFamiglia;

    public function setFamiglia($_componenti_fam){
        if($_componenti_fam <= 2) {
            $this->grandezzaFamiglia = "famiglia ristretta";
        } else {
            $this->grandezzaFamiglia = "famiglia comune";
        }
    }

    public function getFamiglia(){
        return $this->grandezzaFamiglia;
    }
}

?>