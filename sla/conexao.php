<?php


try{
    $conection = new PDO("mysql:host=localhost;dbname=cursophp", "root", "Kteddy9.9");
    $conection->exec("set names utf8");
} catch (PDOException $e){
    echo "Falha: " . $e->getMessage();
    exit();
}

$sql = "INSERT INTO pessoas (nome, email, idade, sexo, estado_civil, humanas, exatas, biologicas, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conection->prepare($sql);

$stmt->bindParam(1, $_POST["nome"]);
$stmt->bindParam(2, $_POST["email"]);
$stmt->bindParam(3, $_POST["idade"]);
$stmt->bindParam(4, $_POST["sexo"]);
$stmt->bindParam(5, $_POST["estadocivil"]);

$checkHumanas = isset($_POST["humanas"]) ? 1 : 0;
$stmt->bindParam(6, $checkHumanas);

$checkExatas = isset($_POST["exatas"]) ? 1 : 0;
$stmt->bindParam(7, $checkExatas);

$checkBiologicas = isset($_POST["bilogicas"]) ? 1 : 0;
$stmt->bindParam(8, $checkBiologicas);

$passwordhach = md5("olá" . $_POST["senha"]);
$stmt->bandParam(9, $passwordhach);

$stmt->execute();

if($stmt->errorCode() != "00000"){
    $erro = "Erro código" . $stmt->errorCode() . ": ";
    $erro .= implode(", ", $stmt->errorInfo());
}

//----------------------------------------------------------------------------------------------------------------------

try{
    $conection = new PDO("mysql:host=localhost;dbname=cursophp", "root", "Kteddy9.9");
    $conection->exec("set names utf8");
} catch (PDOEXception $e) {
    echo "Falha: " . $e->getMessage();
    exit();
}

$sql = "INSERT INTO pessoas (nome, email, idade, sexo, estado_civil, humanas, exatas, biologicas, senhas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conection->prepare($sql);

$stmt->bindParam(1, $_POST["nome"]);
$stmt->bindParam(2, $_POST["email"]);
$stmt->bindParam(3, $_POST["idade"]);
$stmt->bindParam(4, $_POST["sexo"]);
$stmt->bindParam(5, $_POST["estadocivil"]);

$checkHumanas = isset($_POST["humanas"]) ? 1 : 0;
$stmt->bindParam(6, $checkHumanas);

$checkExatas = isset($_POST["exatas"]) ? 1 : 0;
$stmt->bindParam(7, $checkExatas);

$checkBiologicas = isset($_POST["biologicas"]) ? 1 : 0;
$stmt->bindParam(8, $checkBiologicas);

$passwordhach = md5("ola", $_POST["senha"]);
$stmt->bindParam(9, $passwordhach);

$stmt->execute();

if($stmt->errorCode() != "00000"){
    $erro = "Erro código: " . $stmt->errorCode() . ": ";
    $erro .= implode(", ", $stmt->errorInfo());
}

//----------------------------------------------------------------------------------------------------------------------

try{
    $conection = new PDO("mysql:host=localhost;dbname=cursophp", "root", "Kteddy9.9");
    $conection->exec("set names utf8");
} catch (PDOException $e){
    echo "Falha: " . $e->getMessage();
    exit();
}

$sql = "INSERT INTO pessoa(nome, email, idade, sexo, estado_civil, humanas, exatas, biologicas, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conection->prepare($sql);

$stmt->bindParam(1, $_POST["nome"]);
$stmt->bindParam(2, $_POST["email"]);
$stmt->bindParam(3, $_POST["idade"]);
$stmt->bindParam(4, $_POST["sexo"]);
$stmt->bindParam(5, $_POST["estadocivil"]);

$checkHumanas = isset($_POST["humanas"]) ? 1 : 0;
$stmt->bindParam(6, $checkHumanas);

$checkExatas = isset($_POST["exatas"]) ? 1 : 0;
$stmt->bindParam(7, $checkExatas);

$checkBiologicas = isset($_POST["biologicas"]) ? 1 : 0;
$stmt->bindParam(8, $checkBiologicas);

$passwordhach = md5("ola", $_POST["senha"]);
$stmt->bindParam(9, $passwordhach);

$stmt->execute();

if($stmt->errorCode() != "00000"){
    $valido = false;
    $erro = "Erro código: " . $stmt->errorCode() . ": ";
    $erro .= implode(", ", $stmt->errorInfo());
}


//----------------------------------------------------------------------------------------------------------------------


try{
    $conection = new PDO ("mysql:host=localhost;dbname=cursophp", "root", "Kteddy9.9");
    $conection->exec("set names utf8");
} catch (PDOException $e){
    echo "Falha: " . $e->getMessage();
    exit();
}

$sql = "INSERT INTO usuarios(nome, email, idade, sexo, estado_civil, humanas, exatas, biologicas, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conection->prepare($sql);

$stmt->bindParam(1, $_POST["nome"]);
$stmt->bindParam(2, $_POST["email"]);
$stmt->bindParam(3, $_POST["idade"]);
$stmt->bindParam(4, $_POST["sexo"]);
$stmt->bindParam(5, $_POST["estadocivil"]);

$checkHumanas = isset($_POST["humanas"]) ? 1 : 0;
$stmt->bindParam(6, $checkHumanas);

$checkExatas = isset($_POST["exatas"]) ? 1 : 0;
$stmt->bindParam(7, $checkExatas);

$checkBiologicas = isset($_POST["biologicas"]) ? 1 : 0;
$stmt->bindParam(8, $checkBiologicas);

$passwordhach = md5("olá" . $_POST["senha"]);
$stmt->bindParam(9, $passwordhach);

$stmt->execute();

if($stmt->errorCode() != "00000"){
    $valido = false;
    $erro = "Erro código" . $stmt->errorCode() . ": ";
    $erro .= implode(", ", $stmt->errorInfo());
}




























