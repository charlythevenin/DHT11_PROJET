<?php
namespace Dao;
include 'daoBase.php';
use daoBase;

class daoMeasure extends daoBase {
        
        
     public function __construct($config) {
            parent::__construct($config);
            
        }
        
        public function insertTemp($mesure) {
            
            $result;
            
            $query = $this->bdd->prepare("INSERT INTO relevees (temperature, humidite) VALUES (:temperature, :humidite)");
            
            $query->bindParam(":temperature", $mesure->temperature);
            $query->bindParam(":humidite", $mesure->humidite);
            
            $query->execute();
            
            $id = $this->bdd->lastInsertId();
            
            $mesure->id = $id;
            
            return $id;
            
        }
        
        public function deleteMesure($id) {
            
            $query = $this->bdd->prepare("DELETE FROM relevees WHERE id = :id");
            
            $query->bindParam(":id", $id);
            
            $query->execute();
            
        }
        
        public function updateMesure($updateMesure) {
            
            $result;
            
            $query = $this->bdd->prepare("UPDATE relevees SET temperature = :temperature, humidite = :humidite WHERE id = :id");
            
            $query->bindParam(":temperature", $updateMesure->temperature);
            
            $query->bindParam(":humidite", $updateMesure->humidite);
            
            $query->bindParam(":id", $updateMesure->id);
            
 
            $query->execute();
        }
    }
?>