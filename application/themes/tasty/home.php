<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main>
   <?php
    $a = new Area('Main Banner');
    $a->display($c);
    ?>
    <div class="home-container">
        <div class="col-md-12">
            <section class="even-row main-section">
                <?php
                $a = new Area('Tour Detail');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </section>
        </div>
        <div class="col-md-12">
            <section class="odd-row main-section">
                <?php
                $a = new Area('Why Tour');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </section>
        </div>
        <div class="col-md-6">
            <section class="even-row main-section">
                <?php
                $a = new Area('Review');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </section>
        </div>
        <div class="col-md-6">
            <section class="even-row main-section">
                <?php
                $a = new Area('Press');
                $a->enableGridContainer();
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </section>
        </div>
    </div>
</main>

<?php  $this->inc('elements/footer.php'); ?>
