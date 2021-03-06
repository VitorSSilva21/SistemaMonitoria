<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/SistemaMonitoria/api/rotas/IRouter.php";

class Router implements IRouter {

    public $class; //aberta a extensão e fechada a modificação        

    function __construct($class) {
        $this->class = $class;
          
    }
    
    public function get() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->class->get();
            return true;
        }
        return false;
    }

    public function run() {
		session_start(); // inicializa a sessao
        try {
            if ($this->get()) {
                return;
            } else if ($this->post()) {
               return;
           } else if ($this->delete()) {
                return;
            } else if ($this->put()) {
                return;
            }
        } catch (InvalidArgumentException $e) {
            echo $e->getMessage();
            http_response_code(400);
        } catch (Exception $e) {
            echo $e->getMessage();
            http_response_code(400);
        }
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            $this->class->delete();
            return true;
        }
        return false;
    }

    public function post() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->class->post();
            http_response_code(201);
            return true;
        }
        return false;
    }

    public function put() {
        if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
            $this->class->put();
            return true;
        }
        return false;
    }

}
?>