<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
    echo "GET kullanıldı";
   http_response_code(200);
}else if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo "POST kullanıldı";

        include("rest_test.php");
        deliver_responsive(100,'book found','deneme');
        http_response_code(200);


}else {
    http_response_code(405);
}

?>

