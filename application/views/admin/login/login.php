<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('common/head') ?>
    <body>

        <!-- container section start -->
        <section id="container" class="">

            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Iniciar Sesión</h3>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">Form Elements</header>
                                    <div class="panel-body">
                                        
                                        <form method="post" class="form-horizontal">
                                                
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Usuario</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="usuario">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Contraseña</label>
                                                <div class="col-sm-5">
                                                    <input type="password" class="form-control" name="clave">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <input type="submit" class="btn btn-primary" name="submit" value="Ingresar">
                                                    <!-- <button class="btn btn-primary" type="submit">Submit</button> -->
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                            </section>
                        </div>
                    </div>
                    
                </section>
            </section>
            <!--main content end-->

        </section>

    </body>
</html>
