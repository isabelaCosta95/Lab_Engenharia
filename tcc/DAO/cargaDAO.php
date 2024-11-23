<?php

class CargaDAO{
    private $conexao;

    public function __construct(){
        include_once "MySQL.php";
        $this->conexao = new MySQL();
    }

    public function insert($dados_carga){
        
        $sql = "INSERT INTO carga(razao_social, nome_fantasia, cnpj_cpf, inscricao_estadual, endereco, 
        bairro, complemento, numero, cidade, estado, telefone1, telefone2, observacao, ativo, email)
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);+
        $stmt->bindValue(1,$dados_carga['razao_social']);
        $stmt->bindValue(2,$dados_carga['nome_fantasia']);
        $stmt->bindValue(3,$dados_carga['cnpj_cpf']);
        $stmt->bindValue(4,$dados_carga['inscricao_estadual']);
        $stmt->bindValue(5,$dados_carga['endereco']);
        $stmt->bindValue(6,$dados_carga['bairro']);
        $stmt->bindValue(7,$dados_carga['complemento']);
        $stmt->bindValue(8,$dados_carga['numero']);
        $stmt->bindValue(9,$dados_carga['cidade']);
        $stmt->bindValue(10,$dados_carga['estado']);
        $stmt->bindValue(11,$dados_carga['telefone1']);
        $stmt->bindValue(12,$dados_carga['telefone2']);
        $stmt->bindValue(13,$dados_carga['observacao']);
        $stmt->bindValue(14,$dados_carga['ativo']);
        $stmt->bindValue(15,$dados_carga['email']);
        $stmt->execute();
    }

    public function update($dados_carga) {
        $sql = "UPDATE carga SET razao_social = ?, nome_fantasia = ?, cnpj_cpf = ?, inscricao_estadual = ?, endereco = ?, bairro = ?, complemento = ?, numero = ?, cidade = ?, estado = ?, telefone1 = ?, telefone2 = ?, observacao = ?, ativo = ?, email = ? WHERE id = ?";
    
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados_carga['razao_social']);
        $stmt->bindValue(2, $dados_carga['nome_fantasia']);
        $stmt->bindValue(3, $dados_carga['cnpj_cpf']);
        $stmt->bindValue(4, $dados_carga['inscricao_estadual']);
        $stmt->bindValue(5, $dados_carga['endereco']);
        $stmt->bindValue(6, $dados_carga['bairro']);
        $stmt->bindValue(7, $dados_carga['complemento']);
        $stmt->bindValue(8, $dados_carga['numero']);
        $stmt->bindValue(9, $dados_carga['cidade']);
        $stmt->bindValue(10, $dados_carga['estado']);
        $stmt->bindValue(11, $dados_carga['telefone1']);
        $stmt->bindValue(12, $dados_carga['telefone2']);
        $stmt->bindValue(13, $dados_carga['observacao']);
        $stmt->bindValue(14, $dados_carga['ativo']);
        $stmt->bindValue(15, $dados_carga['email']);
        $stmt->bindValue(16, $dados_carga['id']); 
        $stmt->execute();
    }
    

    public function delete($id){
        $sql = "DELETE FROM carga where id = ?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();

    }

    public function getAllRows(){
        $stmt = $this->conexao->prepare("SELECT * FROM carga");
        $stmt->execute();

        $arr_car = array();

        while($f = $stmt->fetchObject()){
            $arr_car[] = $f;
        }

        return $arr_car;
    }

    public function getById($id){
        $stmt = $this->conexao->prepare("SELECT * FROM carga WHERE id=?");
        $stmt->bindValue(1,$id);
        $stmt->execute();

        return $stmt->fetchObject();

    }

}