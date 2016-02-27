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
						<div class="blog_item"><h2 style="font-style:italic; color:red; text-align:center;">Логвинова Ирина Анатольевна</h2>
                       <h3 style="font-style:italic; color:red; text-align:center;"> воспитатель группы «Веснушки»</h3><br>
                        <p style='text-align:center; font-weight:bold;'>" "<br><br><br><br></p>
                           <p style="font-weight:bold;">Мой материал:</p>
                            <ul>
                                <li><a href="logv_i_a/masha-misha.php" target="_blank">Дидактическая игра «Поиграй с Машей и Мишей»</a></li>
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