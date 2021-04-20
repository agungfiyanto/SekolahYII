<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "murid".
 *
 * @property string $nama
 * @property int $nrp
 * @property int $no_hp
 * @property string $foto
 * @property string $password
 */
class Murid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'murid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nrp', 'no_hp', 'foto', 'password'], 'required'],
            [['nrp', 'no_hp'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['foto'], 'string', 'max' => 250],
            [['password'], 'string', 'max' => 20],
            [['nrp'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama' => 'Nama',
            'nrp' => 'Nrp',
            'no_hp' => 'No Hp',
            'foto' => 'Foto',
            'password' => 'Password',
        ];
    }
}
