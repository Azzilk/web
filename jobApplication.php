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
        $pos= $_REQUEST["postition"]; //2
        $ref= $_REQUEST["ref"];//3
        $Id_number= $_REQUEST["id"]; //4
        $qualif = $_REQUEST["qualif"];//5
        $istitution = $_REQUEST["iname"];//6
        $yearObt= $_REQUEST["year"];//7
        $expr = $_REQUEST["yearExp"];//8
        $skills = $_REQUEST["skill"];//9
         
          
        

          $sql3 = "INSERT INTO job_application VALUES ('$pos', '$ref','$Id_number','$qualif',' $istitution',' $yearObt',' $expr',' $skills' )";

          if($conn->query($sql3)){
            echo "Inserted";
          }
       }



    ?>
    
    <div class="container">
        <h class="title_page">Applicant details</h><br>
        <form class="form" action="#" method="POST">
             <label>Position</label><br>
             <input type="text" name="postition">
             <br><br>

             <label>Reference</label><br>
             <input type="text" name="ref"><span>go to the job description to get the reference</span>
             <br><br>

             <label>ID Number</label><br>
             <input type="text" name="id">
             <br><br>

             <label>Qualification</label><br>
             <select name="qualif">
                <option selected disabled hidden> select Qualification</option>
                <option value="NSC">NSC - National Senior Certificate/Garade 12</option>
                <option value="Higher Cerificate">Higher Certificate</option>
                <option value="Nationa Diploma">National Diploma</option>
                <option value="Diploma">Diploma?Advanced Diploma</option>
                <option value="Degree">Degree</option>
                <option value="honours">Honours</option>
                <option value="doctrade">Doctrade</option>
                <option value="masters">Masters</option>
               
             </select>
             <br><br>

             <label>Institution/School name </label><br>
             <input type="text" name="iname" >
             <br>
             <label>Year Obtained</label><br>
             <input type="text" name="year" >
             <br>
             <label>Skills</label><br>
             <input type="text" name="skill"  ><span>  </span> <button class="add" >Add</button>
             <br><br>

             <label>How many years of experience in this field</label><br>
             <input type="text" name="yearExp">
             <br><br>

             <input type="submit" name="Apply">

        </form>

        

    </div>
</body>
</html>