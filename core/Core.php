<?php


class Core
{
    public function run() {
        // 1 = controller
        // 1 = action
        // 1 = paramentro
        // echo "URL: ".$_GET['url'];
        // Logica para verificar os dados da URL
        $url = '/';
        if(isset($_GET['url'])){
            $url .= $_GET['url'];
        }
       // echo "URL: ".$url;
        $params = [];
        if(!empty($url) && $url != '/'){
            $url = explode('/',$url);
            array_shift($url);

            $currentController = $url[0].'Controller';
            array_shift($url);

            if(isset($url[0]) && !empty($url[0])){
                $currentAction = $url[0];
                array_shift($url);
            }else{
                $currentAction = 'index';
            }

            if(count($url) > 0){
                $params = $url;
            }

           // print_r($url);

        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }
        $controller = new $currentController();
        //Executando uma função dentro de uma classe quando não sabemos o nome da função.
        call_user_func_array(array($controller,$currentAction), $params);
    }
}