<?php

class CargaController{

    public static function index(){

        $carga_DAO = new CargaDAO();
        $lista_car = $carga_DAO->getAllRows();
        $total_car = count($lista_car);
            
        include 'View/modulos/carga/lista_carga.php';
    }

    public static function cadastrar(){

        include 'View/modulos/carga/cadastrar_carga.php';
    }

    public static function salvar(){
        
        $carga_DAO = new CargaDAO();
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
            $carga_DAO->update($dados_para_salvar);
        }
        else{
            $carga_DAO->insert($dados_para_salvar);
        }
        header('Location: /tcc/carga');        
    }

    public static function excluir(){
        $carga_DAO = new CargaDAO();
        $carga_DAO->delete($_GET['id']);
        header("Location: /tcc/carga");
    }

    public static function ver(){
        if(isset($_GET['id'])){
            $carga_DAO = new CargaDAO();
            $dados_car = $carga_DAO->getById($_GET['id']);
        
            include 'View/modulos/carga/cadastrar_carga.php';
        }
        else{
            header("Location: /tcc/carga");
        }
    }
}