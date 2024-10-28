<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use Rockets\Application\RocketApplicationService;
use Rockets\Infrastructure\Rocket\RocketRepository;

class RocketController extends Controller
{
    public function actionIndex(): string
    {
        return 'index';
    }

    public function actionPayloads($name) {
        $rocket = new RocketApplicationService(new RocketRepository());
        return $rocket->getRocketPayloads($name);
    }

    public function actionRelativeMass($name, $payload)
    {
        $rocket = new RocketApplicationService(new RocketRepository());
        return $rocket->getRocketRelativeMass($name, $payload);
    }

}