<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title;   ?></title>
</head>
<body>
    <h1><?= $page_heading?></h1>
    <h3>Subject Lists</h3>
    <ul>
       
            <?php
                if(count($subjects)>0):
                    foreach($subjects as $sub):
                        ?>
                        <li><?=$sub; ?></li>
                        <?php

                    endforeach;
                else:
                    echo "<p>Sorry! No Records Found</p>";
                    
                endif
              
            ?>
       
    </ul>
</body>
</html>