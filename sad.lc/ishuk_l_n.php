<?php
    $title='Воспитатель группы "Капельки"|Ищук Л.Н.|МБДОУ№10"Дружные ребята"';
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
						<div class="blog_item"><h2 style="font-style:italic; color:red; text-align:center;">Ищук Людмила Николаевна</h2>
                       <h3 style="font-style:italic; color:red; text-align:center;"> воспитатель группы «Капельки»</h3>
                        <p style='text-align:center; font-style:italic; font-weight:bold;'>"Мое педагогическое кредо – любить, понимать, помогать!"<br><br><br><br></p>
                           <p style="font-weight:bold;">Мой материал:</p>
                            <ul>
                                <li><a href="ishuk_l_n/esse.php" target="_blank">Мое эссе</a></li>
                                <li><a href="ishuk_l_n/we_exp.php" target="_blank">Мы-экспериментируем!</a></li>
                                <li><a href="ishuk_l_n/risuem_tvorim.php" target="_blank">Рисуем. Творим. Удивляем.</a></li>
                            </ul>
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