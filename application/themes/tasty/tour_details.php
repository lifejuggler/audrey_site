<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<main>
    <div class="container beige-background"> 
        <?php
        $a = new Area('Title');
        $a->enableGridContainer();
        $a->setAreaGridMaximumColumns(12);
        $a->display($c);
        ?>  
        <div class="row white-background placard">     
            <div class="col-md-8 col-content">
                <?php
                  $a = new Area('Picture');
                  $a->display($c);
                ?>
            </div>
            <div class="col-md-4 col-content tour-info">
              <div class="info-group">
                <span class="info-title">From</span>
                <br/>
                <span class="bold-title"><?php
                print $c->getAttribute('price_per_person');
                ?> CAD</span>
                <span class="info-title"> Per Person</span>
              </div>
              <div class="info-group">
                <span class="info-title"><i class="fa fa-clock-o" aria-hidden="true"></i> Duration: </span> 
                <span class="info-result"><?php
                print $c->getAttribute('tour_duration');
                ?></span>
              </div>
              <div class="info-group">
                <span class="info-title">
                <i class="fa fa-calendar" aria-hidden="true"></i> Time: </span>
                <span class="info-result"><?php
                print $c->getAttribute('tour_time');
                ?></span>
              </div>
              <div class="info-group">
                <span class="info-title"><i class="fa fa-users" aria-hidden="true"></i> Max Group Size:</span>
                <span class="info-result"><?php
                print $c->getAttribute('max_group_size');
                ?></span>
              </div>
              <?php
                  $a = new Area('Misc');
                  $a->display($c);
                ?>
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
    </div>
</main>
<?php  $this->inc('elements/footer.php'); ?>
