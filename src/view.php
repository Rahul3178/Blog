<?php include 'homebend.php';?>
<html>
<head><title>view</title></head>
       <link rel="stylesheet" type="text/css" href="css/view.css">
       <style>
              body{
                     background-image: url('icon/back1.jpg');
                     background-size: cover;
              }
       </style>
<body>
<?php include 'navigation.php'; ?>
<div><p  style="margin-top:05%;"></p></div>
              <?php if(isset($_GET['success'])) {?>
                <p class="success"><?php echo $_GET['success'];?></p>
                <?php }?>
                <?php if(isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error'];?></p>
                <?php }?>
       <div class="none">
                <?php foreach($query as $q) {?>
                <div class="me" >
                 <h2 id="t1"> <?php echo $q['title'];?></h2>
                 <button type="submit" id="t3" style="float:left;" ><a href="edit.php?id=<?php echo $q['id'];?>">Edit</a></button>
                        <form method="post">
                        <input type="text" hidden value="<?php echo $q['id'];?>">
                        <button type="submit" id="t4" name="delete"style="float:right;">Delete</button>
                     <br><br>
                <p id="t2"><?php echo $q['post'];?></p>
                </div>
                <?php }?>
                
                      
                        </form>
       
      
                     
</body>
</html>