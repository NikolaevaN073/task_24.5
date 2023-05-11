<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/template_style.css">
    <title>Клининговая компания</title>
</head>
<body>
    <header>
        <div class="head-content">
            <div class="logo">
                <a href="/"><h4>Клининговая</h4><h4>компания</h4></a>                
            </div>
            <div class="menu">
                <ul>
                    <li><a href="/" class="nav-item">Главная</a></li>
                    <li><a href="index.php?url=about" class="nav-item">О нас</a></li>
                    <li><a href="index.php?url=portfolio" class="nav-item">Наши работы</a></li>
                    <li><a href="index.php?url=contacts" class="nav-item">Контакты</a></li>                
                </ul>
            </div>   
        </div> 
    </header>
    <div class="content">
        <?php include $content_view; ?>
    </div>
    <div class="foot-line"></div>
        <div class="foot-content">  
            <div class="foot-left">
                <div class="logo">
                    <p><span>&copy;</span>  Клининговая компания 2023 </p> 
                </div>
            </div>                 
            <div class="foot-right">                    
                <div class="footer-phone">+7 (999) 987 65 43</div>
            </div>  
        </div>
    </footer>    
</body>
</html>
