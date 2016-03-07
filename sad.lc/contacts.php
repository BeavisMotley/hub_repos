<?php
    $title='Контакты|МБДОУ№10"Дружные ребята"';
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
                             <p><h4 style="text-align:center; font-weight:bold;">
Муниципальное бюджетное дошкольное образовательное учреждение «Детский сад комбинированного вида №10 «Дружные ребята» муниципального образования городской округ Симферополь
Республики Крым</h4>
расположено в центре г. Симферополя , по адресу: ул. Горького, 29.<br> 
График работы: с 7.00 до 19 час. 00 мин.<br>
Часы и дни приема по личным вопросам:<br>
•	 Понедельник – с 10.00 до 13.00<br>
•	 Четверг — с 10.00 до 12.00<br>
Телефон:  (3652) 273321<br>
Электронная почта: super.drugnyedeti10@yandex.uа<br>
                            <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=y15vhxdn5-dnOy_PHZyi-jR6GOG9Oq0e&width=553&height=442&lang=ru_RU&sourceType=constructor"></script>

                            </p>
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