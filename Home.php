<?php include 'homebend.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="Homestyle.css">
</head>
        <style>
            
            /* Create two equal columns that floats next to each other */
                .rows {
                    display: block;
                    text-align: center;
                    align-items: center;
                    align-content: center;
                    justify-content: center;
                  
                    width: 50%;
                    padding: 10px;
                }

                .card-body
                {
                    display: block;
                    text-align: center;
                    align-items: center;
                    align-content: center;
                    justify-content: center;
                    
                    width: 50%;
                    padding: 10px;
                    background: white;
                    border: 2px solid #fff;
                }
        </style>
<body>
<div class="nav"><?php include 'navigation.php'; ?></div>
    <div class="rows">
        <?php foreach($query as $q) {?>
        
            <div class="card">
                <div class="card-body">
                <h4 class="card-title"> <?php echo $q['title'];?></h4>
                <p class="card-text"><?php echo $q['post'];?></p>
                <a href="view.php?id=<?php echo $q['id'];?>" class="btn-light">ReadMore..<span class="text-danger">&rarr;</span></a>
                </div>
            </div>
        
    </div>
    <?php }?>

        

</body>
</html>
