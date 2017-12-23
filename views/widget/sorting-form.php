<?php
    $listConfig = [
        'Выберите вариант сортировки',
        'По дате &uarr;',
        'По дате &darr;',
    ];
    $category = Components\Request::getParams('sorting');
    $category ? $category : 0;
?>

<form action="" id="sorting-form" name="sorting-form" method="get">
    <div class="form-item">
        <select name="sorting">
            <?php 
            for($i=0; $i<count($listConfig); $i++) { 
                if($i == $category) { ?>
                    <option <?= 'selected' ?> value="<?= $i ?>"><?= $listConfig[$i] ?></option>
                <?php 
                } else {  ?>
                    <option value="<?= $i ?>"><?= $listConfig[$i] ?></option>
                <?php 
                } 
            } ?>
        </select>
        <input type="submit" value="Сортировать">
    </div>
</form>
