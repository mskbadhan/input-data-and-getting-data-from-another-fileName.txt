<title>GETTING REAL IP OF THE VISITOR</title>
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:100);
    body{
        background: #34495e;
        text-align: center;
        font-size:20px;
        margin-top:100px;
        color:white;
        font-family:'Raleway', sans-serif;
    }

    .submit{
        width:auto;
        height:30px;
        background: #2dffdf;
        font-size: 17px;
        color:black;
        font-family: monospace;
    }
    input#userInput{
        height:30px;
        width: 250px;
        font-size: 15px;
        color:black;
    }
    a{
        color:white;
        text-decoration: underline;
    }
</style>
<?php 

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["biodata"])){
    $name = trim($_POST["name"]);
    $email = $_POST["email"];
    $biodata = $_POST["biodata"];
    if(!empty($name) && !empty($email) && !empty($biodata)){
        $fileName = $name.".txt";
        $handle = fopen($fileName, "w");
        $handlingData = "Name: ".$name."\n"."Email: ".$email."\n"."Biodata: ".$biodata;
        $writing = fwrite($handle, $handlingData);
        fclose($handle);
    }else{
        echo "Please fill all the fields.";
    }
}
?>
<form method="POST" action="index.php">
    Name:<br><input type="text" name="name" id="userInput"><br><br>
    Email: <br><input type="email" name="email" id="userInput"><br><br>
    The Biodata: <br><textarea name="biodata" id="" cols="40" rows="10"></textarea><br><br>
    <input type="submit" value="Submit" class="submit">
</form>
