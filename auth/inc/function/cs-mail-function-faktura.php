<?php

function autoUTF($s)
{
    // detect UTF-8
    if (preg_match('#[\x80-\x{1FF}\x{2000}-\x{3FFF}]#u', $s))
        return $s;
    // detect WINDOWS-1250
    if (preg_match('#[\x7F-\x9F\xBC]#', $s))
        return iconv('WINDOWS-1250', 'UTF-8', $s);
    // assume ISO-8859-2
    return iconv('ISO-8859-2', 'UTF-8', $s);
}

function cs_mail ($to, $predmet, $zprava, $head = "")
       {  $predmet = "=?utf-8?B?".base64_encode(autoUTF ($predmet))."?=";
          $head .= "MIME-Version: 1.0\n";
          $head .= "Content-Type: text/html; charset=\"utf-8\"\n";
          $head .= "Content-Transfer-Encoding: base64\n";
          $zprava = base64_encode (autoUTF ($zprava));
          return mail ($to, $predmet, $zprava, $head); }

?>

<?php
//$mail = "lnacev@seznam.cz";
$mail = $e_mail;
$predmet = "Stav Vaši objednávky - kmracing.cz";
$zprava = "<strong>Vážený zákazníku,</strong><br />\r\n";
$zprava .= "<br />\r\n";
$zprava .= "Vaši objednávku jsme právě přijali do systému pod číslem:<strong> ".$faktura.".</strong><br />\r\n";
$zprava .= "<br />\r\n";
$zprava .= "<strong>Přehled objednávky:</strong><br />\r\n";
$zprava .= "---------------------------------------------------------------------------<br />\r\n";
$zprava .= "<strong>Vaše kontaktní údaje:</strong><br />\r\n";
$zprava .= "<br />\r\n";
$zprava .= "<strong>Jméno a příjmení:</strong> ".$first_name." ".$last_name."<br />\r\n";
$zprava .= "<strong>e-mail:</strong> ".$e_mail."<br />\r\n";
$zprava .= "<strong>Telefon:</strong> ".$phone."<br />\r\n";
$zprava .= "<strong>Ulice:</strong> ".$street."<br />\r\n";
$zprava .= "<strong>Město:</strong> ".$city."<br />\r\n";
$zprava .= "<strong>PSČ:</strong> ".$post_code."<br />\r\n";
$zprava .= "---------------------------------------------------------------------------\r\n";
$zprava .= "<br />\r\n";
$zprava .= "Produkt: <strong>".$text."</strong><br />\r\n";
$zprava .= "Doprava: <strong>".$transfer."</strong><br />\r\n";
$zprava .= "Platba: <strong>".$payment."</strong><br />\r\n";
$zprava .= "Celková cena za produkt/produkty: <strong>".$celkova_cena3." Kč</strong><br />\r\n";
$zprava .= "---------------------------------------------------------------------------<br />\r\n";
$zprava .= "<strong>Text:</strong><br />\r\n";
$zprava .= $message1."<br />\r\n";
$zprava .= "---------------------------------------------------------------------------<br />\r\n";
$zprava .= "<br />\r\n";
$zprava .= "<strong>Děkujeme a přejeme hezký zbytek dne.</strong><br />\r\n";
$zprava .= "<br />\r\n";
$zprava .= "<strong>www.kmracing.cz</strong><br />\r\n";
//
?>