<?php


if (isset($_GET["page"])) {
    $pn = $_GET["page"];
} else {
    $pn = 1;
}

$totalPages = ceil(20 / 5);


if ($pn > 1) {
    ?>
    <a class="previous-page" id="prev-page"
                    href="?page=<?php echo $pn-1;?>"
                    title="Previous Page"><span>&#10094; Previous</span></a>
            <?php }?>
<?php
if (($pn - 1) > 1) {
    ?>
    <a href='?page=1'><div class='page-a-link'>1</div></a>
                <div class='page-before-after'>...</div>
<?php
}

for ($i = ($pn - 1); $i <= ($pn + 1); $i ++) {
    if ($i < 1)
        continue;
    if ($i > $totalPages)
        break;
    if ($i == $pn) {
        $class = "active";
    } else {
        $class = "page-a-link";
    }
    ?>
    <a href='?page=<?php echo $i; ?>'>
                    <div class='<?php echo $class; ?>'><?php echo $i; ?></div>
                </a>
    <?php
}

if (($totalPages - ($pn + 1)) >= 1) {
    ?>
    <div class='page-before-after'>...</div>
<?php
}
if (($totalPages - ($pn + 1)) > 0) {
    if ($pn == $totalPages) {
        $class = "active";
    } else {
        $class = "page-a-link";
    }
    ?>
    <a href='?page=<?php echo $totalPages; ?>'><div
                        class='<?php echo $class; ?>'><?php echo $totalPages; ?></div></a> 
    <?php
}
?>
    <?php
    if ($pn < $totalPages) {
        ?>
				<a class="next" id="next-page"
                    href="?page=<?php echo ($pn+1);?>"
                    title="Next Page"><span>Next &#10095;</span></a> 
        <?php
    }
    ?>
