<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i>Usuarios</h3>
            </div>
        </div>
        <?php print_r($usuarios); ?>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">Responsive tables</header>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Usuario</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Correo</th>
                                    <th>Perfil</th>
                                    <th>Fecha de creación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($usuarios)) : ?>
                                <?php foreach($usuarios as $uid => $usuario) : ?>
                                <tr>
                                    <td><?php echo $uid ?></td>
                                    <td><?php echo $usuario->usuario ?></td>
                                    <td><?php echo $usuario->nombres ?></td>
                                    <td><?php echo $usuario->apellidos ?></td>
                                    <td><?php echo $usuario->correo ?></td>
                                    <td><?php echo $usuario->perfil ?></td>
                                    <td><?php echo $usuario->fecha_registro ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
        
    </section>
</section>
<!--main content end-->