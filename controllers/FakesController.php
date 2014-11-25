<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class FakesController extends \yii\rest\ActiveController
{
    public $modelClass = '\app\models\Fake';
}
