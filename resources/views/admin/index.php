<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>.:: Administrator ::.</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?=URL::to('admin/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=URL::to('admin/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=URL::to('admin/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=URL::to('admin/css/AdminLTE.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=URL::to('datatables/dataTables.bootstrap.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=URL::to('admin/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=URL::to('admin/js/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" />

        <script src="<?=URL::to('admin/js/jquery.min.js');?>"></script>
        <script src="<?=URL::to('admin/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?=URL::to('admin/js/bootbox.min.js');?>" type="text/javascript"></script>
        <script src="<?=URL::to('admin/js/jquery.form.min.js');?>" type="text/javascript"></script>
        <script src="<?=URL::to('datatables/js/jquery.dataTables.js');?>" type="text/javascript"></script>
        <script src="<?=URL::to('datatables/dataTables.bootstrap.js');?>" type="text/javascript"></script>
        <script src="<?=URL::to('admin/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');?>" type="text/javascript"></script>
        <script src="<?=URL::to('admin/js/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>" type="text/javascript"></script>
        <script src="<?=URL::to('admin/js/AdminLTE/app.js');?>" type="text/javascript"></script>
    </head>
    <body class="skin-blue">
        <?php echo view('admin.header');?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">
                    <?php echo view('admin.menu');?>
                </section>
            </aside>

            <aside class="right-side">
                <?=isset($content) ? $content:"";?>
            </aside>
        </div>
    </body>
</html>