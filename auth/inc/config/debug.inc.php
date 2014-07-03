<?php
// Debugger
require_once "inc/debug/NDebugger.php";
// NDebugger
//NDebugger::enable(NDebugger::PRODUCTION);
NDebugger::$strictMode=FALSE;NDebugger::enable(NDebugger::DEVELOPMENT);  
//NDebugger::$strictMode=FALSE;NDebugger::enable(NDebugger::DEVELOPMENT);
//NDebugger::$strictMode=TRUE;NDebugger::enable(NDebugger::DEVELOPMENT);
//ndebug();
// OTHER
define("BASE","http://".$_SERVER['SERVER_NAME']."/");
//
?>