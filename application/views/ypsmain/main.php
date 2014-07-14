<?php $img = base_url() . 'assets/images/views/main/';  ?>
<?php $css = base_url() . 'assets/styles/views/main/';  ?>
<?php $js = base_url()  . 'assets/scripts/views/main/'; ?>
<?php $base = base_url(). 'index.php/main/'; ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="E-Business - Yerpa Pro Salud">
        <meta name="author" content="Q-Informatica">
        <link rel="shortcut icon" href="<?php echo $img . '../../favicon.ico';?>">
        <title>Yerpa Pro Salud</title>
        <link href="<?php echo $css . 'bootstrap.min.css'; ?>" rel="stylesheet">    
        <link href="<?php echo $css . 'theme.css'; ?>" rel="stylesheet">    
        <link href="<?php echo $css . 'component.css'; ?>" rel="stylesheet">          
        <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>   
    </head>
    <body>  
    <?= $top_menu; ?>
    <?= $menu_lateral;?>
    <div class="container">                       
        <div id ="mensaje"></div>        
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div id="CuerpoPagina" >
            <div class="page-header">
<!--                <h4>Tablero de Control </h4>
                <em><small>Aqui podra visualizar todos los valores significativos del sistema.</small></em>-->
            </div>
            <div class="row"></div>
            <!-- Optional: clear the XS cols if their content doesn't match in height -->
            <div class="clearfix visible-xs"></div>            
        </div>
    </div>
    <hr>        
    <!--Edit Modal-->		
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content"></div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="msgBox" tabindex="-1" role="dialog" aria-labelledby="msgBoxLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="msgBoxLabel">Modal title</h4>
                </div>
                <div class="modal-body" id="msgBoxContent"></div>
                <div class="modal-footer">
                    <button type="button" id="msgBoxCerrar" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" Id="msgBoxAceptar" style="visibility: hidden;" class="btn btn-primary">Aceptar</button>
                </div>
            </div>
        </div>
    </div>    
        <?php echo $footer; ?>
    <script src="<?php echo $js . 'jquery-2.1.0.js'; ?>"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>   
    <script src="<?php echo $js . 'classie.js'; ?>"></script>
    <script src="<?php echo $js . 'main.js'; ?>"></script>    
</body>
</html>






      


               


      
