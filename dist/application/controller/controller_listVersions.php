<?php 
require_once dirname(__DIR__, 1).'/bootstrap.php';

class Controller_ListVersions extends Controller{

    public $list;
    function __construct()
    {
        $this->model = new Layout();
        $this->view = new View();
        Controller_ListVersions::action_index();
    }

    function action_index()
    {
        $data = $this->model->GetListVersions();
        $this->list = $data;
        $this->view->generate('../view/listVersions_view.php', 'index.php', $data);
    }
}