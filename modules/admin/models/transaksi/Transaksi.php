<?php

namespace app\modules\admin\models\transaksi;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id
 * @property string $keterangan
 * @property float $nominal
 * @property string $status
 * @property string $tanggal
 * @property string $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keterangan', 'nominal', 'status', 'tanggal'], 'required'],
            [['nominal'], 'number'],
            [['tanggal', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['keterangan', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'keterangan' => 'Keterangan',
            'nominal' => 'Nominal',
            'status' => 'Status',
            'tanggal' => 'Tanggal',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
}
