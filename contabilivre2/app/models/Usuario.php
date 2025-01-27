<?php
class Usuario {

    public static function cadastrar($nome, $email, $idade, $data_nascimento, $genero, $descricao, $foto, $termos) {
        global $pdo;
        $query = "INSERT INTO usuarios (nome, email, idade, data_nascimento, genero, descricao, foto, termos) 
                  VALUES (:nome, :email, :idade, :data_nascimento, :genero, :descricao, :foto, :termos)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':idade', $idade);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':foto', $foto);
        $stmt->bindParam(':termos', $termos);
        return $stmt->execute();
    }

    public static function listar() {
        global $pdo;
        $query = "SELECT * FROM usuarios";
        $stmt = $pdo->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function editar($id, $nome, $email, $idade, $data_nascimento, $genero, $descricao, $foto = null, $termos) {
        global $pdo;
    
        $query = "UPDATE usuarios SET 
                    nome = :nome, 
                    email = :email, 
                    idade = :idade, 
                    data_nascimento = :data_nascimento, 
                    genero = :genero, 
                    descricao = :descricao, 
                    termos = :termos";
    
        
        if ($foto !== null) {
            $query .= ", foto = :foto";
        }
    
        $query .= " WHERE id = :id";
    
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':idade', $idade);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':termos', $termos);
    
        if ($foto !== null) {
            $stmt->bindParam(':foto', $foto);
        }
    
        return $stmt->execute();
    }
    

    public static function excluir($id) {
        global $pdo;
        $query = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public static function buscarPorId($id) {
        global $pdo;
        $query = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
