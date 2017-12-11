<?php

namespace JEU\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoudation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use JEU\PlatformBundle\Entity\Joueur;
use JEU\PlatformBundle\Entity\Carte;
use JEU\PlatformBundle\Entity\Defausse;
use JEU\PlatformBundle\Entity\Manche;
use JEU\PlatformBundle\Entity\Partie;
use JEU\PlatformBundle\Entity\Pioche;
use JEU\PlatformBundle\Form\JoueurType;

class AdvertController extends Controller{
   public function indexAction(Request $request)
                {
                   $product= new Joueur();
                   $form=$this->createForm(JoueurType::class,$product);
                   $form->handleRequest($request);
                   if($form->isSubmitted() && $form->isValid()){
                       $em=$this->getDoctrine()->getManager();
                        $repository=$em->getRepository('JEUPlatformBundle:Joueur');
                        $product2=$repository->find($product);
            
                        if($product2 != $product){
                            throw $this->createNotFoundException("Aucun membre de cet id et/ou de ce mot de passe");
                         }else{
                        /*     $var=true;
                        $product.setConnecte($var);
                        $repository->persist($product);
                        $repository->flush();
                        $session=$this->getRequest()->getSession();
                        $session->set('id',$product.getId());*/
                        
                             $product2->setConnecte(true);
                             $em->persist($product2);
                             $em->flush();
                        $id=$product->getId();
                        return $this->render('JEUPlatformBundle:Advert:edit.html.twig');
                        // affiche id utlisateur
                        //return $this->render('JEUPlatformBundle:Advert:edit.html.twig',array('id'=>$id));
                         }
                    }
                   $formView=$form->createView();
                   return $this->render('JEUPlatformBundle:Advert:add.html.twig',array('form'=>$formView));
                    
                }
                
   public function viewAction()
                {
                        /*$repository=$this->getDoctrine()->getRepository('JEUPlatformBundle:Joueur');
                        $QueryBuilder=$this->_em->createQueryBuilder()->select('id')->from('JEUPlatformBundle','id')->where('Joueur.connecte==true');
                        $joueurs=$jou->getQuery()->getResult();*/
                        return $this->render('JEUPlatformBundle:Advert:view.html.twig');
                 
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
                             $id=$product->getId();
                                 
                            return $this->render('JEUPlatformBundle:Advert:edit.html.twig');
                            // affiche id utlisateur
                        //return $this->render('JEUPlatformBundle:Advert:edit.html.twig',array('id'=>$id));
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
            $product->setConnecte(true);
            $em->persist($product);
            $em->flush();
            $id=$product->getId();
            return $this->render('JEUPlatformBundle:Advert:edit.html.twig');
            //affiche id utilisateur
            //return $this->render('JEUPlatformBundle:Advert:edit.html.twig',array('id'=>$id));
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
    
    public function editAction()
  {
      return $this->render('JEUPlatformBundle:Advert:edit.html.twig');
      //pour envoyer l'id du membre qui vient de se conencter
      //return $this->render('JEUPlatformBundle:Advert:edit.html.twig',$id);
  }
    
  
  public function connexionAction(Request $request, Joueur $joueur){
        
        
    }
  
  public function deconnexionAction(){
      $repository=$this->getDoctrine()->getRepository('JEUPlatformBundle:Joueur');
      $product2=$repository->findByConnecte(true);
      $product2.setConnecte(false);
      indexAction();
  }
  
  
  // Fonction qui gère le jeu
  
  public function initialisationmancheAction(){
      $em=$this->getDoctrine()->getManager();
      $joueur1=$em->getRepository('JEUPlatformBundle:Joueur')->find(1);
      
      
      $joueur2=$em->getRepository('JEUPlatformBundle:Joueur')->find(2);
      
     
      
      
      $pioche=new Pioche();
      $em->persist($pioche);
      
      $em->flush();
      
      $partie=new Partie();
      $manche=new Manche($pioche->getId());
      //$manche->setPioche($pioche);
      //$manche->setListeJoueur($joueur1);
      //$manche->setListeJoueur($joueur2);
      
      $partie=new Partie();
      $manche->setNoPartie($partie->getId());
      
      $em->persist($manche);
      $em->flush(); 
      
      
      $partie->setJoueur($joueur1);
      $partie->setJoueur($joueur2);
      $partie->setNomPartie('Partie1');
      
      
      $em->persist($partie);
      
      
      $em->flush();
      
      $joueur1->setCartes($pioche->getCarteNum(4));
      $joueur2->setCartes($pioche->getCarteNum(5));
      
      $em->persist($joueur1);
      $em->persist($joueur2);
      
      $em->flush();
      
      $idjoueurs=array();
      $idcartes=array();
      $piocher=array();
      
      array_push($idjoueurs, $joueur1->getId());
      array_push($idjoueurs, $joueur2->getId());
      for($k=0;$k<16;$k++){
          $a=$pioche->getCarteNum($k);
          $c=new Carte($a);
          array_push($idcartes, $c->getValeur());
          array_push($piocher,$c->getUrl());
      }
      $a1=$pioche->getCarteNum(0);
      $a2=$pioche->getCarteNum(1);
      $a3=$pioche->getCarteNum(2);
      $c1=new Carte($a1);
      $c2=new Carte($a2);
      $c3=new Carte($a3);

      $content=$this->render('JEUPlatformBundle:Advert:view.html.twig',array('first'=>$c1->getUrl(),'second'=>$c2->getUrl(),'third'=>$c3->getUrl(),'piocher'=>$piocher,'id'=>$idcartes,'id_partie'=>$partie->getId(),'id_manche'=>$manche->getId()));
      return new Response($content);
  }
  
}
?>
