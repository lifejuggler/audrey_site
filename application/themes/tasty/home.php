<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main>
   <?php
    $a = new Area('Main Banner');
    $a->display($c);
    ?>
    <div class="home-container">
        <section class="even-row main-section">
            <?php
            $a = new Area('Tour Detail');
            $a->enableGridContainer();
            $a->setAreaGridMaximumColumns(12);
            $a->display($c);
            ?>
        </section>
        <section class="odd-row main-section">
            <?php
            $a = new Area('Why Tour');
            $a->enableGridContainer();
            $a->setAreaGridMaximumColumns(12);
            $a->display($c);
            ?>
        </section>
        <section class="even-row main-section">
            <?php
            $a = new Area('Review');
            $a->enableGridContainer();
            $a->setAreaGridMaximumColumns(12);
            $a->display($c);
            ?>
        </section>
    </div>

</main>

<?php  $this->inc('elements/footer.php'); ?>
