<?php

require_once("config.php");

echo session_save_path()."<br>";
var_dump(session_status());

switch(session_status()) {
    
    case PHP_SESSION_DISABLED:
    echo "<br>";
    echo "As sessões estão desabilitadas.";
    break;
    case PHP_SESSION_NONE:
    echo "<br>";
    echo "As sessões estão habilitadas, mas não existem.";
    break;
    case PHP_SESSION_ACTIVE:
    echo "<br>";
    echo "As sessões estão habilitadas, apenas uma existe.";

}

?>