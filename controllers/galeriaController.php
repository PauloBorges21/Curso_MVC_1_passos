<?php


class galeriaController extends controller
{
    public function index()
    {
        $dados = [
            'qt' => 80
        ];

        $this->loadTemplate('galeria',$dados);

    }

    public function abrir($id)
    {
        ;
        $dados = [

        ];
        echo'Abrir foto '.$id;
        $this->loadTemplate('galeria',$dados);
    }

}