<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $nombre_real
 * @property string $email
 * @property string $authKey
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email', 'required'),
			array('username, nombre_real, email', 'length', 'max' => 250),
			array('password', 'length', 'max' => 255),
			array('authKey', 'length', 'max' => 50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, nombre_real, email, authKey', 'safe', 'on' => 'search'),
		);
	}

	/* 
	 * Password functions didn't include it
	 */
	public function validatePassword($password)
	{
		return CPasswordHelper::verifyPassword($password, $this->password);
	}

	public function hashPassword($password)
	{
		return CPasswordHelper::hashPassword($password);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'nombre_real' => 'Nombre Real',
			'email' => 'Email',
			'authKey' => 'Auth Key',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('username', $this->username, true);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('nombre_real', $this->nombre_real, true);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('authKey', $this->authKey, true);

		return new CActiveDataProvider(
			$this,
			array(
				'criteria' => $criteria,
			)
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}