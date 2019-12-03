<?php
		$file = fopen('output.csv', 'r') or die('Unable to open file!');
		
		while(($row = fgetcsv($file)) !== false){
			
				$test = $row[4];
				$jsonArray[]= $row[4];	
}	
		$test1 = $jsonArray;
		$trimmed_array = array_map('trim', $test1);
		echo json_encode($trimmed_array);

		fclose($file);
				
?>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
<label for="autocomplete">Select Email: </label>
<input id="autocomplete">


<script>
$( "#autocomplete" ).autocomplete({
  source: function( request, response ) {
	  
					
		var tags = <?php echo json_encode($trimmed_array);?>;
          var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
          response( $.grep( tags, function( item ){
              return matcher.test( item );
          }) );
      }
});
</script>

