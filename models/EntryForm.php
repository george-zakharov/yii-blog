<?php
/**
 * Created by PhpStorm.
 * User: wildwind
 * Date: 26.04.18
 * Time: 23:05
 *
 * TODO: DELETE ME AFTER TEST
 */

namespace app\models;

use yii\base\Model;


class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}