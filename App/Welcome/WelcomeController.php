<?php

namespace App\Welcome;


use System\BaseController;

class WelcomeController extends BaseController
{
    /* route '/' */
    public function index()
    {
        /* getting data from repository */
        $welcomeRepository = new WelcomeRepository();
        $message = $welcomeRepository->getWelcomeMessage();

        $this->addParams("welcomeMessage", $message);

        return $this->view("index");
    }

    /* route '/welcome' */
    public function welcome()
    {
        $message = "Welcome template integrated page";
        $this->addParams("message", $message);

        /* 'view file name', 'title', 'template path' */
        return $this->view("welcome", 'Welcome', "App/layout.master");
    }

}