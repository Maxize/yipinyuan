<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
	<head>
		<title>Insert Data Into Database Using CodeIgniter Form</title>
		<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/styles.css" />
	</head>
	<body>
		<div id="container">
			<?php echo form_open('Entry/insert'); ?>
			<h1>Insert Data Into Database Using CodeIgniter</h1><hr/>
			<?php if (isset($message)) { ?>
				<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
			<?php } ?>
			<?php echo form_label('Title :'); ?> <?php echo form_error('title'); ?><br />
			<?php echo form_input(array('id' => 'title', 'name' => 'title')); ?><br />

			<?php echo form_label('Content :'); ?> <?php echo form_error('content'); ?><br />
			<?php echo form_textarea(array('id' => 'content', 'name' => 'content')); ?><br />

			<?php echo form_label('ColumnId:'); ?> <?php echo form_error('columnId'); ?><br />
			<?php echo form_input(array('id' => 'columnId', 'name' => 'columnId')); ?><br />

			<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
			<?php echo form_close(); ?><br/>
			<div id="fugo">

			</div>
		</div>
	</body>
</html>