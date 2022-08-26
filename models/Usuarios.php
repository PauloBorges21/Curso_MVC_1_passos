<?php


class Usuarios extends model
{
    public function getUsuario()
    {
        $sql = "SELECT * FROM tb_usuarios where id =1";
        $sql = $this->pdo->prepare($sql);
        $sql->execute();
        $result = $sql->fetch();
        if ($result != false) {
            return $result;
        } else {
            return 0;
        }
    }

    public function getIdade()
    {
        $idade = 33;
        return $idade;
    }
}