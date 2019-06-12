<?php
    
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    
    /* @var $this yii\web\View */
    /* @var $model ruturajmaniyar\mod\audit\models\AuditEntrySearch */
    /* @var $form yii\widgets\ActiveForm */
?>

<div class="audit-entry-search"
     id="audit-entry-search">
    
    <?php $form = ActiveForm::begin([
        'id' => 'audit-entry-search-form',
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>
    <div class="card-accordions">
        <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header card-custom">
                    <a class="card-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <h6 class="mb-0"><span class="fa fa-search"></span>
                            <?= Yii::t('app', 'Search') ?>
                        </h6></a>
                </div>
                <div id="collapseOne" class="collapse">
                    <div class="card-block">
                        <div class="row">
                            <div class="form-group">
                                <?= $form->field($model, 'audit_entry_model_name') ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <?= $form->field($model, 'audit_entry_operation') ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <?= $form->field($model, 'audit_entry_field_name') ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <?= $form->field($model, 'audit_entry_user_id') ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <?= $form->field($model, 'audit_entry_ip') ?>

                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-offset-5 col-md-offset-5 col-xs-offset-2">
                                <?= Html::submitButton(Yii::t('app', 'Search'), [
                                    'class' =>
                                        'btn btn-primary btn-round-left hvr-float-shadow'
                                ]) ?>
                                <?= Html::a(Yii::t('app', 'Reset'), [
                                    'index',
                                    'page' =>
                                        Yii::$app->session->get('page')
                                ],
                                    ['class' => 'btn btn-danger btn-round-right hvr-float-shadow']) ?>
                            </div>
                        </div>
                        
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
