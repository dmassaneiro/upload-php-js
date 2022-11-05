<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');


// pegar evento POST
if(isset($_FILES['arquivo']['name'])){
   $resposta =  enviarArquivo($_FILES['arquivo']);
    echo json_encode(['msg' =>  $resposta]); 
}


// Função para enviar o arquivo para servidor
function enviarArquivo($file){
    //pasta onde vai salvar os arquivo + o nome do arquivo enviado
    $dir_name = './uploads/'.$file['name']; 
    if (move_uploaded_file($file['tmp_name'], $dir_name)) {
        return 'Enviado com sucesso';
    }
    return 'Erro ao enviar arquivo';
}