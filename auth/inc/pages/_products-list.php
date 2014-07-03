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
              
          <div class="filter-wrap">
              
              <div class="filter">
                    <span class="filter-title">
                        Značka:
                    </span>
                    <span>
                        <input id="brand0" value="" type="checkbox"/>
                        <label for="brand0">Burton</label>
                    </span>
                    <span>
                        <input id="brand1" value="" type="checkbox"/>
                        <label for="brand1">Lakai</label>
                    </span>
                    <span>
                        <input id="brand2" value="" type="checkbox"/>
                        <label for="brand2">Vans</label>
                    </span>
                    <span>
                        <input id="brand3" value="" type="checkbox"/>
                        <label for="brand3">Adio</label>
                    </span>
                    <span>
                        <input id="brand4" value="" type="checkbox"/>
                        <label for="brand4">Fallen</label>
                    </span>
                    <span>
                        <input id="brand5" value="" type="checkbox"/>
                        <label for="brand5">Horsefeathers</label>
                    </span>
                    <span>
                        <input id="brand6" value="" type="checkbox"/>
                        <label for="brand6">Roxy</label>
                    </span>
                    <span>
                        <input id="brand7" value="" type="checkbox"/>
                        <label for="brand7">DC</label>
                    </span>
                    <span>
                        <input id="brand8" value="" type="checkbox"/>
                        <label for="brand8">Independent</label>
                    </span>
              </div>
              
              <div class="filter">
                    <span class="filter-title">
                        Kategorie:
                    </span>
                    <span>
                        <input id="cat0" value="" type="checkbox"/>
                        <label for="cat0">Boty</label>
                    </span>
                    <span>
                        <input id="cat1" value="" type="checkbox"/>
                        <label for="cat1">Trička</label>
                    </span>
                    <span>
                        <input id="cat2" value="" type="checkbox"/>
                        <label for="cat2">Zimní bundy</label>
                    </span>
                    <span>
                        <input id="cat3" value="" type="checkbox"/>
                        <label for="cat3">Jarní bundy</label>
                    </span>
                    <span>
                        <input id="cat4" value="" type="checkbox"/>
                        <label for="cat4">Kalhoty</label>
                    </span>
                    <span>
                        <input id="cat5" value="" type="checkbox"/>
                        <label for="cat5">Tílka</label>
                    </span>
                    <span>
                        <input id="cat6" value="" type="checkbox"/>
                        <label for="cat6">Kraťasy</label>
                    </span>
                    <span>
                        <input id="cat7" value="" type="checkbox"/>
                        <label for="cat7">Košile</label>
                    </span>
                    <span>
                        <input id="cat8" value="" type="checkbox"/>
                        <label for="cat8">Mikiny</label>
                    </span>
              </div>
              
              <div class="filter">
                    <span class="filter-title">
                        Určení:
                    </span>
                    <span>
                        <input id="sex0" value="" type="checkbox"/>
                        <label for="sex0">Ženy</label>
                    </span>
                    <span>
                        <input id="sex1" value="" type="checkbox"/>
                        <label for="sex1">Muži</label>
                    </span>
                    <span>
                        <input id="sex2" value="" type="checkbox"/>
                        <label for="sex2">Děti</label>
                    </span>
                    <span>
                        <input id="sex3" value="" type="checkbox"/>
                        <label for="sex3">Unisex - doplněk</label>
                    </span>
              </div>
              
              <div class="filter">
                    <span class="filter-title">
                        Velikost:
                    </span>
                    <span>
                        <input id="size0" value="" type="checkbox"/>
                        <label for="size0">XS</label>
                    </span>
                    <span>
                        <input id="size1" value="" type="checkbox"/>
                        <label for="size1">S</label>
                    </span>
                    <span>
                        <input id="size2" value="" type="checkbox"/>
                        <label for="size2">M</label>
                    </span>
                    <span>
                        <input id="size3" value="" type="checkbox"/>
                        <label for="size3">L</label>
                    </span>
                    <span>
                        <input id="size4" value="" type="checkbox"/>
                        <label for="size4">XL</label>
                    </span>
                    <span>
                        <input id="size5" value="" type="checkbox"/>
                        <label for="size5">XXL</label>
                    </span>
              </div>
              <div class="filter-wrap-bottom">
                    <p>
                        <input type="submit" value="Filtrovat" />
                    </p>
              </div>

          </div>
              
          <div class="table-wrap">
              
              <div class="table-top">
                  <h1>Seznam produktů</h1>
                  <div class="table-top-right">
                        <a class="add-link" href="products-detail.php" title="Přidat nový produkt">Přidat nový produkt</a>
                        <div id="search">
                            <form action="" method="post">
                            <fieldset>
                            <input id="search-input" type="text" title="Zde napište hledaný text" value="Název nebo ID produktu" onfocus="if(this.value=='Název nebo ID produktu') this.value=''" />
                            <input id="search-btn" type="submit" title="Kliknutím zahájíte vyhledávání" value="" />
                            </fieldset>
                            </form>
                        </div>
                  </div>
              </div>
              
              <div class="clear"></div>
              
              <div class="table-main">
              
                  <div class="filter">
                      <form action="" method="get">          
                      <p>
                          <label>Dle ID:</label> 
                          <select name="filter-id">
                              <option  value="">vzestupně</option>
                              <option  value="">sestupně</option>
                          </select>
                      </p>
                      <p>
                          <label>Dle názvu:</label> 
                          <select name="filter-name">
                              <option  value="">od A do Z</option>
                              <option  value="">od Z do A</option>
                          </select>
                      </p>
                      <p>
                          <label>Dle výrobce:</label>
                          <select name="filter-manufacturer">
                              <option  value="">od A do Z</option>
                              <option  value="">od Z do A</option>
                          </select>
                      </p>
                      <p>
                          <label>Dle ceny (cena new):</label>
                          <select name="filter-price">
                              <option  value="">od nejlevnějšího</option>
                              <option  value="">od nejdražšího</option>
                          </select>
                      </p>
                      <p>
                          <label>Dle slevy:</label>
                          <select name="filter-discount">
                              <option  value="">od největší</option>
                              <option  value="">od nejmenší</option>
                          </select>
                      </p>

                      <input type="submit" value="Seřadit" class="filter-btn" />
                      </form>
                  </div>
<?php
//require_once "../config/config.inc.php";
//require_once('inc/dbplibc.php');

$db = new db_connection(SQL_HOST,SQL_USERNAME,SQL_PASSWORD,SQL_DBNAME);
// priprava dotazu
$zarad = "'`sh_products`.`id`'";
$whx = "";
/*
if($_GET["param"]=="vyrobce") 
{
//$whx = '`kategories`.`name`="'.$_GET['vyrobce'].'"';
}elseif ($_GET["param"]=="typ")
{
//$whx = '`kategories`.`name`="'.$_GET['vyrobce'].'" AND `pohlavi`="'.$_GET['gender'].'"';
}elseif ($_GET["param"]=="urceni")
{
//$whx = '`kategories`.`name`="'.$_GET['vyrobce'].'" AND `pohlavi`="'.$_GET['gender'].'"';
}elseif ($_GET["param"]=="cena")
{
//$whx = '`kategories`.`name`="'.$_GET['vyrobce'].'" AND `pohlavi`="'.$_GET['gender'].'"';
}else{$whx = "";}
*/
//
$dotaz = $db->select('sh_products.nazev:productname', 'sh_categories.name:katname', 'sh_categories.nazev:katnazev', 'ean', 'velikost', 'datum', 'cena', 'cena_new', 'sleva', 'pohlavi', 'skladem', 'tip_produktu', 'sh_products.id', 'id_stranky', 'pictures') //
    ->from('sh_products')//
    ->joinOn('sh_product_kat', '`sh_products`.`id`=`sh_product_kat`.`produkty`', 'LEFT') //
    ->joinOn('sh_categories', '`sh_product_kat`.`kategorie`=`sh_categories`.`id`') //
    ->orderBy($zarad, 'ASC')//;
    ->where($whx);

// priprava strankovani
$limit = 10;
$pager = new pager($limit);
$pager->count = $dotaz->match(true); // spocitani celkoveho poctu polozek

// pridat limit do dotazu
$dotaz->limit($pager->offset(), $limit);

// vypis polozek
$vysledek = $dotaz->exec();
?>
                  <table class="list">
                      <tbody>
                        <tr>
                            <th class="check"><input type="checkbox" name=""/></th>
                            <th class="id">ID</th>
                            <th class="product-list-name">Název</th>
                            <th class="product-list-cat">Kategorie</th>
                            <th class="product-list-manufacturer">Výrobce</th>
                            <th class="product-list-sex">Určení</th>
                            <th class="product-list-price-old">Cena Kč (původní)</th>
                            <th class="product-list-price-new">Cena Kč (se slevou)</th>
                            <th class="product-list-discount">Sleva</th>
                            <th class="product-list-size">Velikost</th>
                            <th class="product-list-count">skladem</th>
                            <th class="action">Akce</th>
                        </tr>
                        
                        <?php
while($radek = $vysledek->row()) {                     
  echo "<tr class=\"table-hover\">
                            <td class=\"check\"><input type=\"checkbox\" name=\"\"/></td>
                            <td class=\"id\">".$radek['id']."</td>
                            <td class=\"product-list-name\"><a href=\"\" title=\"\">".$radek['productname']."</a></td>
                            <td class=\"product-list-cat\">".$radek['tip_produktu']."</td>
                            <td class=\"product-list-manufacturer\">".$radek['katnazev']."</td>
                            <td class=\"product-list-sex\">".$radek['pohlavi']."</td>
                            <td class=\"product-list-price-old\">".$radek['cena']."</td>
                            <td class=\"product-list-price-new\">".$radek['cena_new']."</td>
                            <td class=\"product-list-discount\">".$radek['sleva']."%</td>
                            <td class=\"product-list-size\">".$radek['velikost']."</td>
                            <td class=\"product-list-count\">".$radek['skladem']."</td>
                            <td class=\"action\"><a title=\"Upravit\" href=\"\">Upravit</a> | <a title=\"Smazat\" href=\"#\">Smazat</a></td>
                        </tr>";
} 
?>                      
                        
                      </tbody>
                  </table>
                  
                  
              </div>
          </div>
              
              <div class="bottom-panel">
                  
                  <div class="bottom-left">
                      <p>
                          <span>Aplikovat na vybrané:</span>
                          <select name="table-action">
                              <option  value="">Smazat</option>
                              <option  value="">Volba 2</option>
                          </select><input type="submit" value="Provést" class="btn-red" />
                      </p>
                  </div>
                  
                  <div class="bottom-right">
                          <div class="pager"><a href="">Předchozí</a>
                                <a href="">1</a>
                                <a href="" class="act">2</a>
                                <a href="">3</a>
                                <a href="">4</a>
                                <a href="">5</a>
                                <span>...</span> 
                                <a href="">13</a>
                                <a href="">Další</a>
                          </div> 
                      
                  </div>
                  
              </div>
              <div class="clear"></div>
              
          </div>
      </div>





  </body>
</html>
