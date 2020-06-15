<?php
        $file2 = fopen("teste2.txt","r");
        while (!feof($file2)){
            $linha2 = fgets($file2);
             echo $linha2. " linha2<br>";
        }
        fclose($file2);   
?>