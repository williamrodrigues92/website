<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Contato via Site</title>
	<style type="text/css">
		*                   { padding:0px; margin:0px; }
		body                { font-family:Arial, Tahoma, Verdana; font-size:12px; color:#333; }

		div#fundo           { width:100%; height:100px; }
		div#cabecalho       { width:700px; height:100px; margin:auto; position:relative;}
		div#cabecalho h1    { position:absolute; top:30px; left:0px; font-size:20px; color:#000; width: 240px;}
		div#cabecalho h2    { position:absolute; top:30px; right:40px; font-size:16px; z-index:9999999;}
		div#cabecalho p     { position:absolute; top:50px; right:40px; z-index:9999999;}
		div#content         { width:700px; margin:auto; margin-top:15px; }
		div.campo           { width:120px;float: left;clear: both ; height: 20px}
		div.valor           { float: left; width: 580px}
		th					{ text-align:left;}
		hr					{ border:1px solid #CCC; border-bottom:none;}
	</style>
</head>
<body>
	<div id="fundo">
		<div id="cabecalho">
			<h1><?php echo $this->config->item('titulo_projeto') ?></h1>
			<h2 style="color:#000;"><?php echo $campos['titulo'] ?></h2>
			<p style="color:#000;"><strong>Data:</strong> <?php echo date('d/m/Y') ?> e <strong>Hora:</strong> <?php echo date('H:i:s') ?> do cadastro.</p>

		</div>
		<!-- Cabeçalho -->
	</div>
	<!-- Fundo -->

	<div id="content">
		<?php
		foreach ($campos as $key => $value) {
			if($key != 'titulo' && $key != 'pagina' && $key != 'enviar') {
                $key = str_replace('_', ' ', $key);
				echo '<div class="campo"><strong>'.ucfirst($key).' : </strong></div><div class="valor">'.$value.'</div>';
			}
		}
		?>
		<p style="height:50px;clear: both">&nbsp;</p>

		<p style="color:#004B98; font-size:12px; float:right;"><small>Formmail por: </small></p>

	</div>
	<!-- Content -->
</body>
</html>