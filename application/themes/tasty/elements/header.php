<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_top.php');
$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();

?>

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-5 col-xs-12">
                <?php
                $a = new GlobalArea('Header Site Title');
                $a->display();
                ?>
            </div>
            <div class="navbar-section <?php if ($displayThirdColumn) { ?>col-lg-6 col-sm-9 col-xs-12<?php } else { ?>col-sm-9 col-xs-12<?php } ?>">
                <?php
                $a = new GlobalArea('Header Navigation');
                $a->display();
                ?>
            </div>
            <?php if ($displayThirdColumn) { ?>
                <div class="col-lg-2 col-sm-2 col-xs-12">
                    <?php
                    $a = new GlobalArea('Book Now');
                    $a->display();
                    ?>
                    </div>
            <?php } ?>
        </div>
    </div>
</header>