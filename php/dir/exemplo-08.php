<form method="POST" enctype="multipart/form-data">

    <input type="file" name="fileUploads">
    <button type="submit">SEND</button>
</form>

<?php
//tudo que estiver na tag form irá como binário

if($_SERVER["REQUEST_METHOD"] === "POST"){ 

    //vai o nome do input = $_FILES variável global
    $file = $_FILES["fileUploads"];

    if($file["error"]){
        throw new  Exception("Error: ".$file["error"]);
    }

    $dirUploads = "uploads";

    if(!is_dir($dirUploads)){

        mkdir($dirUploads);
    }

    //move_uploaded_file(filename, destination) = a variável com o diretório temporário, para onde o destino vai
    if(move_uploaded_file($file["tmp_name"], $dirUploads. DIRECTORY_SEPARATOR . $file["name"])){
        
        echo "Upload realizado com sucesso!";
    }else{
        
        throw new Exception("Não foi possível realizar o upload.");
    }

}


?>