<?php 

header("Content-Type: application/json");

require "conexao.php";

$metodo = $_SERVER["REQUEST_METHOD"];

if($metodo == "POST"){
    $json = file_get_contents("php://input");

    $dados = json_decode($json,true);

   $sql = "INSERT INTO chamados (equipamento, setor, descricao, prioridade, status)
        VALUES (:equipamento, :setor, :descricao, :prioridade, :status)";

$comando = $pdo->prepare($sql);

$comando->execute([
    ":equipamento" => $dados["equipamento"],
    ":setor" => $dados["setor"],
    ":descricao" => $dados["descricao"],
    ":prioridade" => $dados["prioridade"],
    ":status" => $dados["status"]
]); 

    echo json_encode([
    "mensagem"=> "Chamado cadastrado com sucesso"

    ]);
}

if($metodo == "GET"){
    $sql = "SELECT * FROM chamados ORDER BY id";

    $comando = $pdo -> query($sql);

    $chamados = $comando -> fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($chamados);
}

if($metodo == "PUT"){

    $id = $_GET["id"];

    $json = file_get_contents("php://input");

    $dados = json_decode($json, true);

    $sql = "UPDATE chamados
            SET equipamento = :equipamento,
                setor = :setor,
                descricao = :descricao,
                prioridade = :prioridade,
                status = :status
            WHERE id = :id";

    $comando = $pdo->prepare($sql);

    $comando->execute([
        ":equipamento" => $dados["equipamento"],
        ":setor" => $dados["setor"],
        ":descricao" => $dados["descricao"],
        ":prioridade" => $dados["prioridade"],
        ":status" => $dados["status"],
        ":id" => $id
    ]);

    echo json_encode([
        "mensagem" => "Chamado atualizado com sucesso"
    ]);
}

if($metodo == "DELETE"){

    $id = $_GET["id"];

    $sql = "DELETE FROM chamados WHERE id = :id";

    $comando = $pdo->prepare($sql);

    $comando->execute([
        ":id" => $id
    ]);

    echo json_encode([
        "mensagem" => "Chamado excluído com sucesso"
    ]);
}
