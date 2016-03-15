<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main>
    <div class="container">
        <div class="row page-title">
            <div class="col-md-12 col-content">
                <?php
                $a = new Area('Title');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>   
        <div class="row top-detail">     
            <div class="col-md-8">
                <?php
                $a = new Area('Picture');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(8);
                $a->display($c);
                ?>
            </div>
            <div class="col-md-4">
                <?php
                $a = new Area('Detail');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(4);
                $a->display($c);
                ?>
            </div>
        </div>
        <div class="row bottom-detail">
            <div class="col-md-12 col-content">
                <?php
                $a = new Area('Bottom');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
    </div>

</main>

<?php  $this->inc('elements/footer.php'); ?>
