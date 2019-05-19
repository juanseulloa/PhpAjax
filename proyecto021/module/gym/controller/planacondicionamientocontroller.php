<?php



namespace Module\Gym\Controller;
use Module\Gym\Repository\PlanAcondicionamientoRepository;
use Module\Gym\Entity\PlanAcondicionamiento;
class PlanAcondicionamientoController {
   public function getAllPlanAcondicionamiento() {
        $objRepository = new PlanAcondicionamientoRepository();
        return $objRepository->getAll();
    }
    public function addPlanAcondicionamiento(PlanAcondicionamiento $plan){
        $objRepository=new PlanAcondicionamientoRepository();
        return $objRepository->add($plan);
    }
}
