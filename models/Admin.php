<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property string $nama
 * @property int $nomer_id
 * @property int $no_hp
 * @property string $foto
 * @property string $password
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nomer_id', 'no_hp', 'foto', 'password'], 'required'],
            [['nomer_id', 'no_hp'], 'integer'],
            [['nama'], 'string', 'max' => 225],
            [['foto'], 'string', 'max' => 250],
            [['password'], 'string', 'max' => 20],
            [['nomer_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama' => 'Nama',
            'nomer_id' => 'Nomer ID',
            'no_hp' => 'No Hp',
            'foto' => 'Foto',
            'password' => 'Password',
        ];
    }
}
