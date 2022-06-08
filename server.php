<?php
    $host = "ec2-52-3-60-53.compute-1.amazonaws.com";
    $user = "nndtsnyysfvvfs";
    $password = "6fad217a4c0d7cc517a21147be37b5c7786d10b53cb67f9626c86305329bcd5b";
    $dbname = "d5js1e28825l9c";
    $port = "5432";
    $dbconn = pg_connect("host=$host dbname=$dbname user=$user password=$password port=$port sslmode=allow")
    or die('Could not connect: ' . pg_last_error());
    if ($_POST["type"] == "txt") {
        $value = htmlspecialchars($_POST['txt']);
        $res = pg_send_query($dbconn,"insert into texte (txt) values('$value');");
    }else{
        if (($_FILES['my_file']['name']!="")){
            // Where the file is going to be stored
            $target_dir = "upload/";
            $file = $_FILES['my_file']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['my_file']['tmp_name'];
            $path_filename_ext = $target_dir.$filename.".".$ext;
            $name = $filename.".".$ext;
        
            // Check if file already exists
            //if (file_exists($path_filename_ext)) {
            //echo "";
            //}else{
            //move_uploaded_file($temp_name,$path_filename_ext);
            //}
            //$res = pg_send_query($dbconn,"insert into hi values('$name', pg_read_binary_file('$path_filename_ext')::bytea);");
            //echo $res;    
            $file_name = $temp_name;

            $img = fopen($file_name, 'r') or die("cannot read image\n");
            $data = fread($img, filesize($file_name));

            $es_data = pg_escape_bytea($data);
            fclose($img);
            $nom = "'$filename.$ext'";
            $query = "INSERT INTO images(nom, data) Values($nom,'$es_data')";
            pg_query($dbconn, $query); 

            pg_close($dbconn); 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload successfully</title>
    <style>
        body{
            overflow : hidden;
            height : 100vh;
            width : 100vw;
            display : flex;
            align-items: center;
            justify-content : center;
            background : aqua;
        }
    </style>
</head>
<body>
    <h1>Hisaorana ianao nanaiky niara niasa taminay. :) :)</h1>
    <script>
        location.href = "https://ambohipotsy.herokuapp.com/"
    </script>
</body>
</html>
