<?php

namespace App\Controller;

use App\Entity\Proveedores;
use App\Form\EditarProveedorType;
use App\Form\ProveedoresType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdministratorController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('administrator/index.html.twig', [
            'controller_name' => 'AdministratorController'
        ]);
    }
    
    /**
     *  @Route("/administrator", name="administrator")
     */  
    public function administrator()
    {
        $em = $this->getDoctrine()->getManager();
        $proveedores = $em->getRepository(Proveedores::class)->findAll();
        return $this->render('administrator/administrator.html.twig', array(
            'listaProveedores'=>$proveedores,
        ));
      }

    /**
     *  @Route("/agregar", name="agregar")
     */
    public function agregar(Request $request)
    {
        $proveedor = new Proveedores();
        $form = $this->createForm(ProveedoresType::class, $proveedor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $proveedor = $form->getData();
            $proveedor->setFechaAlta(new \DateTimeImmutable());
            $proveedor->setUltimaModificacion(new \DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->persist($proveedor);
            $em->flush();

            return $this->redirectToRoute('administrator');
        }

        return $this->render('administrator/agregar.html.twig', [
            'agregar_proveedor' => $form->createView(),
        ]);
    }


    /**
     *  @Route("/editar/{idProveedor}", name="editar")
     */
    public function editar($idProveedor, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $proveedor = $em->getRepository(Proveedores::class)->find($idProveedor);
        $form = $this->createForm(EditarProveedorType::class, $proveedor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $proveedor = $form->getData();
            $proveedor->setUltimaModificacion(new \DateTime());

            $em->persist($proveedor);
            $em->flush();

            return $this->redirectToRoute('administrator');
        }
        return $this->render('administrator/editar.html.twig', array(
            'editar_proveedor' => $form->createView(),
        ));
    }


    /**
     *  @Route("/eliminar/{idProveedor}", name="eliminar")
     */
    public function eliminar($idProveedor)
    {
        $em = $this->getDoctrine()->getManager();
        $proveedor = $em->getRepository(Proveedores::class)->find($idProveedor);

        if (!$proveedor) {
            throw new \Error('Error con el identificador del proveedor');
        }

        try {
            $em->remove($proveedor);
            $em->flush();
        } catch (\Exception $error) {
            throw new \Error('Error al eliminar el provedor');
        }

//        return new Response('Registro eliminado correctamente');

        return $this->redirectToRoute('administrator');
    }
}
