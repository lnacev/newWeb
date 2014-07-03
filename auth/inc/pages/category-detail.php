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
                  <li class="menu-item selected"><a class="menu-link" href="index.php" title="Úvodní strana CMS">ÚVOD</a></li>
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
                  <h1>Přidání nové kategorie</h1>
                  <div class="detail-top-right">
                        <a class="list-link" href="category-list.php" title="Výpis kategorií">Výpis kategorií</a>
                  </div>
              </div>
              
              <div class="clear"></div>
              
              <div class="detail-main">
              
                  <div class="detail">
                      <form action="" method="get"> 
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Hlavní informace</span></p>
                              <p>
                                      <label for="category-name">Název kategorie:</label>
                                      <input class="text-input" type="text" value="" id="category-name" name="category-name" title="Název kategorie"/>
                              </p>
                              <p>
                                      <label for="date">Datum vložení:</label>
                                      <input class="text-input" type="text" value="Vyplní se automaticky" id="date" name="date" title="Datum vložení"/>
                              </p>    
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
