<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
echo '<div class="pd-attr">';
echo $this->controller->getOpenTag();
echo '<div class="pd-title">';
echo $this->controller->getTitle();
echo '</div>';
echo $this->controller->getContent();
print " CAD Per Person";
echo $this->controller->getCloseTag();
echo '</div>';