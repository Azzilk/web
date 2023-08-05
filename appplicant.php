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
         $fname = $_REQUEST["fname"]; //2
         $sname = $_REQUEST["sname"];//3
         $idNum = $_REQUEST["id"]; //4
         $bDate = $_REQUEST["birthDate"];//5
         $age = $_REQUEST["age"];//6
         $gender = $_REQUEST["gender"];//7
         $address1 = $_REQUEST["address1"];//8
         $address2 = $_REQUEST["address2"];//9
         $address3 = $_REQUEST["address3"];//10
         $province = $_REQUEST["province"];//11
         $phone = $_REQUEST["phone"];//12
         $email = $_REQUEST["email"];//13
          
        

          $sql2 = "INSERT INTO applicant_personal_info VALUES ('$fname', '$sname','$idNum',' $bDate',' $age',' $address1',' $address2',' $address3',' $province',' $phone','$email','$gender' )";

          if($conn->query($sql2)){
            echo "Inserted";
          }
       }



    ?>
    
    <div class="container">
        <h class="title_page">Applicant details</h><br>
        <form class="form" action="#" method="POST">
             <label>First Name</label><br>
             <input type="text" name="fname">
             <br><br>

             <label>Second Name</label><br>
             <input type="text" name="sname">
             <br><br>

             <label>ID Number</label><br>
             <input type="text" name="id">
             <br><br>

             <label>Date of birth</label><br>
             <input type="date" name="birthDate">
             <br><br>

             <label>age</label><br>
             <input type="number" name="age">
             <br><br>

             <label>Gender</label><br>
             <select name="gender">
                <option selected disabled hidden> select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
             </select>
             <br><br>

             <label>Address line 1</label><br>
             <input type="text" name="address1" placeholder="house number street name">
             <br>
             <label>Address line 2</label><br>
             <input type="text" name="address2" placeholder="surbub (soshanguve block f)">
             <br>
             <label>Address line 3</label><br>
             <input type="text" name="address3" placeholder="town/city (pretoria)"  >
             <br><br>

             <label>Province</label><br>
             <input type="text" name="province">
             <br><br>

             <label>Phone Numbers</label><br>
             <input type="text" name="phone" placeholder="07123456789">
             <br><br>

             <label>Email address</label><br>
             <input type="email" name="email" placeholder="abc@gmail.com">
             <br><br>

             <input type="submit" name="submit" placeholder="Next">

        </form>

        

    </div>
</body>
</html>