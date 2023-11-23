<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdministratorController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {   
        $Num1 = random_int(1, 10);
        $Num2 = random_int(1,10);
        $email = 'jvguevara84@gmail.com';
        $Names = "CarLos, JAVI, SOfia, ESTEVE, GabrieL";
        $NamesArray = explode(', ',$Names);
        return $this->render('administrator/index.html.twig', [
            'controller_name' => 'AdministratorController',
            'CorreoElectronicoRecibidoDeControllador'=>$email,
            'Num1'=>$Num1,
            'Num2'=>$Num2,
            'Names'=>$Names,
            'NamesArray'=>$NamesArray,
        ]);
    }
    
    /**
     *  @Route("/administrator", name="administrator")
     */  
    public function administrator() {
        return $this->render('administrator/administrator.html.twig');
      }
}
