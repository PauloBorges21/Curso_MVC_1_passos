<?php


class homeController extends controller
{
    public function index()
    {
        $anuncios = new Anuncios();
        $usuarios = new Usuarios();

        $dados = [
            'quatidade' => $anuncios->getQuantidade(),
            'nome'=>$usuarios->getUsuario(),
            'telefone'=> $usuarios->getUsuario(),
            'idade'=>$usuarios->getIdade()
        ];
        $this->loadTemplate('home',$dados);

    }



}