<?php
    $title='Физкультура и спорт|Голубица О.И.|МБДОУ№10"Дружные ребята"';
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
						<div class="blog_item"><h2 style="font-style:italic; color:red; text-align:center;">Голубица Ольга Игоревна</h2>
                       <h3 style="font-style:italic; color:red; text-align:center;"> инструктор по физической культуре</h3>
                        <p style='text-align:center; font-style:italic; font-weight:bold;'>""<br><br><br><br></p>
                           <p style="font-weight:bold;">Мой материал:</p>
                            <ul>
                                <li><a href="golub_o_i/t_t_feb.php" target="_blank">23 февраля</a></li>
                               
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