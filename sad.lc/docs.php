<?php
$title='Образование|МБДОУ№10"Дружные ребята"';
require('head.php');
?>
<style>
    button {
     width: 96%;
        height: 80%;
        
    }
    
    #table_01{
        width: 100%;
    }
    #table_02 table tr td div{
       width:245px; 
    }
    
</style>
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
                            <div class="container hidden-lg" style="padding-left:25px; padding-top:20px;" id="table_01">
                            <table>
                                <tr>
                                    <td>
                                     <div style="font-weight:bold; text-align:center; border: 1px solid grey; width:200px; height:110%; padding:5 5 5 5;">
                            <div>СанПиН<br><br>
                            <a class="fancybox" data-fancybox-group="group" href="docs/Npd.png"><img src="docs/NPD.png" class="img-rounded" alt="alt"  width='68%' /></a><br><br>
                                <button><a href="docs/NPD.doc">Загрузить полную версию документа</a></button></div><br>
                               </a> 
                            </div></td>
                                    <td>
                                     <div style="font-weight:bold; text-align:center; border: 1px solid grey; width:200px;  height:110%; padding:5 5 5 5;">
                            <div>Федеральный закон "Об образовании в РФ"<br>
                            <a class="fancybox" data-fancybox-group="group" href="docs/Fed_z_o_rf.png"><img src="docs/Fed_z_o_rf.png" class="img-rounded" alt="alt"  width='68%' /></a><br><br>
                                <button><a href="docs/Fed_z_o_rf.rtf">Загрузить полную версию документа</a></button></div><br>
                               </a> 
                            </div></td>
                                    <td> 
                                    <div style="font-weight:bold; text-align:center; border: 1px solid grey; width:200px; height:110%; padding:5 5 5 5;">
                            <div>ГОСТ 12.0.003-74<br><br>
                            <a class="fancybox" data-fancybox-group="group" href="docs/gost_pf.png"><img src="docs/gost_pf.png" class="img-rounded" alt="alt"  width='76%' /></a><br><br>
                                <button><a href="docs/gost_pf.pdf">Загрузить полную версию документа</a></button></div><br>
                               </a> 
                            </div></td>
                                </tr>
                            </table>
                            </div>
                              <div class="container hidden-sm hidden-xs hidden-md" style="padding-left:25px; padding-top:20px;" id="table_02">
                            <table>
                                <tr>
                                    <td>
                                     <div style="font-weight:bold; text-align:center; border: 1px solid grey; height:110%; padding:5 5 5 5;">
                            <div>СанПиН<br><br>
                            <a class="fancybox" data-fancybox-group="group" href="docs/Npd.png"><img src="docs/NPD.png" class="img-rounded" alt="alt"  width='68%' /></a><br><br>
                                <button><a href="docs/NPD.doc">Загрузить полную версию документа</a></button></div><br>
                               </a> 
                            </div></td>
                                    <td>
                                     <div style="font-weight:bold; text-align:center; border: 1px solid grey;  height:110%; padding:5 5 5 5;">
                            <div>Федеральный закон "Об образовании в РФ"<br>
                            <a class="fancybox" data-fancybox-group="group" href="docs/Fed_z_o_rf.png"><img src="docs/Fed_z_o_rf.png" class="img-rounded" alt="alt"  width='68%' /></a><br><br>
                                <button><a href="docs/Fed_z_o_rf.rtf">Загрузить полную версию документа</a></button></div><br>
                               </a> 
                            </div></td>
                                    <td> 
                                    <div style="font-weight:bold; text-align:center; border: 1px solid grey; height:110%; padding:5 5 5 5;">
                            <div>ГОСТ 12.0.003-74<br><br>
                            <a class="fancybox" data-fancybox-group="group" href="docs/gost_pf.png"><img src="docs/gost_pf.png" class="img-rounded" alt="alt"  width='76%' /></a><br><br>
                                <button><a href="docs/gost_pf.pdf">Загрузить полную версию документа</a></button></div><br>
                               </a> 
                            </div></td>
                                </tr>
                            </table>
                            </div>
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