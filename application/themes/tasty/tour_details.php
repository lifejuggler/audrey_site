<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main>
    <div class="container"> 
        <?php
        $a = new Area('Title');
        $a->enableGridContainer();
        $a->setAreaGridMaximumColumns(12);
        $a->display($c);
        ?>  
        <div class="row">     
            <div class="col-md-8 col-content">
                <?php
                $a = new Area('Picture');
                $a->display($c);
                ?>
            </div>
            <div class="col-md-4 col-content">
                <?php
                $a = new Area('Detail');
                $a->display($c);
                ?>
            </div>
        </div>
        <?php
        $a = new Area('Bottom');
        $a->enableGridContainer();
        $a->setAreaGridMaximumColumns(12);
        $a->display($c);
        ?>
    </div>

</main>

<?php  $this->inc('elements/footer.php'); ?>
