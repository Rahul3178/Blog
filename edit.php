<?php include 'homebend.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Create Post</title>
</head>
<style>
body
{
    background-image: url("icon/back1.jpg");
    background-size: cover;
}
.main
{
    
    
    display: flex;
    align-content: center;
    align-items: center;
    justify-content: center;
    height: 100vh;
    flex-direction: column;
    
}

form
{   margin-top: 30px ;
    width: 700px;
    border: 2px solid #ccc;
    background: #fff;
    border-radius: 15px;
    padding: 20px;

}
 input
 {
    display: block;
    border: 2x solid #ccc;
    border-radius: 5px;
    width: 95%;
    padding: 20px;
    margin: 10px auto;

 }
 h1{
    text-align: center;
    margin-bottom: 40px;
    font-size: 36px;
    font-weight: bold;
}
*{
    font-family: sans-serif;
    box-sizing: border-box;
    font-size: 18px;
}
 .post
 {
    display: block;
    border: 2x solid #ccc;
    border-radius: 5px;
    width: 95%;
    padding: 10px;
    margin: 10px auto;

 }
 button 
{
    float:left;
    background: lightgreen;
    color: #fff;
    padding:30px,15px;
    margin-right:10px;
    margin-left: auto;
    border-radius: 5px;
    border:none;
    width: 30%;
    height: 7vh;
    
}
button  :hover{
    opacity: .7;
} 
.error{
    color:red;
    background:snow;
    width :95%;
    padding:10px;
    border-radius: 5px;
    margin: 20px auto;

}
.success{
    color: #40754C;
    background:#D4EDDA;
    width :95%;
    padding:10px;
    border-radius: 5px;
    margin: 20px auto;

}   
     
     
 
</style>


<body>
<?php include 'navigation.php';?>
<div class="main">
<form action="homebend.php" method="post">
        <h1>Update Post </h1>
       <?php 
        if(isset($_GET['error']))
        {
       ?>
       <p class='error'>  <?php echo $_GET['error'];?></p>
      <?php } ?>
      <?php 
        if(isset($_GET['success']))
        {
       ?>
       <p class='success'>  <?php echo $_GET['success'];?></p>
      <?php } ?>
            
        
        <div class="up">
        <?php foreach($query as $q){?>
        <input type="text" name="id" value="<?php echo $q['id'];?>" hidden>
        <input type="text" name="title" placeholder="Title" value="<?php echo $q['title'];?>"></input>
        <br><br>
        <textarea  class="post"  rows="8" type="text" name="area" placeholder="Write here"  ><?php echo $q['post'];?></textarea>
        <br><br><?php }?>
        <button  name="update" type="submit">update</button>
        <button  name="delete" style="float : right; background: red;" type="submit">Delete</button>
        </div>
        
</form>
</div>
</body>
</html>