<?php
//fgets irá ler linha por linha de um arquivo
$filename = "usuarios.csv";

if(file_exists($filename)){

    $file= fopen($filename, "r");

    $headers = explode(",",fgets($file));

    $data = array();

    while($row = fgets($file)){

        $rowData = explode(",",$row);

        $line = array();

        for ($i = 0; $i < count($headers); $i++){

            //informação da chave
            $line[$headers[$i]] = $rowData[$i];
        }

        array_push($data, $line);
    }

    fclose($file);

    echo json_encode($data);
}

?>