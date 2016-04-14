<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSocial = new GlobalArea('Footer Social');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();
$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();

?>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<footer id="footer-theme">
    <?php if ($displayFirstSection) { ?>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <?php
                $a = new GlobalArea('Footer Site Title');
                $a->display();
                ?>
            </div>
            <div class="col-sm-3">
                <?php
                $a = new GlobalArea('Footer Social');
                $a->display();
                ?>
            </div>
        </div>
    </div>
    </section>
    <?php } ?>
</footer>


<?php $this->inc('elements/footer_bottom.php');?>
