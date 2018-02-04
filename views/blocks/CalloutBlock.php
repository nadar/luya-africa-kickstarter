<?php
/**
 * View file for block: CalloutBlock 
 *
 * File has been created with `block/create` command. 
 *
 * @param $this->extraValue('bgImage');
 * @param $this->varValue('bgImage');
 * @param $this->varValue('text');
 * @param $this->varValue('title');
 *
 * @var $this \luya\cms\base\PhpBlockView
 */

$bgImage = $this->extraValue('bgImage') ? $this->extraValue('bgImage')->source : '';
$title = $this->varValue('title');
$text = $this->varValue('text');
?>

<? if (!empty($title || $text)): ?>
    <div class="callout-image py-5" style="background-image: url('<?= $bgImage ?>')">
        <div class="container">
            <div class="callout-content bg-info p-3">
                <h1><?= $title ?></h1>
                <p><?= $text ?></p>
            </div>
        </div>
    </div>
<? endif; ?>

