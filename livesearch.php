<?php
$xml=simplexml_load_file("products.xml") or die("Error: Cannot create object");
$q= strtolower($_GET["q"]);


for($i = 0; $i < 24; $i++)
  {
  $data = strtolower((string)$xml->products[$i]->name);
  $out = "<div class='suggestion'>
              <div class='row'>
                <div class='suggestion-img-div col-md-2'>
                  <img class='suggestion-img' src='assets/img/" . $xml->products[$i]->pageadd . ".jpg'>
                </div>
                <div class='suggestion-link col-md-10'><a href='http://localhost:8080/cheeky-tatz/" . $xml->products[$i]->pageadd . ".php'>" . $xml->products[$i]->name . 
                  "</a><br> £" . $xml->products[$i]->price . "
                </div>
              </div>
            </div>"; 
  if (strpos($data, $q)) {
	    echo $out;
  }
}
?>
