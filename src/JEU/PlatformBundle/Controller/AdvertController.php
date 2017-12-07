<?php

namespace JEU\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoudation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use JEU\PlatformBundle\Entity\Joueur;
use JEU\PlatformBundle\Form\JoueurType;

class AdvertController extends Controller{
   public function indexAction(Request $request)
                {
                   $product= new Joueur();
                   $form=$this->createForm(JoueurType::class,$product);
                   $form->handleRequest($request);
                   if($form->isSubmitted() && $form->isValid()){
                        $repository=$this->getDoctrine()->getRepository('JEUPlatformBundle:Joueur');
                        $product2=$repository->find($product);
            
                        if($product2 != $product){
                            throw $this->createNotFoundException("Aucun membre de cet id et/ou de ce mot de passe");
                         }else{
                        return $this->render('JEUPlatformBundle:Advert:edit.html.twig');
                         }
                    }
                   $formView=$form->createView();
                   return $this->render('JEUPlatformBundle:Advert:add.html.twig',array('form'=>$formView));
                    
                }
                
   public function viewAction()
                {

    return $this->render('JEUPlatformBundle:Advert:view.html.twig');
                    #$tag= $request->query->get('tag');
                    #return new Response("Affichage de l'element d'id".$id."avec le tag :".$tag);
                } 
                
   public function addAction(Request $request)
 {
                   $product= new Joueur();
                   $form=$this->createForm(JoueurType::class,$product);
                   $form->handleRequest($request);
                   if($form->isSubmitted() && $form->isValid()){
                        $repository=$this->getDoctrine()->getRepository('JEUPlatformBundle:Joueur');
                        $product2=$repository->find($product);
            
                        if($product2 != $product){
                            throw $this->createNotFoundException("Aucun membre de cet id et/ou de ce mot de passe");
                         }else{
                        return $this->render('JEUPlatformBundle:Advert:edit.html.twig');
                         }
                    }
                   $formView=$form->createView();
                   return $this->render('JEUPlatformBundle:Advert:add.html.twig',array('form'=>$formView));
               
  }

       
     
                
                
    public function signinAction(Request $request)
    {
        $product= new Joueur();
        $form=$this->createForm(JoueurType::class,$product);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
            return $this->render('JEUPlatformBundle:Advert:edit.html.twig');
        }
        $formView=$form->createView();
        return $this->render('JEUPlatformBundle:Advert:form.html.twig',array('form'=>$formView));
    }
  
    public function menuAction()
                {
                    $listAdverts= array(array('id'=>2,'title'=>'Joueur 1'),array('id'=>5,'title'=>'Joueur 2'),array('id'=>9,'title'=>'Joueur 3'));
                    return $this->render('JEUPlatformBundle:Advert:menu.html.twig',array('listAdverts'=>$listAdverts));
                }
            
    public function deleteAction($id)
    {
    return $this->render('OCPlatformBundle:Advert:delete.html.twig');
    }
    
    public function editAction(Request $request)
  {
    if ($request->isMethod('POST')) {
      $request->getSession()->getFlashBag()->add('notice', 'Joueur bien modifiée.');
      return $this->redirectToRoute('jeu_platform_view', array('id' => 5));
    }
    
    return $this->render('JEUPlatformBundle:Advert:edit.html.twig');
  }
  
  public function connexionAction(Request $request, Joueur $joueur){
        
        
    }
  
  public function deconnexionAction(){
      
  }
  
}
?>
