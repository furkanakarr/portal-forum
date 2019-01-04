<?php

namespace vendor\kouosl\forum\models;

use Yii;

/**
 * This is the model class for table "Kullanicilar".
 *
 * @property int $id
 * @property string $Kullanici_Adi
 * @property string $Sifre
 * @property string $Soru
 * @property string $Yanit
 */
class Forum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Kullanicilar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kullanici_Adi', 'Sifre', 'Soru', 'Yanit'], 'required'],
            [['Kullanici_Adi', 'Sifre', 'Soru', 'Yanit'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Kullanici_Adi' => 'Kullanici  Adi',
            'Sifre' => 'Sifre',
            'Soru' => 'Soru',
            'Yanit' => 'Yanit',
        ];
    }
}
