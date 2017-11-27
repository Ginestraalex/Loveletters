<?php

namespace JEU\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoudation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;;

class AdvertController extends Controller{
   public function indexAction()
                {
                    $listAdverts = array(
      array(
        'title'   => 'Diablox9',
        'id'      => 1,
        'author'  => 'Alexandre',
        'content' => '…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Popeye',
        'id'      => 2,
        'author'  => 'Hugo',
        'content' => '...',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Roi des Gunners',
        'id'      => 3,
        'author'  => 'Mathieu',
        'content' => '…',
        'date'    => new \Datetime())
                        );
                    return $this->render('JEUPlatformBundle:Advert:add.html.twig', array(
      'listAdverts' => $listAdverts,
    ));
                    
                }
   public function viewAction($id)
                {
                    $advert = array(
      'title'   => 'Joueur',
      'id'      => $id,
      'author'  => 'Alexandre',
      'content' => '…',
      'date'    => new \Datetime()
    );
    return $this->render('JEUPlatformBundle:Advert:view.html.twig', array(
      'advert' => $advert
    ));
                    #$tag= $request->query->get('tag');
                    #return new Response("Affichage de l'element d'id".$id."avec le tag :".$tag);
                } 
   public function addAction(Request $request)
                {
       

                //Création de l'entité
                $advert = new \JEU\PlatformBundle\Entity\Advert();
                $advert->setId(12343);
                $advert->setPassword('alexlove');
                $advert->setScore('0');
                // On peut ne pas définir ni la date ni la publication,
                // car ces attributs sont définis automatiquement dans le constructeur

                // On récupère lentity manager
                $em = $this->getDoctrine()->getManager();

                // Étape 1 : On « persiste » l'entité
                $em->persist($advert);

                // Étape 2 : On « flush » tout ce qui a été persisté avant
                $em->flush();

       
                    if($request->isMethod('POST')){
                    $session = $request->getSession();
                    $session ->getFlashBag()->add('info','Annonce bien enregistré');
                    $session->getFlashBag()->add('info','Oui oui, elle est bien enregistrée');
                    return $this->redirectToRoute('jeu_platform_view',array('id'=>5));
                    }
                    return $this->render('JEUPlatformBundle:Advert:add.html.twig');
                }
                
    public function signinAction()
    {

        return $this->render('JEUPlatformBundle:Advert:form.html.twig');
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
    
    public function editAction($id, Request $request)
  {
    if ($request->isMethod('POST')) {
      $request->getSession()->getFlashBag()->add('notice', 'Joueur bien modifiée.');
      return $this->redirectToRoute('jeu_platform_view', array('id' => 5));
    }
    $advert = array(
      'title'   => 'Joueur',
      'id'      => $id,
      'author'  => 'Alexandre',
      'content' => '…',
      'date'    => new \Datetime()
    );
    return $this->render('JEUPlatformBundle:Advert:edit.html.twig', array(
      'advert' => $advert
    ));
  }
  
  public function connexionAction(){
      
  }
  
  public function deconnexionAction(){
      
  }
  
}
?>
