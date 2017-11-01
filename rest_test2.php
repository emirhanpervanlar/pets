<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
    echo "GET kullanıldı";
}else if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo "POST kullanıldı";
}else {
    http_response_code(405);
}

?>