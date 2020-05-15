<?php

use yii\helpers\Url;
use humhub\libs\Html;

?>

<div class="dropdown search-menu" style="width: 100%; height: 100%; margin: auto;">
    <?= Html::beginForm(Url::to(['//search/search/index']), 'GET'); ?>
    <div class="form-group form-group-search">
        <?= Html::textInput('SearchForm[keyword]', '', ['placeholder' => Yii::t('base', 'Search'), 'title' => Yii::t('SearchModule.views_search_index', 'Search for user, spaces and content'), 'class' => 'form-control form-search', 'id' => 'search-input-field']); ?>
        <?= Html::submitButton(Yii::t('base', 'Search'), ['class' => 'btn btn-default btn-sm form-button-search']); ?>
    </div>
    <?= Html::endForm(); ?>
</div>

<script <?= Html::nonce() ?>>
    /**
     * Open search menu
     */
    $('#search-menu-nav').click(function () {

        // use setIntervall to setting the focus
        var searchFocus = setInterval(setFocus, 10);

        function setFocus() {

            // set focus
            $('#search-menu-search').focus();
            // stop interval
            clearInterval(searchFocus);
        }

    })
</script>
