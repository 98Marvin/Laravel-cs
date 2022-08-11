<!-- You views don't have to be always in blade -->
<h1><?=$heading; ?></h1>

<?php
	foreach ($listings as $listing) {
		echo '<h2>'.$listing['title'].'</h2>';
		echo $listing['description'].'<br>';
	}

?> 