<?php

namespace Mos\App;

/**
 * An App class to wrap the resources of the framework.
 */
class App
{
    public function redirect ($url)
    {
        $this->response->redirect($this->url->create($url));
        exit;
    }



    public function renderPage($data)
    {
        // Add layout, render it, add to response and send.
        $this->view->add("database/header", $data, "header");
        $this->view->add("database/footer", [], "footer");
        $this->view->add("database/layout", $data, "layout");
        $body = $this->view->renderBuffered("layout");
        $this->response->setBody($body)->send();
    }

}
