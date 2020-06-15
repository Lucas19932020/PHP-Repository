<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = 10;

        for($i = 0; $i <= $n ; $i++  ){
            echo fibonacci($i)." ";

        }
        

        function fibonacci($n){
            if($n == 0){
                return 0;
            }else if($n == 1){
            return 1;
            }else{
                
                return fibonacci($n-1) + fibonacci($n-2);
            }

        }
    ?>
</body>
</html>