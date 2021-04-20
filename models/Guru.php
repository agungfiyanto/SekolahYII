<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guru".
 *
 * @property string $nama
 * @property int $nip
 * @property int $no_hp
 * @property string $foto
 * @property string $password
 */
class Guru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guru';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nip', 'no_hp', 'foto', 'password'], 'required'],
            [['nip', 'no_hp'], 'integer'],
            [['nama'], 'string', 'max' => 225],
            [['foto'], 'string', 'max' => 250],
            [['password'], 'string', 'max' => 20],
            [['nip'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama' => 'Nama',
            'nip' => 'Nip',
            'no_hp' => 'No Hp',
            'foto' => 'Foto',
            'password' => 'Password',
        ];
    }
}
