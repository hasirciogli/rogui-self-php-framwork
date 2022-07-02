<?php
require_once "./app/loader.php";

$loader = new Loader();
$bUri = $loader->getJson($_SERVER["REQUEST_URI"]);


$if_routed_on_link_ok = false;
ROUTER_BASE::Route($bUri[0]["value"] , "api", function (){
    $if_routed_on_link_ok = true;
});

ROUTER_BASE::Route($bUri[0]["value"] , "/", function (){
    $if_routed_on_link_ok = true;
    require SITE_DOC_ROOT."/app/public/views/home.view.php";
});

if (!$if_routed_on_link_ok && $bUri[0]["value"] != "/") {
    header("Location: /");
}


//$dbx = new Database();
//$z = $dbx->CallSql("INSERT INTO users (username, password, token, online, money) VALUES ('Mustafa', 'Hasırcıoğlu', '31', 1, 199954)");
//$z->execute();
?>
<title>"here is your title!"</title>
<link rel="stylesheet" href="./app/public/lib/css/all-pages-loader-css.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./app/public/lib/js/all-pages-loader-js.js"></script>
