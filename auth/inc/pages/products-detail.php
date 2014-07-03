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
                  <h1>Přidání nového produktu</h1>
                  <div class="detail-top-right">
                        <a class="list-link" href="products-list.php" title="Přidat nový produkt">Výpis produktů</a>
                  </div>
              </div>
              
              <div class="clear"></div>
              
              <div class="detail-main">
              
                  <div class="detail">
                      <form action="" method="get"> 
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Hlavní informace</span></p>
                              <p>
                                      <label for="product-name">Název produktu:</label>
                                      <input class="text-input" type="text" value="" id="product-name" name="product-name" title="Název produktu"/>
                              </p>
                              <p>
                                      <label for="ean-code">EAN kód:</label>
                                      <input class="text-input" type="text" value="" id="ean-code" name="ean-code" title="EAN"/>
                              </p>
                              <p>
                                      <label for="price-original">Velkoobchodní cena:</label>
                                      <input class="text-input" type="text" value="" id="price-original" name="price-original" title="Velkoobchodní cena"/>
                              </p>    
                          </fieldset>
                          
                          <div class="clear"></div>
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Zařazení produktu</span></p>
                              <p>
                                      <label for="product-brand">Výrobce:</label>
                                      <select class="text-select" id="product-brand" name="product-brand" title="Název produktu">
                                            <option value="brand1">Burton</option>
                                            <option value="brand2">Lakai</option>
                                            <option value="brand3">Adio</option>
                                            <option value="brand4">DVS</option>
                                      </select>
                              </p>
                              <p>
                                      <label for="product-category">Kategorie:</label>
                                      <select class="text-select" id="product-category" name="product-category" title="Kategorie produktu">
                                            <option value="category1">Mikiny</option>
                                            <option value="category2">Jarní bundy</option>
                                            <option value="category3">Trička</option>
                                            <option value="category4">Kalhoty</option>
                                      </select>
                              </p>
                              <p>
                                      <label for="product-sex">Určení:</label>
                                      <select class="text-select" id="product-sex" name="product-sex" title="Určení produktu">
                                            <option value="sex1">Muži</option>
                                            <option value="sex2">Ženy</option>
                                            <option value="sex3">Děti</option>
                                            <option value="sex4">Unisex</option>
                                      </select>
                              </p>
                                 
                          </fieldset>
                          
                          <div class="clear"></div>
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Cena produktu</span></p>
                              <p>
                                      <label for="price-eshop1">Cena e-shop:</label>
                                      <input class="text-input" type="text" value="" id="price-eshop1" name="price-eshop1" title="Cena produktu v e-shopu"/>
                              </p>
                              <p>
                                      <label for="discount">Sleva:</label>
                                      <select class="text-select" id="discount" name="discount" title="Sleva">
                                            <option value="discount-no">NE</option>
                                            <option value="discount1">5%</option>
                                            <option value="discount2">10%</option>
                                            <option value="discount3">15%</option>
                                            <option value="discount4">20%</option>
                                            <option value="discount5">25%</option>
                                            <option value="discount6">30%</option>
                                            <option value="discount7">35%</option>
                                            <option value="discount8">40%</option>
                                            <option value="discount9">45%</option>
                                            <option value="discount10">50%</option>
                                            <option value="discount11">55%</option>
                                            <option value="discount12">60%</option>
                                      </select>
                              </p>
                              <p>
                                      <label for="price-eshop2">Cena e-shop se slevou:</label>
                                      <input class="text-input" type="text" value="dopočítá se automaticky" id="price-eshop2" name="price-eshop2" title="Cena produktu v e-shopu po se slevou"/>
                              </p>
                              <p>
                                  <label>Zvýraznění slevy:</label>
                                      <input type="radio" name="discount-info-radio" value="ano"/>ANO
                                      <input type="radio" name="discount-info-radio" value="ne" checked="checked"/>NE
                              </p>
                                 
                          </fieldset>
                          
                          <div class="clear"></div>
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Dostupnost a doba dodání</span></p>
                              <p>
                                      <label for="warehouse">Dostupnost (skladem):</label>
                                      <select class="text-select" id="warehouse" name="warehouse" title="Dostupnost produktu">
                                            <option value="warehouse1">ANO</option>
                                            <option value="warehouse2">NE</option>
                                      </select>
                              </p>
                              <p>
                                      <label for="delivery">Doba dodání:</label>
                                      <select class="text-select" id="delivery" name="delivery" title="Doba dodání">
                                            <option value="delivery1">3 dny</option>
                                            <option value="delivery2">4 dny</option>
                                            <option value="delivery3">5 dní</option>
                                            <option value="delivery4">1 týden</option>
                                            <option value="delivery5">2 týdny</option>
                                            <option value="delivery6">neznámá</option>
                                      </select>
                              </p>
                             
                                 
                          </fieldset>
                          
                          <div class="clear"></div>
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Velikost - oblečení</span></p>
                              <p>
                                  <label>Velikost a počet Ks:</label>      
                                  <!--<input type="checkbox" name=""/>-->
                                        <label class="small-label" for="count-xs">XS</label>
                                        <input class="count-input" type="text" value="" id="count-xs" name="count-xs" title="Počet kusů velikosti XS"/>
                                        <label class="small-label" for="count-s">S</label>
                                        <input class="count-input" type="text" value="" id="count-s" name="count-s" title="Počet kusů velikosti S"/>
                                        <label class="small-label" for="count-m">M</label>
                                        <input class="count-input" type="text" value="" id="count-m" name="count-m" title="Počet kusů velikosti M"/>
                                        <label class="small-label" for="count-l">L</label>
                                        <input class="count-input" type="text" value="" id="count-l" name="count-l" title="Počet kusů velikosti L"/>
                                        <label class="small-label" for="count-xl">XL</label>
                                        <input class="count-input" type="text" value="" id="count-xl" name="count-xl" title="Počet kusů velikosti XL"/>
                                        <label class="small-label" for="count-xxl">XXL</label>
                                        <input class="count-input" type="text" value="" id="count-xxl" name="count-xxl" title="Počet kusů velikosti XXL"/> 
                                        <input class="check-input" id="no-size" type="checkbox" name=""/><label for="no-size">Produkt nemá velikost</label>
                              </p>
   
                          </fieldset>
                          
                          <div class="clear"></div>
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Popis produktu</span></p>
                              <p><textarea cols="100" rows="3"></textarea></p>
                          </fieldset>
                          
                          <div class="clear"></div>
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Foto produktu</span></p>
                              <p>
                                    <span class="product-image"><img src="imgs-products/bunda.jpeg" alt="foto 1"/><br /><a href="">Smazat</a></span>
                                    <span class="product-image"><img src="imgs-products/bunda.jpeg" alt="foto 1"/><br /><a href="">Smazat</a></span>
                                    <span class="product-image"><img src="imgs-products/bunda.jpeg" alt="foto 1"/><br /><a href="">Smazat</a></span>
                              </p>
                              <div class="clear"></div>
                              <p>
                                      <label for="foto1">Foto produktu 1 (hlavní):</label>
                                      <input class="file-input" id="foto1" type="file" name="foto1" accept="image/*,text/plain" />
                              </p>
                              <p>
                                      <label for="foto2">Foto produktu 2:</label>
                                      <input class="file-input" id="foto2" type="file" name="foto2" accept="image/*,text/plain" />
                              </p>
                              <p>
                                      <label for="foto3">Foto produktu 3:</label>
                                      <input class="file-input" id="foto3" type="file" name="foto" accept="image/*,text/plain" />
                              </p>    
                          </fieldset>
                          
                          <div class="clear"></div>
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Produkt status info</span></p>
                              <p>
                                  <input class="check-input" id="product-action" type="checkbox" name=""/><label for="product-action">Akce</label>
                                  <input class="check-input" id="product-new" type="checkbox" name=""/><label for="product-new">Novinka</label>
                                  <input class="check-input" id="product-free-transport" type="checkbox" name=""/><label for="product-free-transport">Doprava zdarma</label>
                              </p>
                          </fieldset>
                          <div class="clear"></div>
                          
                          <fieldset class="detail-fieldset">
                              <p><span class="fieldset-title">Zobrazení produktu v eshopu</span></p>
                              <p>
                                      <label>Zobrazení v eshopu:</label>
                                      <input type="radio" name="product-view-radio" value="ano" checked="checked"/>ANO
                                      <input type="radio" name="product-view-radio" value="ne"/>NE
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
                          <input type="submit" value="Přidat produkt" class="btn-red" /><span> nebo </span><input type="submit" value="Vrátit se zpět" class="btn-blue" />
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
