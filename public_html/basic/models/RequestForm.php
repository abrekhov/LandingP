<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class RequestForm extends Model
{
    public $name;
    public $phone;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'phone'], 'required'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Ваше имя:',
            'phone' => 'Ваш телефон:',
        ];
    }

	public function htmlBody(){
		return "Клиент: {$this->name} просит Вас перезвонить ему по номеру <a href='tel:{$this->phone}'>{$this->phone}</a>";
		
	}
    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function request($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$email => $this->name])
                ->setSubject('Новая Заявка')
                ->setHtmlBody($this->htmlBody())
                ->send();

            return true;
        }
        return false;
    }
}
