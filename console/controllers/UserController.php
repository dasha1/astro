<?php

namespace console\controllers;

use common\models\User;
use Yii;

class UserController extends \yii\console\Controller
{
    public function actionCreateUser($username, $password, $mail)
    {
        $user = new User();
        $user->username = $username;
        $user->email = $mail;
        $user->setPassword($password);
        $user->save(false);

    }
}
