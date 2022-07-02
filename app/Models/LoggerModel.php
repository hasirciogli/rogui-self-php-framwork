<?php

class LoggerModel {
    protected function _LogError($log){
        echo ('<script type="text/javascript">window.open("' . $_SERVER['DOCUMENT_ROOT']."/error.php?err=". $log . '", "_blank");</script>');
    }
}

?>
