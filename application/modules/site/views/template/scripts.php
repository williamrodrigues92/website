<!-- Libraries JS  -->
<?php
	foreach ($this->config->item('lib_js') as $library => $files) {
		foreach ($files as $file) {
			echo '<script src="'.base_url().'assets/libraries/'.$library.'/js/'. $file .'"></script>'.PHP_EOL;
		}
	}
?>

<!-- JS -->
<?php foreach ($this->config->item('js') as $value): ?>
	<script src="<?php echo base_url() .'assets/scripts/'.$value ?>"></script>
<?php endforeach ?>

</body>
</html>