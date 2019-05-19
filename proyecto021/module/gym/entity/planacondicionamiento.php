<?php


namespace Module\Gym\Entity;

class PlanAcondicionamiento {
    private $idPlanAcondicionamiento;
    private $nombrePlan;
    private $tipoPlan;
    private $biotipo;
    
    public function __construct() {
        
    }
    public function getIdPlanAcondicionamiento() {
        return $this->idPlanAcondicionamiento;
    }

    public function getNombrePlan() {
        return $this->nombrePlan;
    }

    public function getTipoPlan() {
        return $this->tipoPlan;
    }

    public function getBiotipo() {
        return $this->biotipo;
    }

    public function setIdPlanAcondicionamiento($idPlanAcondicionamiento) {
        $this->idPlanAcondicionamiento = $idPlanAcondicionamiento;
    }

    public function setNombrePlan($nombrePlan) {
        $this->nombrePlan = $nombrePlan;
    }

    public function setTipoPlan($tipoPlan) {
        $this->tipoPlan = $tipoPlan;
    }

    public function setBiotipo($biotipo) {
        $this->biotipo = $biotipo;
    }



    
}
