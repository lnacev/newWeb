<?php include_once "../protection.php"; 
//session_start(); 
//error_reporting(E_ALL); ini_set('display_errors', 'on'); 
require_once "../config/config.inc.php";
//var_dump($_SESSION); 
//print_r($_SERVER);
//var_dump($_SERVER);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs">
  <head>
  <title>FD CMS</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<meta http-equiv="Content-Language" content="cs" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="Author" content="" />
		<meta name="Language" content="czech" />
                <link rel="stylesheet" type="text/css" href="./../../css/style-main.css" media="screen" />

  </head>
  <body>
      <div id="top-case">
          
              <!--
              <a id="logo" href="index.php" title="Kliknutím přejdete na úvodní stranu">
                  <img src="imgs/logo.gif" alt="Logo" width="319" height="61"/>
              </a> 
              -->
              <ul id="menu">
                  <li class="menu-item selected"><a class="menu-link" href="#" title="Úvodní strana CMS">ÚVOD</a></li>
                  <li class="menu-item"><a class="menu-link" href="products-list.php" title="Produkty">PRODUKTY</a>
                      <div class="sub-menu-wrap">
                          <ul class="sub-menu">
                              <li class="sub-menu-item"><a class="sub-menu-link" href="products-list.php" title="">Výpis produktů</a></li>
                              <li class="sub-menu-item"><a class="sub-menu-link" href="products-detail.php" title="">Přidat produkt</a></li>
                          </ul>
                      </div>
                  </li>
                  <li class="menu-item"><a class="menu-link" href="manufacturer-list.php" title="Výrobci">VÝROBCI</a>
                      <div class="sub-menu-wrap">
                          <ul class="sub-menu">
                              <li class="sub-menu-item"><a class="sub-menu-link" href="manufacturer-list.php" title="">Výpis výrobců</a></li>
                              <li class="sub-menu-item"><a class="sub-menu-link" href="manufacturer-detail.php" title="">Přidat výrobce</a></li>
                          </ul>
                      </div>
                  </li>
                  <li class="menu-item"><a class="menu-link" href="category-list.php" title="Kategorie produktů">KATEGORIE</a>
                      <div class="sub-menu-wrap">
                          <ul class="sub-menu">
                              <li class="sub-menu-item"><a class="sub-menu-link" href="category-list.php" title="">Výpis kategorií</a></li>
                              <li class="sub-menu-item"><a class="sub-menu-link" href="category-detail.php" title="">Přidat kategorii</a></li>
                          </ul>
                      </div>
                  </li>
                  <li class="menu-item"><a class="menu-link" href="order-list-new-order.php" title="Objednávky">OBJEDNÁVKY</a>
                      <div class="sub-menu-wrap">
                          <ul class="sub-menu">
                              <li class="sub-menu-item"><a class="sub-menu-link" href="order-list-new-order.php" title="">Nové objednávky</a></li>
                              <li class="sub-menu-item"><a class="sub-menu-link" href="order-list-ok-order.php" title="">Vyřízené objednávky</a></li>
                              <li class="sub-menu-item"><a class="sub-menu-link" href="order-list-storno-order.php" title="">Stornované objednávky</a></li>
                              <li class="sub-menu-item"><a class="sub-menu-link" href="order-detail.php" title="">Přidat objednávku</a></li>
                          </ul>
                      </div>
                  </li>
                  <li class="menu-item"><a class="menu-link" href="customer-list.php" title="Zákazníci">ZÁKAZNÍCI</a>
                      <div class="sub-menu-wrap">
                          <ul class="sub-menu">
                              <li class="sub-menu-item"><a class="sub-menu-link" href="customer-list.php" title="">Výpis zákazníků</a></li>
                              <li class="sub-menu-item"><a class="sub-menu-link" href="customer-detail.php" title="">Přidat zákazníka</a></li>
                          </ul>
                      </div>
                  </li>
                  <li class="menu-item"><a class="menu-link" href="#" title="Správa obsahu">SPRÁVA OBSAHU</a></li>
                  <li class="menu-item"><a class="menu-link" href="#" title="Mailing - zasílání novinek">MAILING</a></li>
                  <li class="menu-item"><a class="menu-link" href="#" title="Nastavení CMS">NASTAVENÍ CMS</a></li>
              </ul>
              <div id="login-status">
                  <a href="" title="Nastavení účtu"><?php echo $_SESSION['login']; ?></a>
                  <a href="./../../../logout.php" title="Odhlásit se" class="logout-link"><!-- --></a>
              </div>
              <div class="clear"></div>
          
      </div>
      <div id="main-case">
          <div id="main-wrap">
              
          <div class="detail-wrap">
              
              <div class="detail-top">
                  <h1>Detail zákazníka</h1>
                  <div class="detail-top-right">
                        <a class="list-link" href="customer-list.php" title="Výpis zákazníků">Výpis zákazníků</a>
                  </div>
              </div>
              
              <div class="clear"></div>
              
              <div class="detail-main">
              
                  <div class="detail">
                      <form action="" method="get"> 
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Registrace  a heslo</span></p>
                              <p>
                                      <label for="registration-date">Datum registrace:</label>
                                      <input class="text-input" type="text" value="" id="registration-date" name="registration-date" title="Datum registrace"/>
                              </p>
                              <p>
                                      <label for="password">Heslo:</label>
                                      <input class="text-input" type="text" value="" id="password" name="password" title="Heslo"/>
                              </p>   
                          </fieldset>
                          
                          <div class="clear"></div>
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Info o zákazníkovi</span></p>
                              <p>
                                      <label for="customer-name">Jméno:</label>
                                      <input class="text-input" type="text" value="" id="customer-name" name="customer-name" title="Jméno"/>
                              </p>
                              <p>
                                      <label for="customer-surname">Příjmení:</label>
                                      <input class="text-input" type="text" value="" id="customer-surname" name="customer-surname" title="Příjmení"/>
                              </p>
                              <p>
                                      <label for="customer-phone">Telefon:</label>
                                      <input class="text-input" type="text" value="" id="customer-phone" name="customer-phone" title="Telefon"/>
                              </p>
                              <p>
                                      <label for="customer-mail">E-mail:</label>
                                      <input class="text-input" type="text" value="" id="customer-mail" name="customer-mail" title="E-mail"/>
                              </p>
                              <p>
                                      <label for="customer-city">Město:</label>
                                      <input class="text-input" type="text" value="" id="customer-city" name="customer-city" title="Město"/>
                              </p>
                              <p>
                                      <label for="customer-street">Ulice a ČP:</label>
                                      <input class="text-input" type="text" value="" id="customer-street" name="customer-street" title="Ulice a ČP"/>
                              </p>
                              <p>
                                      <label for="customer-post">PSČ:</label>
                                      <input class="text-input" type="text" value="" id="customer-post" name="customer-post" title="PSČ"/>
                              </p>
                                 
                          </fieldset>
                          
                          <div class="clear"></div>
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Firemní údaje</span></p>
                              <p>
                                      <label for="customer-company">Firma:</label>
                                      <input class="text-input" type="text" value="" id="customer-company" name="customer-company" title="Firma"/>
                              </p>
                              <p>
                                      <label for="customer-ic">IČ:</label>
                                      <input class="text-input" type="text" value="" id="customer-ic" name="customer-ic" title="IČ"/>
                              </p>
                              <p>
                                      <label for="customer-dic">DIČ:</label>
                                      <input class="text-input" type="text" value="" id="customer-dic" name="customer-dic" title="DIČ"/>
                              </p>
                                 
                          </fieldset>
                          
                          <div class="clear"></div>
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Adresa pro doručení</span></p>
                              <p>
                                      <label for="customer-city-2">Město:</label>
                                      <input class="text-input" type="text" value="" id="customer-city-2" name="customer-city-2" title="Město"/>
                              </p>
                              <p>
                                      <label for="customer-street-2">Ulice a ČP:</label>
                                      <input class="text-input" type="text" value="" id="customer-street-2" name="customer-street-2" title="Ulice a ČP"/>
                              </p>
                              <p>
                                      <label for="customer-post-2">PSČ:</label>
                                      <input class="text-input" type="text" value="" id="customer-post-2" name="customer-post-2" title="PSČ"/>
                              </p>
                                 
                          </fieldset>
                          
                          <div class="clear"></div>
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Poznámka k zákazníkovi</span></p>
                              <p><textarea cols="100" rows="3">něco o zákazníkovi</textarea></p>
                          </fieldset>
                          
                          <div class="clear"></div>
                   
                      </form>
                  </div>
                 
                  
                  
              </div>
          </div>
              
              <div class="bottom-panel">
                  
                  <div class="bottom-left">
                      <p>
                          <input type="submit" value="Uložit" class="btn-red" /><span> nebo </span><input type="submit" value="Vrátit se zpět" class="btn-blue" />
                      </p>
                  </div>
                  
                  <div class="bottom-right">
                          
                      
                  </div>
                  
              </div>
              <div class="clear"></div>
              
          </div>
      </div>




  </body>
</html>
