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
              
          <div class="table-wrap">
              
              <div class="table-top">
                  <h1>Zákazníci e-shopu</h1>
                  <div class="table-top-right">
                        <a class="add-link" href="customer-detail.php" title="Přidat novou objednávku">Přidat nového zákazníka</a>
                        <div id="search">
                            <form action="" method="post">
                            <fieldset>
                            <input id="search-input" type="text" title="Zde napište hledaný text" value="ID, příjmení" onfocus="if(this.value=='ID, příjmení') this.value=''" />
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
                          <label>Dle data registrace:</label> 
                          <select name="filter-date">
                              <option  value="">od nejnovějších</option>
                              <option  value="">od nejstarších</option>
                          </select>
                      </p>
                      <p>
                          <label>Dle příjmení zákazníka:</label>
                          <select name="filter-name">
                              <option  value="">od A do Z</option>
                              <option  value="">od Z do A</option>
                          </select>
                      </p>
                      <p>
                          <label>Dle počtu objednávek:</label>
                          <select name="filter-products-count">
                              <option  value="">Vzestuně</option>
                              <option  value="">Sestupně</option>
                          </select>
                      </p>

                      <input type="submit" value="Seřadit" class="filter-btn" />
                      </form>
                  </div>
                  <table class="list">
                      <tbody>
                        <tr>
<?php
//require_once "../config/config.inc.php";
//require_once('inc/dbplibc.php');

$db = new db_connection(SQL_HOST,SQL_USERNAME,SQL_PASSWORD,SQL_DBNAME);
// priprava dotazu
$zarad = "'`id`'";
//$whx = "'`sh_products`.`id`'";
//
$dotaz = $db->select('*') //
    ->from('users_registred')//
    //->joinOn('sh_product_kat', '`sh_products`.`id`=`sh_product_kat`.`produkty`', 'LEFT') //
    //->joinOn('sh_categories', '`sh_product_kat`.`kategorie`=`sh_categories`.`id`') //
    ->orderBy($zarad, 'ASC');
    //->where($whx);

// priprava strankovani
$limit = 15;
$pager = new pager($limit);
$pager->count = $dotaz->match(true); // spocitani celkoveho poctu polozek

// pridat limit do dotazu
$dotaz->limit($pager->offset(), $limit);

// vypis polozek
$vysledek = $dotaz->exec();
?>
                            <th class="check"><input type="checkbox" name=""/></th>
                            <th class="id">ID</th>
                            <th class="customer-list-surname">Příjmení</th>
                            <th class="customer-list-name">Jméno</th>
                            <th class="customer-list-date">Datum registrace</th>
                            <th class="customer-list-count">Počet objednávek</th>
                            <th class="action">Akce</th>
                        </tr>
<?php
while($radek = $vysledek->row()) {                     
  echo "<tr class=\"table-hover\">
                            <td class=\"check\"><input type=\"checkbox\" name=\"\"/></td>
                            <td class=\"id\">".$radek['id']."</td>
                            <td class=\"customer-list-surname\">".$radek['surename']."</td>
                            <td class=\"customer-list-name\">".$radek['username']."</td>
                            <td class=\"customer-list-date\">".$radek['date_reg']."</td>
                            <td class=\"customer-list-count\">".$radek['total_order']."</td>
                            <td class=\"action\"><a title=\"Upravit\" href=\"#\">Upravit</a> | <a title=\"Smazat\" href=\"#\">Smazat</a></td>
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
