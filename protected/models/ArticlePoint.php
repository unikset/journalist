<?php

/**
 * This is the model class for table "article_point".
 *
 * The followings are the available columns in table 'article_point':
 * @property integer $ARTICLE_POINT_ID
 * @property string $ARTICLE_POINT_TIMESTAMP
 * @property string $CREATION_USER_IP
 * @property integer $ARTICLE_ID
 * @property integer $USER_ID
 *
 * The followings are the available model relations:
 * @property Article $aRTICLE
 * @property User $uSER
 */
class ArticlePoint extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ArticlePoint the static model class
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
		return 'article_point';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ARTICLE_POINT_ID, ARTICLE_ID, USER_ID', 'required'),
			array('ARTICLE_POINT_ID, ARTICLE_ID, USER_ID', 'numerical', 'integerOnly'=>true),
			array('CREATION_USER_IP', 'length', 'max'=>15),
			array('ARTICLE_POINT_TIMESTAMP', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ARTICLE_POINT_ID, ARTICLE_POINT_TIMESTAMP, CREATION_USER_IP, ARTICLE_ID, USER_ID', 'safe', 'on'=>'search'),
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
			'aRTICLE' => array(self::BELONGS_TO, 'Article', 'ARTICLE_ID'),
			'uSER' => array(self::BELONGS_TO, 'User', 'USER_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ARTICLE_POINT_ID' => 'Article Point',
			'ARTICLE_POINT_TIMESTAMP' => 'Article Point Timestamp',
			'CREATION_USER_IP' => 'Creation User Ip',
			'ARTICLE_ID' => 'Article',
			'USER_ID' => 'User',
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

		$criteria->compare('ARTICLE_POINT_ID',$this->ARTICLE_POINT_ID);
		$criteria->compare('ARTICLE_POINT_TIMESTAMP',$this->ARTICLE_POINT_TIMESTAMP,true);
		$criteria->compare('CREATION_USER_IP',$this->CREATION_USER_IP,true);
		$criteria->compare('ARTICLE_ID',$this->ARTICLE_ID);
		$criteria->compare('USER_ID',$this->USER_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}