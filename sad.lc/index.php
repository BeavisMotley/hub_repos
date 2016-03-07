<?php
    $title='Главная|МБДОУ№10"Дружные ребята"';
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
                             <p><h2 style='text-align:center; color:red; font-family:georgia;'>Добро  пожаловать  на  наш  сайт!</h2>
                              <p style='text-align:center'><img src="img/kto_my.jpg" id="we" class="img_responsive" style="border-radius: 3em/3em;"/></p>
    &nbsp;&nbsp;&nbsp;&nbsp;<p style="font-weight:bold; margin: 0; font-size: 1.0em;">Мы  надеемся,  что  путешествие  по  его  страницам  поможет  Вам  познакомиться  с  жизнью  нашего  дошкольного учреждения.<br>
     &nbsp;&nbsp;&nbsp;&nbsp;Дошкольное образовательное  учреждение № 10 «Дружные ребята»  -  это  по  семейному  уютный,  теплый  дом,  в  котором  насыщенный  день  пролетает  незаметно.  Дом,  где  детям  разрешается  быть  детьми.  Мы  стараемся  проникнуть  в  каждое  сердце,  поселить  в  нем  радость,  любовь  и  доброту.<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Мы  любим  детей  и  с  удовольствием  наблюдаем,  как  они  растут  и  развиваются.  У  нас  есть  возможности  предложить  Вашим  детям  хорошие  условия  для  обучения,  развития,  игр  и  отдыха.  Педагоги  помогут  Вашим  детям  стать  более  самостоятельными,  общительными,  активными,  любознательными,  развить свои  творческие  и  познавательные  способности.</p><br>
                            <div class="tbl" ><p style='text-align:center; color:red; font-size:1.5em'>На нашем сайте Вы cможете </p>
<p style="color:red; text-align:center; font-size:1.3em">Узнать:</p>
<p style="font-size:1.3em;padding-left:15px;"><img src="img/confirm.png" class="img_responsive"/>последние новости детского сада</p>
<p style="font-size:1.3em;padding-left:15px;"><img src="img/confirm.png" class="img_responsive"/>о жизни детей в группах</p>
<p style="color:red; text-align:center;font-size:1.3em">Найти:</p>
<p style="font-size:1.3em;padding-left:15px;"><img src="img/confirm.png" class="img_responsive"/>информацию о детском садике и реализуемых педагогическим &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;коллективом образовательных программах воспитания и обучения &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;детей дошкольного возраста</p>
<p style="font-size:1.3em;padding-left:15px;"><img src="img/confirm.png" class="img_responsive"/>советы специалистов детского сада</p>
<p style="color: red ; text-align:center;font-size:1.3em">Посетить фотогалерею.</p>
<p style="color: red; text-align:center; font-size:1.3em">Задать интересующие Вас вопросы по воспитанию и обучению детей работникам детского сада.</p>


                            <h2 style="color:red; text-align:center">Надеемся,  что  наш  сайт  будет  полезен  Вам!</h2>
                              <br>
                            </div></p>
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