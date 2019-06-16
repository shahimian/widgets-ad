<?php

namespace app\widgets\ad;

use yii\base\Widget;
use app\modules\ad\models\Ad as AdModel;

class Ad extends Widget {
    public $count = 4;
    public function run(){
        if(!AdModel::find()->count())
            return;
        $query = AdModel::find()->limit($this->count);
        return $this->render('ad', [
            'ads' => $query->all(),
            'count' => $query->count(),
            'count_widget' => $this->count,
        ]);
    }
}
