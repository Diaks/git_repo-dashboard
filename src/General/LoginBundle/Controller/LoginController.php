<?php

namespace General\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;
use DBORM\CSIBundle\Entity\Tbluser;
use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Isbn;
use DBORM\CSIBundle\Entity\Tblsubsector;
use Symfony\Component\Form\Extension\Core\ChoiceList\SimpleChoiceList;

class LoginController extends Controller
{
	private $session, $em, $user, $CSI_connector, $Tblsubsector;
	
	public function instantiate(){
		
		$this->session = $this->container->get('session');
		$this->em = $this->getDoctrine()->getManager();
    	$this->CSI_connector = $this->getDoctrine()->getConnection('CSI_DEV');
		$this->user = new Tbluser($this->CSI_connector);
		$this->Tblsubsector = new Tblsubsector($this->CSI_connector);
		switch ($this->session->get('type_profil')){
			case 1:
				return $this->redirect($this->generateUrl('rmcargo_dashboard_fa_homepage'));
				break;
						
			case 2:
				return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_homepage'));
				break;
				
			case 10:
				//var_dump($this->generateUrl('price_dashboard_admin_homepage'));
				//return $this->redirect($this->generateUrl('price_dashboard_admin_homepage'));
				break;
			case 11:
				return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_homepage'));
				break;
		}
	}
	
	public function indexAction(Request $request)
  	{
  		$logged = $this->instantiate();
  		//echo 'debut';
  		if($logged){
  			return $logged;
  		}
  		
  		$form = $this->createFormBuilder($this->user)
  		->add('Matricule', 'text')
  		->add('Password', 'password')
  		->add('Login', 'submit')
  		->getForm();
  		
  		$form->handleRequest($request);
  		
  		$form->submit($request);
  		$erreurIdentifiant = false;
  		if ($form->isValid()) {
  			$matricule = $form["Matricule"]->getData();
  			$password = $form["Password"]->getData();
  			//echo password;
  			$user = $this->user->getUser($matricule, $this->user->encodePassword($password));
  			
  			if(isset($user)){
  				if(isset($user["PK_id"])){
  							
  					
  					$this->session->set('matricule', $user["PK_id"]);
  					$this->session->set('firstname', $user["FirstName"]);
  					$this->session->set('lastname', $user["LastName"]);
  					$this->session->set('departement', $user["Departement"]);
  					$this->session->set('userstartdate', $user["UserStartDate"]);
  					$this->session->set('nuserenddate', $user["UserEndDate"]);
  					$this->session->set('sector', $user["FK_Sector_id"]);
  					$this->session->set('type_profil', $user["FK_TypeProfil_id"]);
  					$this->session->set('subsect', "");
  					switch ($user["FK_TypeProfil_id"]){
  						case 1:
  							$this->session->set('type_profil', 0);
  							return $this->redirect($this->generateUrl('general_subsect'));
  							break;
  							
  						case 2:
  							return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_homepage'));
  							break;
  							
  						case 10:
  							//var_dump($this->generateUrl('price_dashboard_admin_homepage'));
  							return $this->redirect($this->generateUrl('price_dashboard_admin_homepage'));
  							break;
  						case 11:
  							return $this->redirect($this->generateUrl('rmcargo_dashboard_admin_homepage'));
  							break;
  						default:
  							return $this->redirect($this->generateUrl('general_login_homepage'));
  							break;
  					}
  				}
  				else{
  					
  					$erreurIdentifiant = true;
  				}
  			}
  			else{
  				echo "WRONG login";
  				return $this->redirect($this->generateUrl('general_login_homepage'));
  			}
  		}
  		
  		return $this->render('GeneralLoginBundle:Login:index.html.twig', array(
  				 'form' => $form->createView()
  				,'erreurIdentifiant' => $erreurIdentifiant
  		));
  	}
  	public function subsectSelectAction(Request $request)
  	{
  		$logged = $this->instantiate();
  		
  		
  		foreach ($this->Tblsubsector->getAllSubsec() as $subsect){
  			$subsect_array[$subsect["PK_SubSector_code"]] = $subsect["PK_SubSector_code"];
  		}
  		$form = $this->createFormBuilder($this->Tblsubsector)
  		->add('SubSector', 'choice', array(
    	'choices' => $subsect_array))
  		->add('Login', 'submit')
  		->getForm();
  		
  		$form->handleRequest($request);
  		$form->submit($request);
  		
  		if ($form->isValid()) {
  			$subsect = $form["SubSector"]->getData();
  			$this->session->set('subsect', $form["SubSector"]->getData());
  			$this->session->set('sector', 'AFC');
  			$this->session->set('type_profil', 1);
  			return $this->redirect($this->generateUrl('rmcargo_dashboard_fa_homepage'));
  		}
  		
  		return $this->render('GeneralLoginBundle:Login:subsect.html.twig', array(
  				'form' => $form->createView(),
  		));
  	}
  	public function logoutAction()
  	{
  		$this->instantiate();
  		
  		$this->session->invalidate();
  		$this->get('security.context')->setToken(null);
  		return $this->redirect($this->generateUrl('general_login_homepage'));
  	}
}
