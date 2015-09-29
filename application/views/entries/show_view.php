<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
	<head>
		<title>Show the all Columns</title>
	</head>
	<body>
		<div id="container">
			<ul class="entries">
				<?php foreach($Entries as $item):?>
	        		<li><?=$item['title'];?></li>
				<?php endforeach;?>
        	</ul>

		</div>
	</body>
</html>