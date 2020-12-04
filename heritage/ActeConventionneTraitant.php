<?php

    class ActeConventionneTraitant extends ActeMedical{

        function __construct($nomPatient, $numSecu, $codeMutuelle, $tauxRemboursement, $tarif){
            parent:: __construct($nomPatient, $numSecu, $codeMutuelle, $tauxRemboursement, $tarif);
        }

        function prescrire(){
            echo $this->nomPatient . "prescrit"; 
        }


        function facturer(){
            $this->tarif = $this->tarif * $this->tauxRemboursement / 100;
        }
    }

?>