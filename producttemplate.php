

	<?php
	$url =  $_SERVER['REQUEST_URI'];
	$prefix = '/cheeky-tatz/';
	$urlleng = strlen($url);
	$add = substr($url, strlen($prefix), $urlleng);
	$addleng = strlen($add) - 4;
	$result = substr($add, 0, $addleng);
	
	
	$xml=simplexml_load_file("products.xml") or die("Error: Cannot create object");

	for($i = 0; $i < 24; $i++)
		  {
		  $data = strtolower((string)$xml->products[$i]->pageadd);

		  if ($data == $result) {
		  	$xmlnum = $i;
		  } else {

		  }
		}
	?>
	<br>
<div class="col-border">

	<div class="col-back col-height">

		<div class="row">

			<div class="col-md-4">

				<?php echo "<img src='assets/img/" . $result . ".jpg'>"; ?>

			</div>

			<div class="col-md-8">

				<h2><?php echo (string)$xml->products[$xmlnum]->name; ?></h2>
				
				<p>
					<?php echo "<br>Dimensions: " . (string)$xml->products[$xmlnum]->height . " X " . (string)$xml->products[$xmlnum]->width; ?>
				</p>
				<br>
				<p> <?php echo "Price: £" . (string)$xml->products[$xmlnum]->price; ?>
			
			</div> <!-- /col -->

		</div> <!-- /row -->

	</div> <!-- /col-back-->

</div> <!-- /col-border -->

