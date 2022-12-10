<?php  
require_once 'ativaBD.php';
include_once 'ativaSessao.php';

if(isset($_POST['btnCriaProdu'])){
    // Array de erros
    // Se erros não iniciado, inicia ele
    if (!isset($_SESSION['erros'])) {
        $_SESSION['erros'] = $erros = array();    
    }
    
    // Sanetizando os elementos
    $nomeProdu = filter_var(mysqli_escape_string($connect, $_POST['nome']),FILTER_SANITIZE_STRING);
    $valProdu = filter_var(mysqli_escape_string($connect, $_POST['valor']),FILTER_SANITIZE_NUMBER_FLOAT);
    $pesoProdu = filter_var(mysqli_escape_string($connect, $_POST['peso']),FILTER_SANITIZE_NUMBER_FLOAT);
    $dscProdu = filter_var(mysqli_escape_string($connect, $_POST['dsc']),FILTER_SANITIZE_STRING);

    $formatosPermitidos= array("png","jpeg","jpg","gif","jfif");
    $extensao=pathinfo($_FILES['srcIMG']['name'],PATHINFO_EXTENSION);
    

    if(empty($nomeProdu) ||empty($valProdu) || empty($pesoProdu) || empty($dscProdu)){
        $_SESSION['erros'] = $erros[] = "Todos os campos devem estar preencidos ";
        header('Location: pageProdutoCria.php');

    }elseif(empty($extensao)){
        $_SESSION['erros'] = $erros[]= 'Por favor selecionar a imagem do produto';
        header('Location: pageProdutoCria.php');

    }elseif(in_array($extensao,$formatosPermitidos)){
        // Pasta onde serão salvas as imagens
        $pasta="imgProdutos/";
        //O nome temporário
        $temporario = $_FILES['srcIMG']['tmp_name'];
        $novoNome= uniqid().".$extensao"; //Novo nome que sera atriuido ao FILE

        $sql = "INSERT INTO produto(srcIMG, nomeProdu, valProdu, pesoProdu, dscProdu, estado) VALUES ( '$pasta$novoNome', '$nomeProdu', '$valProdu', '$pesoProdu', '$dscProdu',1)";    
        if(move_uploaded_file($temporario,$pasta.$novoNome) && mysqli_query($connect,$sql)){
            header('Location: index.php');
        }else{
            $_SESSION['erros'] = $erros[]="Não foi possivel criar o produto";
            header('Location: pageProdutoCria.php');
        }
    }else{
        $_SESSION['erros'] = $erros[]="Formato da imagem é inválido";
        header('Location: pageProdutoCria.php');

    }
}
?>