<html>
<head>
    <title>Meu Site</title>
</head>
<body>
<h1>
    Este é o Topo
</h1>
<a href="<?php echo BASE_URL;?>">Home</a>
<a href="<?php echo BASE_URL;?>galeria">Galeria</a>
<hr>
<?php $this->loadViewInTemplate($viewName,$viewDados);?>
</body>
</html>