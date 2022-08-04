<?php
// include_once APPPATH . 'Views/header.php';
?>

<h1>Edit permission</h1>
<?php
// print_r($allpermission);

// foreach($allpermission as $key => $status){
//     echo '<div class="row">';
//     echo $key;
//     echo '<br>';
//     foreach($status as $menu => $menu_status){
//         echo $menu.':'.$menu_status.'<br>';
//     }
//     echo '</div>';
// }
?>

<div class="row">
    <div class="col-6">


        <?php
        print_r($allpermission);

        

        foreach ($allpermission as $status => $detail_status) {
        ?>
            <form action="<?= base_url('permission/edit') ?>" method="post">
                <?php
                echo $status;
                echo '<br>';
                foreach ($detail_status as $menu => $menu_status) {
                    echo $menu . ':';
                ?>
                    <input type="radio" name="<?= $menu_status['pid'] ?>" value="1" <?php if ($menu_status['menu_status'] == 1) {echo 'checked';} ?>>on
                    <input type="radio" name="<?= $menu_status['pid'] ?>" value="0" <?php if ($menu_status['menu_status'] == 0) {echo 'checked';} ?>>off
                    <br>


                <?php
                }
                ?>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php
        }
        ?>

        <!-- add permission -->
        <form action="<?= base_url('permission/add') ?>" method="post">
        <label for="">สถานะ</label>
        <input type="text" name="role">

        <!-- submit -->
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    </div>
</div>





<?php
// include_once APPPATH . 'Views/footer.php';
?>