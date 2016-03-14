<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main>
    <?php
    $a = new Area('Page Header');
    $a->enableGridContainer();
    $a->display($c);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-content">
                <?php
                $a = new Area('Top');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-content">
                <?php
                $a = new Area('Middle');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
        <div class="row">
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

    <?php
    $a = new Area('Page Footer');
    $a->enableGridContainer();
    $a->display($c);
    ?>

</main>

<?php  $this->inc('elements/footer.php'); ?>
