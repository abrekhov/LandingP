<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "main".
 *
 * @property integer $id
 * @property string $name
 * @property integer $menu_num
 * @property string $full_name
 * @property string $iconurl
 * @property string $header_desc
 * @property integer $created_at
 * @property integer $updated_at
 */
class Main extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'main';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'full_name'], 'required'],
            [['menu_num', 'created_at', 'updated_at'], 'integer'],
            [['header_desc'], 'string'],
            [['blog_text'], 'string'],
            [['bwr_title','meta_keywords','meta_description'], 'string'],
            [['name', 'full_name', 'iconurl'], 'string', 'max' => 200],
        ];
    }
	
	public function behaviors(){
		return [
			\yii\behaviors\TimestampBehavior::classname()
		];
	}

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'menu_num' => Yii::t('app', 'Menu Num'),
            'full_name' => Yii::t('app', 'Full Name'),
            'iconurl' => Yii::t('app', 'Iconurl'),
            'header_desc' => Yii::t('app', 'Header Desc'),
            'blog_text' => Yii::t('app', 'Blog text'),
            'bwr_title' => Yii::t('app', 'Title'),
            'meta_keywords' => Yii::t('app', 'Meta Keywords'),
            'meta_description' => Yii::t('app', 'Meta Description'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
