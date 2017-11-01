<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
    echo "GET kullanıldı";
    include("rest_test.php");
    deliver_responsive(100,'book found','deneme');
   http_response_code(200);
}else if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo "POST kullanıldı";
        include("config.php");

        if(isset($_POST['Name'])){
            $name = $_POST['Name'];
            $pos = $_POST['Position'];
            $team = $_POST['Team'];
            $sql_server = "INSERT INTO deneme (name,position,team) VALUES('$name','$pos','$team')";
            if($conn->query($sql_server)){
                echo "veri eklendi";
                http_response_code(201);
            }else{
                echo "veri eklenemedi";
                http_response_code(404);
            }
        }




}else {
    http_response_code(405);
}

?>

