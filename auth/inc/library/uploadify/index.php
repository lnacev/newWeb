<?php //session_start(); 
//error_reporting(E_ALL); ini_set('display_errors', 'on'); // *** Ladící režim ***
//require_once "inc/config/db_conn.inc.php";
//var_dump($_SESSION); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>My Upload Implementation</title>
    <link rel="stylesheet" type="text/css" href="uploadify.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="jquery.uploadify-3.1.min.js"></script>
    <script type="text/javascript">
    $(function() {
        $('#file_upload').uploadify({
            'checkExisting' : 'check-exists.php',
            'auto'     : false,
            'swf'      : 'uploadify.swf',
            'uploader' : 'uploadify.php',
            'onUploadSuccess' : function(file, data, response) {
        alert('Soubory byly uloženy do: ' + data);
    }// Your options here
        });
    });
    </script>
</head>
<body>
<input type="file" name="file_upload" id="file_upload" />
<a href="javascript:$('#file_upload').uploadify('cancel')">Zruš první soubor</a> | <a href="javascript:$('#file_upload').uploadify('cancel', '*')">Vyčisti frontu</a> | <a href="javascript:$('#file_upload').uploadify('upload', '*')">Nahraj všechny soubory</a>
</body>
</html>