<?php
require($_SERVER['DOCUMENT_ROOT'] . "/cv/templates/config/core.php");
class contactController extends Controller
{
    function index()
    {
        require(ROOT . 'templates/Models/Contact.php');

        $contact = new Contact();

        $d['Contact'] = $contact->showAllTasks();
        $this->set($d);
        $this->render("index");
    }

   public static function create()
    {
     
        require($_SERVER['DOCUMENT_ROOT'] . "/cv/templates/Models/Contact.php");
        $connection = Database::getBdd();
        
        $addNama = $_POST['data2'];
        $addLink = $_POST['data3'];
        
        $contact = new Contact();
        if($contact->showContact($_POST['data1']) != null)
        {
            $thisId =$_POST['data1'];
            $d['Contact'] = $contact->edit($thisId,$addNama,$addLink,1);
            header( "Location: https://arp-cv.website/admin/" );
        } 
        else
        {
            $d['Contact'] = $contact->create($addNama,$addLink,1);
            header( "Location: https://arp-cv.website/admin/" );
        }   
       
        
        header( "Location: https://arp-cv.website/admin/" );
    }

    public static function delete()
    {
        require($_SERVER['DOCUMENT_ROOT'] . '/cv/templates/Models/Contact.php');
        $connection = Database::getBdd();
        $contact = new Contact();
        $id = $_POST['data1'];
            $d['Contact'] = $contact->delete($id);
            session_start();

            $_SESSION['alert'] = $id;
            header( "Location: https://arp-cv.website/admin/" );
            
    }
}
?>