<?php


class Anuncios extends model
{
    public function getQuantidade()
    {
        $sql = "SELECT COUNT(*) as c from tb_anuncios ";
        $sql = $this->pdo->prepare($sql);
        $sql->execute();
        $result = $sql->fetch();
        if ($result != false) {
            return $result;
        } else {
            return 0;
        }
    }
}