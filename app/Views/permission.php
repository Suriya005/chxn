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
                    <select name="<?= $menu_status['pid']  ?>">
                        <option value="1" <?php if ($menu_status['menu_status']  == 1) {
                                                echo 'selected';
                                            } ?>>เปิด</option>
                        <option value="0" <?php if ($menu_status['menu_status']  == 0) {
                                                echo 'selected';
                                            } ?>>ปิด</option>
                    </select>
                    <br>


                <?php
                }
                ?>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        <?php
        }
        ?>



    </div>
</div>





<?php
// include_once APPPATH . 'Views/footer.php';
?>