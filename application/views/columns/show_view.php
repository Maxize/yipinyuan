<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
	<head>
		<title>Show the all Columns</title>
	</head>
	<body>
		<div id="container">
			<ul class="columns">
				<?php foreach($ColumnsList as $item):?>
	        		<li>
	        			<a href="<?=site_url("Entry/show/{$item['id']}");?>">
	        				<?=$item['content'];?>
	        			</a>
	        		</li>
				<?php endforeach;?>
        	</ul>

		</div>
	</body>
</html>