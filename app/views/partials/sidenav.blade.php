<div class="sidenav">
    <ul>
        <?php
            for($i = 0; $i < count($options); $i++){
                ?><li><a href=<?=$anchors[$i]?>><?=$options[$i]?></a></li><?php
            }
        ?>
    </ul>
</div>
