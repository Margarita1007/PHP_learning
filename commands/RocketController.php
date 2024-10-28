<?php

namespace app\commands;

use yii\console\Controller;

use Rockets\Application\RocketApplicationService;
use Rockets\Infrastructure\Rocket\RocketRepository;

class RocketController extends Controller
{
    public function actionRelativeMass($name)
    {
        $rocket = new RocketApplicationService(new RocketRepository());
        echo $rocket->getRocketRelativeMass($name);
    }
}