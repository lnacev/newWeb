<form enctype="multipart/form-data" action="" method="POST"> 
                Vyberte soubor:<br><input name="uploaded" type="file" /><br> 
                <input type="submit" name="upload" value="Upload" /> 
                </form>

<?php

if(isset($_POST['upload'])){ // -- Pokud přišla data z formuláře
$target = "download/"; 
$target = $target . basename( $_FILES['uploaded']['name']) ; 
$ok=1; 

$target     = eregi_replace("http://","kovani-brany.cz/download/", $target);
$target     = ereg_replace("[^A-Za-z0-9 @.-/'~:]", "http://kovani-brany.cz/download/", $target);

 
if ($uploaded_size > 1000000) 
{ 
echo "Your file is too large.<br>"; 
$ok=0; 
} 

 
if ($uploaded_type =="txt/jpg/png/gif/xls/xlsx/doc/ppt/pps/pdf") 
{ 
echo "No PHP files<br>"; 
$ok=0; 
} 


if ($ok==0) 
{ 
Echo "Sorry your file was not uploaded"; 
} 


else 
{ 
if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
{ 
echo "<p>Soubor ". basename( $_FILES['uploadedfile']['name']). " byl úspěšně nahrán.<p>Vytvořil: Suky&copy;"; 
} 
else 
{ 
echo "Sorry, there was a problem uploading your file."; 
} 
}
// -- Pokud nepřišla data z formuláře
}else{
die("Musíte vybrat soubor!");
} 
?>