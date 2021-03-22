<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/com.css">
    <style>
            body{
                background-image: url("icon/back1.jpg");
                background-size: cover;
            }
            p{
                text-align: left;
            }
                textarea
                {
                    resize:none;
                }
                .box1
                {
                    display: inline-block;
                overflow: hidden;
                margin-left: 100px;
                }
        </style>
    </head>
    <body>
    <?php if(isset($_GET['success'])) {?>
                <p class="success"><?php echo $_GET['success'];?></p>
                <?php }?>
                <?php if(isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error'];?></p>
                <?php }?>

    <form class="c1" action="cbend.php" method="POST">
    <h6>Comment</h6>
    <div class="container">
      <div class="box1">              
   <textarea  rows="4" cols="100" name="ccomment"  placeholder="add your comment"></textarea>   
    </div>
    <div class="box1">
    <button class="i4" name="cb"  type="submit"  >Comment</button>
    </div>
</div>
  </form>



        <form class="c2">
            <div class="row">
    <div class="column">
    <div class="box">
     
     <p class="w3"   style="float: left;">Write here...</p></div>
        <div class="box">
     <button id="w4">Deleted</button></div>
                   
                </div>
            </div>
        </form>
        
        

    </body>
</html>