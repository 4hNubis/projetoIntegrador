<?php

include_once 'ativaSessao.php';
require_once 'ativaBD.php';


if(isset($_POST['btnProduEditado'])){
    // Array de erros
    // Se erros não iniciado, inicia ele
    if (!isset($_SESSION['erros'])) {
        $_SESSION['erros'] = $erros = array();    
    }

    $id = filter_var(mysqli_escape_string($connect, $_POST['idProduEditado']),FILTER_SANITIZE_NUMBER_INT);

	$nomeProdu = mysqli_escape_string($connect, $_POST['nome']);
    $valProdu = mysqli_escape_string($connect, $_POST['valor']);
    $pesoProdu = mysqli_escape_string($connect, $_POST['peso']);
    $dscProdu = mysqli_escape_string($connect, $_POST['dsc']);
    $imgJaSalva = mysqli_escape_string($connect, $_POST['imgJaSalva']);

    $formatosPermitidos= array("png","jpeg","jpg","gif","jfif");
    $extensao=pathinfo($_FILES['srcIMG']['name'],PATHINFO_EXTENSION);

    if(empty($nomeProdu) ||empty($valProdu) || empty($pesoProdu) || empty($dscProdu)){
        $_SESSION['erros'] = $erros[] = "Todos os campos devem estar preencidos ";
        header('Location: pageProdutoEdita.php');
    }else{
        if(!empty($extensao)){
            if(in_array($extensao,$formatosPermitidos))
            // Pasta onde serão salvas as imagens
            $pasta="imgProdutos/";
            //O nome temporário
            $temporario = $_FILES['srcIMG']['tmp_name'];
            $novoNome= uniqid().".$extensao"; //Novo nome que sera atriuido ao FILE
        
            $sql="UPDATE produto SET nomeProdu='$nomeProdu',valProdu='$valProdu', pesoProdu='$pesoProdu', dscProdu='$dscProdu', srcIMG='$pasta$novoNome' WHERE idProdu=$id";
            
            if(move_uploaded_file($temporario,$pasta.$novoNome) && mysqli_query($connect,$sql)){
                header('Location: index.php');
                $_SESSION['idProdu'] = '';
                mysqli_close($connect);
            }
        }else{
            $sql="UPDATE produto SET nomeProdu='$nomeProdu',valProdu='$valProdu', pesoProdu='$pesoProdu', dscProdu='$dscProdu' WHERE idProdu=$id";
            if(mysqli_query($connect, $sql)){
                header('Location: index.php');
                $_SESSION['idProdu'] = '';
                mysqli_close($connect);
            }
        }
        
    }
}else{
    header('Location: pageEditaProduto.php');
    $_SESSION['erros'] = $erros[] = 'Não foi possivel editar o produto';
}
?>