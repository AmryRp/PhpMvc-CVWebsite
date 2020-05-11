<?php
class adminController extends Controller
{
    function index()
    {
        require(ROOT . 'templates/Models/Contact.php');

        $contact = new Contact();

        $d['Contact'] = $contact->showAllTasks();
        $this->set($d);
        $this->render("index");
    }
}
?>