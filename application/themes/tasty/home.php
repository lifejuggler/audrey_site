<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main>
   <?php
    $a = new Area('Main Banner');
    $a->display($c);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-content">
                <?php
                $a = new Area('Tour Detail');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-content">
                <?php
                $a = new Area('Why Tour');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-content">
                <?php
                $a = new Area('Review');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
    </div>

</main>

<?php  $this->inc('elements/footer.php'); ?>
