<?php
    
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\widgets\Pjax;
    
    /* @var $this yii\web\View */
    /* @var $searchModel ruturajmaniyar\mod\audit\models\AuditEntrySearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */
    
    $this->title = Yii::t('app', 'Audit Entries');
    $this->params['breadcrumbs'][] = $this->title;
    $this->params['pageHead'] = $this->title;
?>

<?php Pjax::begin(['enablePushState' => false, 'id' => 'pjax-audit-entry']); ?>
<div class="audit-entry-index"
     id="audit-entry-index">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="hseparator"></div>
    <div class="card">
        <div class="card-header card-custom">
            <h6>
                <span class="fa fa-plus-circle"></span>
                <?= Html::encode($this->title) ?>
            </h6>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card card-default">
                <div class="card-header">
                    <div class="basic_bootstrap_tbl custom-toolbar">
                        <?= GridView::widget([
                            'id' => 'audit-entry-grid-index',
                            'dataProvider' => $dataProvider,
                            'layout' => Yii::$app->layoutHelper->get_layout_str('#audit-entry-search-form'),
                            'showOnEmpty' => false,
                            'options' => [
                                'class' => 'grid-view-color text-center',
                            ],
                            'columns' => [
                                [
                                    'attribute' => 'audit_entry_timestamp',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['class' => 'text-center'],
                                    'value' => function ($model) {
                                        return Yii::$app->dateTimeConversion->convertTimestampToDateTime($model->audit_entry_timestamp);
                                    }
                                ],
                                [
                                    'attribute' => 'audit_entry_model_name',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['class' => 'text-center'],
                                ],
                                [
                                    'attribute' => 'audit_entry_operation',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['class' => 'text-center'],
                                ],
                                [
                                    'attribute' => 'audit_entry_field_name',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['class' => 'text-center'],
                                ],
                                [
                                    'attribute' => 'audit_entry_old_value',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['class' => 'text-center'],
                                ],
                                [
                                    'attribute' => 'audit_entry_new_value',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['class' => 'text-center'],
                                ],
                                [
                                    'attribute' => 'audit_entry_user_id',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['class' => 'text-center'],
                                ],
                                [
                                    'attribute' => 'audit_entry_ip',
                                    'headerOptions' => ['class' => 'text-center'],
                                    'contentOptions' => ['class' => 'text-center'],
                                ],
                            ],
                            'tableOptions' => [
                                'class' => 'table table-striped display nowrap table-bordered sorting_asc',
                                'id' => 'table1',
                                'data-plugin' => 'bootstraptable',
                                'data-height' => Yii::$app->session->get('per-page-result') == 5 ? '320' : '480',
                                'data-search' => 'true',
                                'data-search-placeholder' => Yii::t('app', 'quick_search'),
                                'data-icons-prefix' => 'fa',
                                'data-mobile-responsive' => 'false',
                                'data-show-columns' => 'true',
                                'data-cookie' => 'true',
                                'data-cookie-id-table' => 'AuditEntryIndex',
                            ],
                        ]); ?>
                    </div>
                    <?php Pjax::end(); ?>                </div>
            </div>
        </div>
    </div>
</div>
