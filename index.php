<?php
    session_start();
    include 'cabecera.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <?php 
                include 'tabulacion.php';
                include 'segunLaOpcion.php' 
            ?>    
            </div>
<!--            <div class="col-sm-0">
                <div class="jumbotron">
                    <h3>Documencial</h3>
                    <ul>
                        <li>Manager</li>
                        <li>Task</li>
                        <li>PRO_RGC_Task</li>
                    </ul>
                </div>
            </div>-->
        </div>
    </div>
<?php
    include 'pie.php';
?>
