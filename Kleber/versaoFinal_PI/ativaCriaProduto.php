<?php  
require_once 'ativaBD.php';

if(isset($_POST['btnCriaProdu'])){

    $erros = array();
    // Sanetizando os elementos
    $nomeProdu = filter_var(mysqli_escape_string($connect, $_POST['nome']),FILTER_SANITIZE_STRING);
    $valProdu = filter_var(mysqli_escape_string($connect, $_POST['valor']),FILTER_SANITIZE_NUMBER_FLOAT);
    $pesoProdu = filter_var(mysqli_escape_string($connect, $_POST['peso']),FILTER_SANITIZE_NUMBER_FLOAT);
    $dscProdu = filter_var(mysqli_escape_string($connect, $_POST['dsc']),FILTER_SANITIZE_STRING);

    $formatosPermitidos= array("png","jpeg","jpg","gif","jfif");
    $extensao=pathinfo($_FILES['srcIMG']['name'],PATHINFO_EXTENSION);
    

    if(empty($nomeProdu) ||empty($valProdu) || empty($pesoProdu) || empty($dscProdu)){
        $erros[] = "<p> Todos os campos devem estar preencidos </p>";
    }elseif(empty($extensao)){
        $erros[]= '<p>Por favor selecionar a imagem do produto</p>';
    }elseif(in_array($extensao,$formatosPermitidos)){
        // Pasta onde serão salvas as imagens
        $pasta="imgProdutos/";
        //O nome temporário
        $temporario = $_FILES['srcIMG']['tmp_name'];
        $novoNome= uniqid().".$extensao"; //Novo nome que sera atriuido ao FILE

        $sql = "INSERT INTO produto(srcIMG, nomeProdu, valProdu, pesoProdu, dscProdu, estado) VALUES ( '$pasta$novoNome', '$nomeProdu', '$valProdu', '$pesoProdu', '$dscProdu',1)";    

        if(move_uploaded_file($temporario,$pasta.$novoNome) && mysqli_query($connect,$sql)){
            header('Location: pageProduto.php');
        }else{
            $erros[]="Não foi possivel criar o produto";
        }
    }else{
        $erros[]="Formato da imagem é inválido";
    }
}
?>