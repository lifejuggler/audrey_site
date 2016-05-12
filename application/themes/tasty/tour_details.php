<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<main>
  <div class="container padding-container">
    <?php
    $a = new Area('Title');
    $a->enableGridContainer();
    $a->setAreaGridMaximumColumns(12);
    $a->display($c);
    ?>
    <div class="row placard">
      <div class="col-md-7 col-xs-12 col-content">
          <?php
            $a = new Area('Picture');
            $a->display($c);
          ?>
      </div>
      <div class="col-md-5 col-xs-12 col-content tour-info">
        <div >
          <div class="col-xs-4 info-group-first">
            <span class="info-title">Location</span>
          </div>
          <div class="col-xs-8 info-group-first">
            <?php
              $a = new Area('Location');
              $a->display($c);
            ?>
          </div>
        </div>
        <div >
          <div class="col-xs-4 info-group">
            <span class="info-title">Features</span>
          </div>
          <div class="col-xs-8 info-group">
            <?php
              $a = new Area('Features');
              $a->display($c);
            ?>
          </div>
        </div>
        <div >
          <div class="col-xs-4 info-group">
            <span class="info-title">Group Size</span>
          </div>
          <div class="col-xs-8 info-group">
            <?php
              $a = new Area('Size');
              $a->display($c);
            ?>
          </div>
        </div>
        <div >
          <div class="col-xs-4 info-group">
            <span class="info-title">Time</span>
          </div>
          <div class="col-xs-8 info-group">
            <?php
              $a = new Area('Time');
              $a->display($c);
            ?>
          </div>
        </div>
        <div >
          <div class="col-xs-4 info-group">
            <span class="info-title">Price</span>
          </div>
          <div class="col-xs-8 info-group">
            <?php
              $a = new Area('Price');
              $a->display($c);
            ?>
          </div>
        </div>
        <div >
          <div class="col-xs-12 info-group">
            <?php
                $a = new Area('Misc');
                $a->display($c);
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-container">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs reset-margin" role="tablist">
        <li role="presentation" class="active"><a href="#desc" aria-controls="desc" role="tab" data-toggle="tab">Description</a></li>
        <li role="presentation"><a href="#detail" aria-controls="detail" role="tab" data-toggle="tab">Detail</a></li>
        <li role="presentation"><a href="#faq" aria-controls="faq" role="tab" data-toggle="tab">FAQ</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content white-background">
        <div role="tabpanel" class="tab-pane active" id="desc">
            <?php
              $a = new Area( 'Description section' );
              $a->enableGridContainer();
              $a->setAreaGridMaximumColumns(12);
              $a->display($c);
            ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="detail">
            <?php
              $a = new Area( 'Detail section' );
              $a->enableGridContainer();
              $a->setAreaGridMaximumColumns(12);
              $a->display($c);
            ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="faq">
            <?php
              $a = new Area( 'FAQ section' );
              $a->enableGridContainer();
              $a->setAreaGridMaximumColumns(12);
              $a->display($c);
            ?>
        </div>
      </div>
    </div>
    <script id="eztixKioskLinkId" type="text/javascript">
        (function(){
            var ezLoad = document.createElement('script');
            ezLoad.type = 'text/javascript';
            ezLoad.src = 'https://kiosk.eztix.co/js/ver' + parseInt(Math.random() * 2147483647) + '/kioskIntegrated/kioskIntegratedExtLoader.js';
            var s = document.getElementById('eztixKioskLinkId');
            s.parentNode.insertBefore(ezLoad, s.nextSibling);
        })();
    </script>
  </div>
</main>
<?php  $this->inc('elements/footer.php'); ?>
