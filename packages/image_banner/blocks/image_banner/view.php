<?php defined('C5_EXECUTE') or die("Access Denied.");

$c = Page::getCurrentPage();
print '<div class="image-box">';
if (is_object($f)) {
    if ($maxWidth > 0 || $maxHeight > 0) {
        $im = Core::make('helper/image');
        $thumb = $im->getThumbnail(
            $f,
            $maxWidth,
            $maxHeight
        ); //<-- set these 2 numbers to max width and height of thumbnails
        $tag = new \HtmlObject\Image();
        $tag->src($thumb->src)->width($thumb->width)->height($thumb->height);
    } else {
        $image = Core::make('html/image', array($f));
        $tag = $image->getTag();
    }
    $tag->addClass('ccm-image-block img-banner img-responsive bID-'.$bID);
    if ($altText) {
        $tag->alt(h($altText));
    }
    if ($title) {
        $tag->title(h($title));
    }
    if ($linkURL):
        print '<a href="' . $linkURL . '">';
    endif;

    print $tag;

    if ($linkURL):
        print '</a>';
    endif;
    print '<div class="caption-box">
                <div class="img-banner-header">'. $title .'</div>
                <hr />
                <div class="caption-content-container">
                <div class="col-md-10 col-xs-12 detail-content">
                    <div class="img-banner-body"><p>' . $caption . '</p></div>
                </div>
                <div class="col-md-2 col-xs-12 detail-button-container"><a class="banner-detail-button" href="'. $linkURL .'">Learn More</a></div></div></div>';
} else if ($c->isEditMode()) { ?>

    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty Image Block.')?></div>

<?php } ?>
</div>
<?php if(is_object($foS)) { ?>
<script>
$(function() {
    $('.bID-<?php print $bID;?>')
        .mouseover(function(e){$(this).attr("src", '<?php print $imgPath["hover"];?>');})
        .mouseout(function(e){$(this).attr("src", '<?php print $imgPath["default"];?>');});
});
</script>
<?php } ?>
