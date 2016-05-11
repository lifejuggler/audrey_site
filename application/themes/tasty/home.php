<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main>
   <?php
    $a = new Area('Main Banner');
    $a->display($c);
    ?>
    <div class="home-container">
        <div>
            <section class="even-row main-section">
                <?php
                $a = new Area('Tour Detail');
                $a->display($c);
                ?>
            </section>
        </div>
        <div class="col-md-12 full-width">
            <section class="odd-row main-section">
                <?php
                $a = new Area('Why Tour');
                $a->display($c);
                ?>
            </section>
        </div>
        <div class="col-md-6">
            <section class="even-row main-section">
                <?php
                $a = new Area('Review');
                $a->display($c);
                ?>
            </section>
        </div>
        <div class="col-md-6">
            <section class="even-row main-section">
                <?php
                $a = new Area('Press');
                $a->display($c);
                ?>
            </section>
        </div>
    </div>
</main>

<?php  $this->inc('elements/footer.php'); ?>
