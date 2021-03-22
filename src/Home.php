<?php  include 'homebend.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet"  type="text/css" href="css/homes1.css">
</head>
   <style>
             .error
                {
                    color: white;
                    background: red;
                    border-radius: 15px;
                    text-align: center;
                    align-content: center;
                    align-items: center;
                    justify-content: center;
                    padding: 7px;
                    width: auto;
                    margin-left: auto;
                    font-size: 18px;
                }
            </style>     
<body>
<div class="nav"><?php include 'navigation.php'; ?></div>
                <div><p  style="margin-top:05%;"></p></div>  
                
                <?php if(isset($_GET['success'])) {?>
                <p class="success"><?php echo $_GET['success'];?></p>
                <?php }?>
                <?php if(isset($_GET['error'])) {?>
                <p class="error" ><?php echo $_GET['error'];?></p>
                <?php }?>
                
                <div class="box" >
                <div class="rows" >
                    <?php 
                       
                    foreach($query as $q) {?>
                <div class="m2" >
                <h6 style="float: left;" > <?php echo "@".$q['user_name'];?>
                <h4 class="c2" style=" font-size: 24px;"> <?php echo $q['title'];?></h4>
                <p class="c3" style="test-align:left;"><?php echo $q['post'];?></p>
                <a href="view.php?id=<?php echo $q['id'];?>" >ReadMore..<span class="text-danger">&rarr;</span></a>
                        
            </div>
            <br><br>
                <?php }?>
        
            </div>
            </div>
    

        

</body>
</html>
