if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true)
{
$erroA = 0;

if(isset($_FILES["campoarquivo"]))
{
$arquivonome = $_FILES["campoarquivo"]["name"];
$arquivotipo = $_FILES["campoarquivo"]["type"];
$arquivotamanho = $_FILES["campoarquivo"]["size"];
$arquivonometemp = $_FILES["campoarquivo"]["tmp_name"];
$erroA = $_FILES["campoarquivo"]["error"];

if($erroA == 0)
{
if(is_uploaded_file($arquivonometemp))
{
if(move_uploaded_file($arquivonometemp, "uploads/".$arquivonome))
{
echo "Sucesso!! <br>";

echo "Nome:" . $arquivonome . "<br>";
echo "Tipo" . $arquivotipo . "<br>";
echo "Tamanho: " . $arquivotamanho . "<br>";
echo "Nome temporário: " . $arquivonometemp . "<br>";
}
else{
$erroA = "Falha ao mover arquivo (permissão de acesso, caminho inválido)";
}
}
else{
$erroA = "Erro no envio: arquivo não recebido com sucesso.";
}
}
else{
$erroA = "Erro no envio: " . $erroA;
}
}
else{
$erroA = "Arquivo enviado não encontrado.";
}
if($erroA !== 0){
echo $erroA . "<br>";
}