<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            // 'email:email',
            // 'role',
            // 'status',
            // 'created_at',
            // 'updated_at',

            [
					'class' => 'yii\grid\ActionColumn',
					'header' => Yii::t('app','Actions'),
                    'template'=>'{view} {update} {delete}',
					'buttons' => [
    					'update' => function ($url, $model, $key) {
    					    $options = [
        					    'title' => '修改用户',
        					    'aria-label' => '修改用户',
        					    'data-pjax' => '0',
        					    'onclick'=> "updateUser('{$model->id}')",
    					    ];
    					    return Html::a('<span class="glyphicon glyphicon-pencil"></span>', 'javascript:void(0)', $options);
    					},
					],

				],
        ],
    ]); ?>
</div>
<script type="text/javascript">

    var updateUser = function (id) {
        var modal = new myModal();
        modal.width = "1000";
        modal.title = "'修改用户':" + id;
        modal.type="iframe";
        modal.url = "<?= Url::to(['update'])?>" + "?id=" + id;
        modal.modal();
    }

</script>
