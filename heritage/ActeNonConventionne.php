<?php

    class ActeNonConventionne extends ActeMedical{

        function __construct($nomPatient, $numSecu, $codeMutuelle, $tauxRemboursement, $tarif){
            parent:: __construct($nomPatient, $numSecu, $codeMutuelle, $tauxRemboursement, $tarif);
        }

        function prescrire(){
            echo $this->nomPatient . "prescrit"; 
        }



    }

?>