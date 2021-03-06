<?php
$baseUrl = $widget->view->assetBundles['aki\player\MusicPlayerAsset']->baseUrl;
$options = $widget->options;
if(!empty($options) && !is_array($options))
{
    throw new \yii\web\HttpException('options should be array !!', 500);
}
?>
<div id="container" class="disabled" style="width: <?= isset($options['width']) ? $options['width']:'0px' ?>;height: <?= isset($options['height']) ? $options['height']:'0px' ?>">

    <div id="cover-art">
        <div id="cover-art-big"></div>
        <img id="cover-art-small" alt="cover-art-small" src="<?= $baseUrl ?>/img/default.png">
        <div class="instructions">Drop your audio files here.</div>
    </div>

    <div id="wave"></div>

    <div id="control-bar">

        <div class="player-control">
            <div id="previous-button" title="Previous"><i class="fa fa-fast-backward"></i></div>
            <div id="play-button" title="Play"><i class="fa fa-play"></i></div>
            <div id="pause-button" title="Pause"><i class="fa fa-pause"></i></div>
            <div id="stop-button" title="Stop"><i class="fa fa-stop"></i></div>
            <div id="next-button" title="Next"><i class="fa fa-fast-forward"></i></div>
            <div id="shuffle-button" title="Shuffle Off"><i class="fa fa-random"></i></div>
            <div id="repeat-button" title="Repeat Off"><i class="fa fa-refresh"><span>1</span></i></div>
        </div>

        <div id="playlist">

            <div id="track-details" title="Show playlist">
                <i class="fa fa-sort"></i>
                <p id="track-desc">There are no tracks loaded in the player.</p>
                <p id="track-time">
                    <span id="current">-</span> / <span id="total">-</span>
                </p>
            </div>

            <div id="expand-bar" class="hidden">

                <form>
                    <label for="searchBox">Search</label><div><input id="searchBox" type="search" name="search"></div>
                </form>
                <ul id="list"></ul>
            </div>

        </div>

    </div>

    <div id="drop-zone" class="hidden">Drag &amp; Drop Files Here</div>

</div>