<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $USER_ID
 * @property string $USER_NAME
 * @property string $USER_OTHERS_COMMING_SOON
 * @property integer $ROLE_ID
 *
 * The followings are the available model relations:
 * @property Article[] $articles
 * @property ArticlePoint[] $articlePoints
 * @property Role $rOLE
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USER_ID, ROLE_ID', 'required'),
			array('USER_ID, ROLE_ID', 'numerical', 'integerOnly'=>true),
			array('USER_NAME, USER_OTHERS_COMMING_SOON', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('USER_ID, USER_NAME, USER_OTHERS_COMMING_SOON, ROLE_ID', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'articles' => array(self::HAS_MANY, 'Article', 'USER_ID'),
			'articlePoints' => array(self::HAS_MANY, 'ArticlePoint', 'USER_ID'),
			'rOLE' => array(self::BELONGS_TO, 'Role', 'ROLE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'USER_ID' => 'User',
			'USER_NAME' => 'User Name',
			'USER_OTHERS_COMMING_SOON' => 'User Others Comming Soon',
			'ROLE_ID' => 'Role',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('USER_ID',$this->USER_ID);
		$criteria->compare('USER_NAME',$this->USER_NAME,true);
		$criteria->compare('USER_OTHERS_COMMING_SOON',$this->USER_OTHERS_COMMING_SOON,true);
		$criteria->compare('ROLE_ID',$this->ROLE_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}