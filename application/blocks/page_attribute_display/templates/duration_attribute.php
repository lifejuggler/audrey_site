<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
echo '<div class="pd-attr">';
echo '<div class="pd-title">';
echo $this->controller->getTitle();
echo '</div>';
echo $this->controller->getContent();
echo '</div>';