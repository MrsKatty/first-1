<?php

namespace Controller;

use Model\CRUDInterface;
use View\View;

class TableController
{
    protected $table;
    protected $view;

    public function __construct(CRUDInterface $table, View $view)
    {
        $this->table = $table;
        $this->view = $view;
        $this->view->setTemplate('table');
    }

    public function actionShow()
    {
        //$this->table->get();
        $this
            ->view
            ->setData(["table" => $this->table->get()])
            ->view();
    }

    public function actionAdd(array $data)
    {
        $this->table->add($data);
        header('location ?action=show');
    }

    public function actionDel(array $data)
    {
       
    }

    public function actionDefault()
    {
        $this
            ->view
            ->setTemplate("default")
            ->view();
    }
}
