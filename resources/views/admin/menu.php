<?php use App\MyExtention; ?>
<ul class="sidebar-menu">
    <?php
        $child_menu = MyExtention::childMenu();
        foreach (MyExtention::parentMenu() as $row) {
    ?>
    <li class="treeview active">
        <a href="<?=URL::to($row->url);?>">
            <i class="<?php echo $row->icon;?>"></i> <span><?php echo $row->nama;?></span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <?php 
                foreach ($child_menu as $r) { 
                    if($r->parent_id == $row->id){
            ?>
                        <li><a href="<?=URL::to('administrator/m/'.$r->url);?>"><i class="fa fa-angle-double-right"></i> <?php echo $r->nama;?></a></li>
            <?php 
                    }
                }
            ?>
        </ul>
    </li>
    <?php } ?>
</ul>