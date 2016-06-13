<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('common/head') ?>
    <body>

        <!-- container section start -->
        <section id="container" class="">
            <?php $this->load->view('common/header') ?>

            <?php $this->load->view('common/menu') ?>

            <?php $this->load->view($_page) ?>
        </section>
        <!-- container section end -->
        <?php $this->load->view('common/footer_scripts') ?>

    </body>
</html>
