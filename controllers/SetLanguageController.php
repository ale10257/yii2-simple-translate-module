<?php
namespace ale10257\translate\controllers;

use yii\web\Controller;

class SetLanguageController extends Controller
{
    public function actionIndex($language)
    {
        $languages = \Yii::$app->ale10257Translate->sourceLanguages;
        if (in_array($language, $languages)) {
            setcookie('language', $language, time() + (3600 * 24 * 360), '/');
        }
        return $this->redirect($_SERVER['HTTP_REFERER']);
    }
}