<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "hiring";

       $conn = new mysqli($servername, $username, $password, $dbname);

       if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
       }
        
       if(isset($_POST["submit"])){
          $pos = $_REQUEST["position"];
          $expr = $_REQUEST["experince"];
          $age = $_REQUEST["age"];
          
          $qualif = $_REQUEST["qualif"];
          $gender = $_REQUEST["gender"];

          $sql = "INSERT INTO requirements VALUES ('$pos', '$expr','$age','$qualif','$gender' )";

          if($conn->query($sql)){
            echo "Inserted";
          }
       }



    ?>
    
    <div class="container">
        <h class="title_page">RECRUITMENT REQUIREMENTS</h><br>
        <form class="form" action="#" method="POST">
            <label>Name of the position</label><br>
            <input type="text" name="position" class="input_field1">
             <br><br>

            <label>Experince required</label><br>
            <input type="text" name="experince" class="input_field2" >
            <br><br>

            <label>Age between</label><br>
            <input type="text" name="age" placeholder="10-20"> 
            <br><br>

            <label>Qualification</label><br>
            <input type="text" name="qualif" class="input_field3">
            <br><br>
<div class="3">+
    s
</div>
            <label>Gender</label><br>
            <select name="gender">
                <option selected disabled hidden> select gender</option>
                <option value="0">Any</option>
                <option value="1">Males Only</option>
                <option value="2">Females Only</option>
            </select>
            <br><br>

           
            
            <input type="submit" name="submit" >

        </form>
        

    </div>
</body>
</html>