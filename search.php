<?php
include 'page-head.php';
?> 

<h1>Search results</h1>


<div class="row">

	<div id="search-options" class="col-md-3">

		<div class="col-back">

			<h3>Search options</h3>

			<form class="search-options-form">

				<div class="form-group">

					<h4><u>Season</u></h4>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							Easter
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							Halloween
						</label>
					</div>
	
			  	</div> <!-- /form-group -->

				<div class="form-group">

					<h4><u>Stencil type</u></h4>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							Glitter
						</label>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							Reusable
						</label>
					</div>
			  
			  	</div> <!-- /form-group -->

			</form>

		</div> <!-- /search-options -->
	
	</div> <!-- /col -->

	<div class="col-md-9">

<?php
$xml=simplexml_load_file("products.xml") or die("Error: Cannot create object");
$result = $_GET['search'];
$resultsNum = 0;
if($result=='') {
	echo "No search results. Please try again.";
} else {
	for($i = 0; $i < 24; $i++){
	    $data = strtolower((string)$xml->products[$i]->name);
	    $out = "<div class='results-border'>
	  			<div class='results-row'>
	          		<div class='row'>
	              		<div class='col-md-4'>
	              			<img class='results-img' src='assets/img/" . $xml->products[$i]->pageadd . ".jpg'>
	              		</div>
	              		<div class='results-title col-md-6'>" . $xml->products[$i]->name . "		                  			
	               			<br> £" . $xml->products[$i]->price . "</div>
	               			<div class='col-md-2'>
								<a href='". $xml->products[$i]->pageadd .".php'><button class='btn btn-lg btn-default results-info-btn'>See details</button></a></td>
							</div>
	              		</div>
	            	</div>
	            </div>"; 
		if (strpos($data, $result)) {
			echo $out;
		  	$resultsNum += 1;
		}
	}
}
	if ($resultsNum == 0){
	  	echo "No results found. Please try again.";
    }

	?>
	
	</div> <!-- col -->

</div> <!-- /row -->

<?php
include 'page-foot.php'
?>