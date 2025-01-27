<?php
class Usuario {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function criar($nome, $email, $idade, $data_nascimento, $foto, $genero, $termos, $observacoes) {
        $sql = "INSERT INTO usuarios (nome, email, idade, data_nascimento, foto, genero, termos, observacoes)
                VALUES (:nome, :email, :idade, :data_nascimento, :foto, :genero, :termos, :observacoes)";
        
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':idade', $idade);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':foto', $foto);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':termos', $termos);
        $stmt->bindParam(':observacoes', $observacoes);
        
        $stmt->execute();
    }

    
    public function listar() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function buscarPorId($id) {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    public function atualizar($id, $nome, $email, $idade, $data_nascimento, $foto, $genero, $termos, $observacoes) {
        $sql = "UPDATE usuarios SET nome = :nome, email = :email, idade = :idade, 
                data_nascimento = :data_nascimento, foto = :foto, genero = :genero, 
                termos = :termos, observacoes = :observacoes WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':idade', $idade);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':foto', $foto);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':termos', $termos);
        $stmt->bindParam(':observacoes', $observacoes);

        $stmt->execute();
    }

    
    public function excluir($id) {
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    
}
?>
