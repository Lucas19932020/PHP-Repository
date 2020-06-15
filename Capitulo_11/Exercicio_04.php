<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $file = fopen("teste1.txt","r");
        while (!feof($file)){
            $linha = fgets($file);
            
            $file2 = fopen("teste2.txt","r+");
            while (!feof($file2)){
                $linha2 = fgets($file2);

                if($linha2 == false){
                    if($linha2 != $linha){
                        fwrite($file2, $linha);
                    }
                }
            }
            fclose($file2);   
        }
        fclose($file);

        $file2 = fopen("teste2.txt","r");
        while (!feof($file2)){
            $linha2 = fgets($file2);
             echo $linha2."<br>";
        }
        fclose($file2);   
?>
</body>
</html>