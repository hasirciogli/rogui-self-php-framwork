<?php 
define("SITE_DOC_ROOT",$_SERVER['DOCUMENT_ROOT']);

require SITE_DOC_ROOT . "/app/Configs/Config.php";
require SITE_DOC_ROOT . "./app/Database/Database.php";




require SITE_DOC_ROOT . "/app/Models/LoggerModel.php";

require SITE_DOC_ROOT . "/app/Controllers/LoggerController.php";


require SITE_DOC_ROOT . "/app/public/router/Route.php";

//$sController = new SessionController();
//$sController->checkAndStartSession(); next version its 2.x


class Loader {
    public function getJson($req_uri){
        $result = null;

        if($req_uri != "/")
        {
            foreach (explode('/', $req_uri) as $key => $value) {
                if($value != "" || $value != null)
                {
                    $result[] = [
                        "key" => $key,
                        "value" => $value
                    ];
                }
            }
        } else { $result[] = [ "key" => 0, "value" => '/' ]; }

        return $result;
    }
}


?>