<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main>
    <div class="container padding-container">
        <div class="row">
            <div class="col-md-12 general-content">
                <?php
                $a = new Area('Banner');
                $a->display($c);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 general-content">
                <?php
                $a = new Area('Content');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
    </div>
</main>

<?php  $this->inc('elements/footer.php'); ?>
