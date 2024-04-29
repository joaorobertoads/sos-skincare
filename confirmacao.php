<?php 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipo_de_pele = $_POST['tipo_de_pele'];
    $rotinas_cuidados = $_POST['rotinas_cuidados'];
    $alergia = $_POST['alergia'];
    $alergia_informe = $_POST['alergia_informe'];
    $protetor_solar = $_POST['protetor_solar'];
    $melasma_familia = $_POST['melasma_familia'];
    $contraindicacao = $_POST['contraindicacao'];

    $conn = new mysqli('localhost','root','','skincare');
    if($conn->connect_error){
        die('Infelizmente a conexão falhou : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into formulario(nome, email, tipo_de_pele, rotinas_cuidados, alergia, alergia_informe, protetor_solar, 
        melasma_familia, contraindicacao) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $nome, $email, $tipo_de_pele, $rotinas_cuidados, $alergia, $alergia_informe, $protetor_solar,
        $melasma_familia, $contraindicacao);
        $stmt->execute();
        echo '<meta http-equiv="refresh" content="0;url=Confirmacao.html">';
        $stmt->close();
        $conn->close();
    }
?>