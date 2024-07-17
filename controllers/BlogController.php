<?php 

class BlogController extends RenderView {

    public function index() {
        $this->loadView("index", [

        ]);
    }

    public function equipe() {
        $this->loadView("equipe", [

        ]);
    }

    public function blog() {
        $this->loadView("blog", [

        ]);
    }


    public function detail() {
        $this->loadView("blog-detail", [

        ]);
    }

    public function detail2() {
        $this->loadView("blog-detail2", [

        ]);
    }

     
}