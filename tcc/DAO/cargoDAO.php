<?php

class CargoDAO{
    private $conexao;

    public function __construct(){
        include_once "MySQL.php";
        $this->conexao = new MySQL();
    }

    public function insert($dados_cargo){
        
        $sql = "INSERT INTO cargo(razao_social, nome_fantasia, cnpj_cpf, inscricao_estadual, endereco, 
        bairro, complemento, numero, cidade, estado, telefone1, telefone2, observacao, ativo, email)
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);+
        $stmt->bindValue(1,$dados_cargo['razao_social']);
        $stmt->bindValue(2,$dados_cargo['nome_fantasia']);
        $stmt->bindValue(3,$dados_cargo['cnpj_cpf']);
        $stmt->bindValue(4,$dados_cargo['inscricao_estadual']);
        $stmt->bindValue(5,$dados_cargo['endereco']);
        $stmt->bindValue(6,$dados_cargo['bairro']);
        $stmt->bindValue(7,$dados_cargo['complemento']);
        $stmt->bindValue(8,$dados_cargo['numero']);
        $stmt->bindValue(9,$dados_cargo['cidade']);
        $stmt->bindValue(10,$dados_cargo['estado']);
        $stmt->bindValue(11,$dados_cargo['telefone1']);
        $stmt->bindValue(12,$dados_cargo['telefone2']);
        $stmt->bindValue(13,$dados_cargo['observacao']);
        $stmt->bindValue(14,$dados_cargo['ativo']);
        $stmt->bindValue(15,$dados_cargo['email']);
        $stmt->execute();
    }

    public function update($dados_cargo) {
        $sql = "UPDATE cargo SET razao_social = ?, nome_fantasia = ?, cnpj_cpf = ?, inscricao_estadual = ?, endereco = ?, bairro = ?, complemento = ?, numero = ?, cidade = ?, estado = ?, telefone1 = ?, telefone2 = ?, observacao = ?, ativo = ?, email = ? WHERE id = ?";
    
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados_cargo['razao_social']);
        $stmt->bindValue(2, $dados_cargo['nome_fantasia']);
        $stmt->bindValue(3, $dados_cargo['cnpj_cpf']);
        $stmt->bindValue(4, $dados_cargo['inscricao_estadual']);
        $stmt->bindValue(5, $dados_cargo['endereco']);
        $stmt->bindValue(6, $dados_cargo['bairro']);
        $stmt->bindValue(7, $dados_cargo['complemento']);
        $stmt->bindValue(8, $dados_cargo['numero']);
        $stmt->bindValue(9, $dados_cargo['cidade']);
        $stmt->bindValue(10, $dados_cargo['estado']);
        $stmt->bindValue(11, $dados_cargo['telefone1']);
        $stmt->bindValue(12, $dados_cargo['telefone2']);
        $stmt->bindValue(13, $dados_cargo['observacao']);
        $stmt->bindValue(14, $dados_cargo['ativo']);
        $stmt->bindValue(15, $dados_cargo['email']);
        $stmt->bindValue(16, $dados_cargo['id']); 
        $stmt->execute();
    }
    

    public function delete($id){
        $sql = "DELETE FROM cargo where id = ?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();

    }

    public function getAllRows(){
        $stmt = $this->conexao->prepare("SELECT * FROM cargo");
        $stmt->execute();

        $arr_car = array();

        while($f = $stmt->fetchObject()){
            $arr_car[] = $f;
        }

        return $arr_car;
    }

    public function getById($id){
        $stmt = $this->conexao->prepare("SELECT * FROM cargo WHERE id=?");
        $stmt->bindValue(1,$id);
        $stmt->execute();

        return $stmt->fetchObject();

    }

}