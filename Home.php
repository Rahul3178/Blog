<?php  include 'homebend.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet"  type="text/css" href="Homestyle.css">
</head>
        <style>
            body
            {    
                background-color:whitesmoke;
                
                background-size: cover;
            }
            /* Create two equal columns that floats next to each other */
                .rows{
                    display: block;
                    text-align: center;
                    align-items: center;
                    align-content: center;
                    justify-content: center;
                    width: 50%;
                    padding: 10px;
                    margin-left: 100px;
                }
                .m2{
                    display: block;
                    
                    background-color: white;
                    border: none;
                    border-radius: 15px;
                    
                    text-align: center;
                    align-items: center;
                    align-content: center;
                    justify-content: center;
                  
                    width: 170%;
                    padding: 5px;
                    margin-right: 100px;
                }
                *{
                        font-family: sans-serif;
                        box-sizing: border-box;
                        font-size: 18px;
                    }
                
                .success
                {
                    color: white;
                    background: lightgreen;
                    border-radius: 15px;
                    text-align: center;
                    align-content: center;
                    align-items: center;
                    justify-content: center;
                    padding: 20px;
                    width: 160px;
                    margin-left: 45%;
                    font-size: 18px;
                }
        </style>
<body>
<div class="nav"><?php include 'navigation.php'; ?></div>
                <?php if(isset($_GET['success'])) {?>
                <p class="success"><?php echo $_GET['success'];?></p>
                <?php }?>

                <div class="rows">
                    <?php 
                       
                    foreach($query as $q) {?>
                <div class="m2">
                
                <h4 class="c2" style=" font-size: 24px;"> <?php echo $q['title'];?></h4>
                <p class="c3" style="test-align:left;"><?php echo $q['post'];?></p>
                <a href="view.php?id=<?php echo $q['id'];?>" >ReadMore..<span class="text-danger">&rarr;</span></a>
                        
            </div>
            <br><br>
                <?php }?>
        
    </div>
    

        

</body>
</html>
