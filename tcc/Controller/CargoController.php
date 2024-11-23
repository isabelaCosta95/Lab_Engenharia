<?php

class CargoController{

    public static function index(){

        $cargo_DAO = new CargoDAO();
        $lista_car = $cargo_DAO->getAllRows();
        $total_car = count($lista_car);
            
        include 'View/modulos/cargo/lista_cargo.php';
    }

    public static function cadastrar(){

        include 'View/modulos/cargo/cadastrar_cargo.php';
    }

    public static function salvar(){
        
        $cargo_DAO = new CargoDAO();
        $dados_para_salvar = array(
            'razao_social' => $_POST['razao_social'],
            'nome_fantasia' => $_POST['nome_fantasia'],
            'cnpj_cpf' => $_POST['cnpj_cpf'],
            'inscricao_estadual' => $_POST['inscricao_estadual'],
            'endereco' => $_POST['endereco'],
            'bairro' => $_POST['bairro'],
            'complemento' => $_POST['complemento'],
            'numero' => $_POST['numero'],
            'cidade' => $_POST['cidade'],
            'estado' => $_POST['estado'],
            'telefone1' => $_POST['telefone1'],
            'telefone2' => $_POST['telefone2'],
            'observacao' => $_POST['observacao'],
            'ativo' => $_POST['ativo'],
            'email' => $_POST['email']
        );
        
        if(isset($_POST['id'])){
            $dados_para_salvar['id'] = $_POST['id'];
            $cargo_DAO->update($dados_para_salvar);
        }
        else{
            $cargo_DAO->insert($dados_para_salvar);
        }
        header('Location: /tcc/cargo');        
    }

    public static function excluir(){
        $cargo_DAO = new CargoDAO();
        $cargo_DAO->delete($_GET['id']);
        header("Location: /tcc/cargo");
    }

    public static function ver(){
        if(isset($_GET['id'])){
            $cargo_DAO = new CargoDAO();
            $dados_car = $cargo_DAO->getById($_GET['id']);
        
            include 'View/modulos/cargo/cadastrar_cargo.php';
        }
        else{
            header("Location: /tcc/cargo");
        }
    }
}