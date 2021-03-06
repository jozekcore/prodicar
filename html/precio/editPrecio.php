
<?php include(HTML_DIR . 'overall/header.php'); ?>

<head>
 <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 </head>
 <body class="index-page">

   <?php include(HTML_DIR . '/overall/topnav.php'); ?>

   <div class="main main-raised">
     <div class="container">
       <div class="section text-center section-landing">
  <?php
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Compleato!</strong> Los datos  han sido editados.
    </div>';
  }

  if(isset($_GET['error'])) {
    echo '<div class="alert alert-dismissible alert-danger">
      <strong>Error!</strong></strong> Los datos no pueden estar vacios.
    </div>';
  }
  ?>

<!-- <div class="row container">
   <div class="pull-right">
     <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
          <a class="mbr-buttons__btn btn btn-danger" href="?view=configforos">GESTIONAR FOROS</a>
      </li></ul></div>
       <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
           <a class="mbr-buttons__btn btn btn-danger" href="?view=categorias">GESTIONAR CATEGORÍAS</a>
       </li></ul></div>
       <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
           <a class="mbr-buttons__btn btn btn-danger" href="?view=categorias&mode=add">CREAR CATEGORÍA</a>
       </li></ul></div>
     </div> -->

    <!-- <ol class="breadcrumb">
      <li><a href="?view=index"><i class="fa fa-tags"></i> Categorías</a></li>
    </ol>
</div> -->

          <div class="col-sm-12">
            <div class="wrapper">
              <h2>Editar tipo, corte y precio</h2>
                 <div class="row cajas">
                   <div class="col-md-12">
                    <form class="form-horizontal" action="?view=precio&mode=edit2&id2=<?php echo $_GET['id2']; ?>" method="POST" enctype="application/x-www-form-urlencoded">
                      <fieldset>
                        <div class="form-group">
                          <label for="inputEmail" class="col-lg-2 control-label">Modificación de datos</label>
                            <div class="col-lg-10">
                              <table>
                              <input type="text" class="form-control" name="tipo" placeholder="Tipo" value="<?php echo $_precio[$_GET['id2']]['tipo']; ?>">
                              <input type="text" class="form-control" name="corte" placeholder="Corte" value="<?php echo $_precio[$_GET['id2']]['corte']; ?>">
                              <input type="text" class="form-control" name="precio" placeholder="Precio" value="<?php echo $_precio[$_GET['id2']]['precio']; ?>">
                            </table>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <a href="?view=categorias" class="btn btn-default">Volver a la tabla</a>
                            <button type="submit" class="btn btn-primary">Editar</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
    </div>
<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
