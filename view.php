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
       <!----------- comment section start from here ---->
   <!---    <link rel="stylesheet" type="text/css" href="css/com.css">
       
    <form class="c1" action="homebend.php" method="POST">
    <h6>Comment</h6>
    <div class="container">
    <input class="i1" type="text" name="cname" placeholder="Name"></input>
    <input class="i2" type="text" name="cemail"placeholder="Email"></input>
    <br> 
    <textarea rows="4" cols="80" class="i3"  name="ccomment"placeholder="Write here"></textarea>   
    
    <form method="POST">
       
    <button class="i4" name="cb"   type="submit"  >Comment</button>
    </form>
    
    
    
</div>
  </form>
*/


        <form class="c2">
            <div class="row">
 <div class="column">
 <div class="box">
     <h6 id="w1">user_name</h6></div>
 <div class="box">
     <h6 id="w2">title</h6></div>
 <div class="box">
     <textarea class="w3" readonly rows="4" cols="35" disabled style="float: left;">Write here...</textarea></div>
 <div class="box">
     <button id="w4">Deleted</button></div>
                   
                </div>
            </div>
        </form>

       </div> 
                     //-->
</body>
</html>