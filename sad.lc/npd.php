<?php
$title='Образование|МБДОУ№10"Дружные ребята"';
require('head.php');
?>
</head>
<body>
    <?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    require('header.php');
    ?>
    <section class="main_content">
        <div class="container" >
            <div class="row">
                <div class="col-md-12 ">
                    <div class="col-md-3 ">
                        <?php
                        require('news.php');
                        ?>	
                    </div>
                    <div class="col-md-9">
                        <div class="content-text">
                            <div class="blog_item">
                            <div style="font-weight:bold; text-align:center;"><a class="fancybox" data-fancybox-group="group" href="docs/Npd.png"><img src="docs/NPD.png" class="img-rounded" alt="alt"  width='68%' /></a><br><br>
                                <button><a href="docs/NPD.doc">Загрузить полную версию документа</a></button></div><br>
                               </a><br><br> 
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    <?php
    require('footer.php');
    ?>