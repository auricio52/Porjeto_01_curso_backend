<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="descriptoin" content='Descrição do meu website'>
        <meta name="author" content='Aurício'>
        <meta name='keywords' content='Palavras, chave, separadas, por, virgula'>

        <title>Projeto 01</title>

        <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href='<?php echo INCLUDE_PATH; ?>css/styles.css'>
    </head>
    <body>
        <base base="<?php echo INCLUDE_PATH; ?>" />
        
        <?php 
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';

            switch($url) {
                case 'depoimentos':
                    echo "<target target='depoimentos' />";
                    break;
                case 'servicos':
                    echo "<target target='servicos' />";
                    break;
            }
        ?>

        <header>
           <div class="center">
                <div class="logo left">
                    <a href="<?php echo INCLUDE_PATH; ?>">Logomarca</a>
                </div>

                <nav class="desktop right">
                    <ul>
                        <li>
                            <a href='<?php echo INCLUDE_PATH; ?>home'>Home</a>
                        </li>
                        <li>
                            <a href='<?php echo INCLUDE_PATH; ?>depoimentos'>Depoimentos</a>
                        </li>
                        <li>
                            <a href='<?php echo INCLUDE_PATH; ?>servicos'>Serviços</a>
                        </li>
                        <li>
                            <a realtime='contato' href='<?php echo INCLUDE_PATH; ?>contato'>Contato</a>
                        </li>
                    </ul>
                </nav>

                <nav class="mobile right">
                    <div class="botao-menu-mobile">
                        <i class="fa fa-bars" aria-hidden="true "></i>
                    </div>

                    <ul>
                        <li>
                            <a href='<?php echo INCLUDE_PATH; ?>home'>Home</a>
                        </li>
                        <li>
                            <a href='<?php echo INCLUDE_PATH; ?>depoimentos'>Depoimentos</a>
                        </li>
                        <li>
                            <a href='<?php echo INCLUDE_PATH; ?>servicos'>Serviços</a>
                        </li>
                        <li>
                            <a realtime='contato' href='<?php echo INCLUDE_PATH; ?>contato'>Contato</a>
                        </li>
                    </ul>
                </nav>

                <div class="clear"></div>
           </div>
        </header>

        <div class="container-principal">
            <?php 
                if(file_exists('pages/'.$url.'.php')) {
                    include('pages/'.$url.'.php');
                } else {
                    if ($url != 'depoimentos' && $url != 'servicos') {
                        $pagina404 = true;
                        include('./pages/404.php');
                    } else {
                        include('pages/home.php');
                    }
                }
            ?>
        </div>
        
        <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'?>>
            <div class="center">
                <p>Todos os direitos reservados</p>
            </div>
        </footer>

        <script src="<?php echo INCLUDE_PATH; ?>js/fontawesome.min.js"></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/jquery.min.js"></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

        <?php 
            if ($url == 'home' || $url == '') {
        ?>
            <script src="<?php echo INCLUDE_PATH; ?>/js/slider.js"></script>
        <?php } ?>

        <?php 
            if ($url == 'contato') {
        ?>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.expgkey=AIzaSyDHPNQxozOzQSZ-djvWGOBUoT_qH4"></script>
            <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
        <?php } ?>
    </body>
</html>