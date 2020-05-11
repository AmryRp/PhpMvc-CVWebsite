<?php
class adminController extends Controller
{
    function index()
    {
        require($_SERVER['DOCUMENT_ROOT']. '/cv/templates/Models/Contact.php');
         require($_SERVER['DOCUMENT_ROOT']. '/cv/templates/Models/Education.php');
          require($_SERVER['DOCUMENT_ROOT']. '/cv/templates/Models/Experience.php');
           require($_SERVER['DOCUMENT_ROOT']. '/cv/templates/Models/jasa.php');
            require($_SERVER['DOCUMENT_ROOT']. '/cv/templates/Models/skill.php');
             require($_SERVER['DOCUMENT_ROOT']. '/cv/templates/Models/portofolio.php');

        $contact = new Contact();
         $education = new Education();
          $experience = new Experience();
           $jasa = new Jasa();
            $skill = new Skill();
             $portofolio = new Portofolio();

        $d['Contact'] = $contact->showAllTasks();
        $d['Education'] = $education->showAllEducation();
        $d['Experience'] = $experience->showAllExperience();
        $d['Jasa'] = $jasa->showAlljasa();
        $d['Skill'] = $skill->showAllskill();
        $d['Portofolio'] = $portofolio->showAllportofolio();
        $this->set($d);
        $this->render("index");
    }
}
?>