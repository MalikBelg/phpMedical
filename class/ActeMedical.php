<?php

    abstract class ActeMedical {

        protected $nomPatient;
        protected $numSecu;
        protected $codeMutuelle;
        protected $tauxRemboursement;
        protected $tarif;


        function __construct($nomPatient, $numSecu, $codeMutuelle, $tauxRemboursement, $tarif){
            $this->nomPatient = $nomPatient;
            $this->numSecu = $numSecu;
            $this->codeMutuelle = $codeMutuelle;
            $this->tauxRemboursement = $tauxRemboursement;
            $this->tarif = $tarif;
        }
    
        
        function setNomPatient(string $patient){
            $this->nomPatient = $patient;
        }

        function getNomPatient() : string {
            return $this->nomPatient;
        }
    



        function setNumSecu(int $numero){
            $this->numSecu = $numero;
        }

        function getNumSecu() : ?int {
            return $this->numSecu;
        }



        function setCodeMutuelle(int $code){
            $this->codeMutuelle = $code;
        }

        function getCodeMutuelle() : ?int {
            return $this->codeMutuelle;
        }



        function setTauxRemboursement(int $taux){
            $this->tauxRemboursement = $taux;
        }

        function getTauxRemboursement() : ?int {
            return $this->tauxRemboursement;
        }



        function setTarif(int $prix){
            $this->tarif = $prix;
        }

        function getTarif() : ?int {
            return $this->tarif;
        }



        function prescrire(){
            echo $this->nomPatient . "prescrit"; 
        }

        
        function facturer(){
            $this->tarif *= $this->tauxRemboursement / 100;
            
        }


























}








?>