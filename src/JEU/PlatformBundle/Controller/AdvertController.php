<?php

namespace JEU\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoudation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use JEU\PlatformBundle\Entity\Joueur;

class AdvertController extends Controller{
   public function indexAction()
                {
                    return $this->render('JEUPlatformBundle:Advert:add.html.twig');
                    
                }
   public function viewAction()
                {

    return $this->render('JEUPlatformBundle:Advert:view.html.twig');
                    #$tag= $request->query->get('tag');
                    #return new Response("Affichage de l'element d'id".$id."avec le tag :".$tag);
                } 
   public function addAction(Request $request)
                {
       

   /*                 // Création de l'entité
    $advert = new \JEU\PlatformBundle\Entity\Joueur;
    $advert->setId(10);
    $advert->setPassword('Alexandre');
    $advert->setScore(0);
    // On peut ne pas définir ni la date ni la publication,
    // car ces attributs sont définis automatiquement dans le constructeur

    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // Étape 1 : On « persiste » l'entité
    $em->persist($advert);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();

    // Reste de la méthode qu'on avait déjà écrit
    if ($request->isMethod('POST')) {
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
      return $this->redirect($this->generateUrl('jeu_platform_view', array('id' => $advert->getId())));
    }*/
    
    if ($request->isMethod('POST')) {  
    $verif1=$this->getDoctrine()->getRepository("JEUPlatformBundle:Entity:Joueur")->find($_POST['pseudo']);
    $verif2=$this->getDoctrine()->getRepository("JEUPlatformBundle:Entity:Joueur")->findOneByPassword($_POST['password']);
    $verif3=$verif2->getId();
    if($verif1!=$verif3){
        throw $this->createNotFoundException("Aucun membre de cet id");
    }else{
        return $this->render('JEUPlatformBundle:Advert:view.html.twig');
    }}else{
        return $this->render('JEUPlatformBundle:Advert:add.html.twig');
    }
    
  }

       
     
                
                
    public function signinAction(Request $request)
    {
       // if ($request->isMethod('POST')) {
   // On récupère le repository
    /*$repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('JEUPlatformBundle:Joueur')
    ;

    // On récupère l'entité correspondante à l'id $id login
    $advert = $repository->find($_POST['login']);

    // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
    // ou null si l'id $id  n'existe pas, d'où ce if :
    if ( $advert == null) {
     $ne = new \JEU\PlatformBundle\Entity\Joueur;
    $ne->setId($_POST['login']);
    $ne->setPassword($_POST['password']);
    $ne->setScore(0);
   
    // On peut ne pas définir ni la date ni la publication,
    // car ces attributs sont définis automatiquement dans le constructeur

    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // Étape 1 : On « persiste » l'entité
    $em->persist($ne);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();
    return $this->render('JEUPlatformBundle:Advert:view.html.twig');
        }else{
        */
        return $this->render('JEUPlatformBundle:Advert:form.html.twig');
        //}
    
          
      
        
        
        
        /*
         // on teste si le visiteur a soumis le formulaire
    if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
       // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
       if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['password']) && !empty($_POST['password'])) && (isset($_POST['password_2']) && !empty($_POST['password_2']))) {
          // on teste les deux mots de passe
          if ($_POST['password'] != $_POST['password_2']) {
             $erreur = 'Les 2 mots de passe sont différents.';
          }
          else {
             $base = mysql_connect ('localhost','8889','root','root','/Applications/MAMP/tmp/mysql/mysql.sock');
             mysql_select_db ('test', $base);
              
             // on recherche si ce login est déjà utilisé par un autre membre
             $sql = 'SELECT count(*) FROM advert WHERE login="'.mysql_escape_string($_POST['login']).'"';
             $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
             $data = mysql_fetch_array($req);
      
             if ($data[0] == 0) {
                $advert = new \JEU\PlatformBundle\Entity\Joueur;
    $advert->setId('login');
    $advert->setPassword('password');
   
    // On peut ne pas définir ni la date ni la publication,
    // car ces attributs sont définis automatiquement dans le constructeur

    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // Étape 1 : On « persiste » l'entité
    $em->persist($advert);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();
      
                session_start();
                $_SESSION['login'] = $_POST['login'];
                return $this->redirectToRoute('jeu_platform_view');
                exit();
             }
             else {
                $erreur = 'Un membre possède déjà ce login.';
             }
          }
       }
       else {
          $erreur = 'Au moins un des champs est vide.';
       } 
    } 
        return $this->render('JEUPlatformBundle:Advert:form.html.twig');*/
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
  
  public function connexionAction(){
      //$request=$this->get('request');
      //($request->getMethod()=='POST'){
         // $id->$request->get('pseudo');
          // $pass->$request->get('password');
      
      /*
     if($request->isMethod('POST')){*/
      $id=filter_input(INPUT_POST, 'pseudo');
      $pass=filter_input(INPUT_POST, 'password');
    $verif1=$this->getDoctrine()->getRepository("JEUPlatformBundle:Entity:Joueur")->find($id);
    if($verif1){
        throw $this->createNotFoundException("Cet id existe déjà");
    }else{
    $advert = new \JEU\PlatformBundle\Entity\Joueur;
    $advert->setId($id);
    $advert->setPassword($pass);
    $advert->setScore(0);
    // On peut ne pas définir ni la date ni la publication,
    // car ces attributs sont définis automatiquement dans le constructeur

    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // Étape 1 : On « persiste » l'entité
    $em->persist($advert);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();
    return $this->render('JEUPlatformBundle:Advert:view.html.twig');
    }
     /*}else{
         return $this->render('JEUPlatformBundle:Advert:form.html.twig');
     }*/
  }
  
  public function deconnexionAction(){
      
  }
  
}
?>
