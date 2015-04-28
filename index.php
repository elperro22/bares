<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bares App</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" data-theme="b" id="pageLogin">
    
    <div data-role="header">
        <h1>Login Bares APP</h1>
    </div>
    
    <div data-role="content">
        <p><a href="#pageMenu" data-transition="slide" data-role="button">Entrar</a></p>
    </div>
    
    <!--<div data-role="footer">
        <h2>Pie de Página</h2>
    </div>-->
    
    
</div>


<div data-role="page" data-theme="b" id="pageMenu">
    
    <div data-role="header">
        <a href="#pageLogin" data-rel="back">Volver</a><h1>Menu</h1>
    </div>
    
    <div data-role="content">
        <p>Este es el menu principal</p>
    </div>
    
    <div data-role="footer" class="ui-bar" data-position="fixed">
        <h2>Pie de Página</h2>
    </div>
    
    
</div>

</body>
</html>