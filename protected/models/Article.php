<?php

/**
 * This is the model class for table "article".
 *
 * The followings are the available columns in table 'article':
 * @property integer $ARTICLE_ID
 * @property string $ARTICLE_NAME
 * @property string $ARTICLE_SHORT_DESC
 * @property string $ARTICLE_CONTENT
 * @property string $ARTICLE_TIMESTAMP
 * @property string $CREATION_USER_IP
 * @property integer $VALIDATION_FLAG
 * @property integer $USER_ID
 * @property integer $ARTICLE_CATEGORY_ID
 *
 * The followings are the available model relations:
 * @property User $uSER
 * @property ArticleCategory $aRTICLECATEGORY
 * @property ArticlePoint[] $articlePoints
 */
class Article extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Article the static model class
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
		return 'article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ARTICLE_ID, USER_ID, ARTICLE_CATEGORY_ID', 'required'),
			array('ARTICLE_ID, VALIDATION_FLAG, USER_ID, ARTICLE_CATEGORY_ID', 'numerical', 'integerOnly'=>true),
			array('ARTICLE_NAME', 'length', 'max'=>45),
			array('ARTICLE_SHORT_DESC', 'length', 'max'=>255),
			array('CREATION_USER_IP', 'length', 'max'=>15),
			array('ARTICLE_CONTENT, ARTICLE_TIMESTAMP', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ARTICLE_ID, ARTICLE_NAME, ARTICLE_SHORT_DESC, ARTICLE_CONTENT, ARTICLE_TIMESTAMP, CREATION_USER_IP, VALIDATION_FLAG, USER_ID, ARTICLE_CATEGORY_ID', 'safe', 'on'=>'search'),
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
			'uSER' => array(self::BELONGS_TO, 'User', 'USER_ID'),
			'aRTICLECATEGORY' => array(self::BELONGS_TO, 'ArticleCategory', 'ARTICLE_CATEGORY_ID'),
			'articlePoints' => array(self::HAS_MANY, 'ArticlePoint', 'ARTICLE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ARTICLE_ID' => 'Article',
			'ARTICLE_NAME' => 'Article Name',
			'ARTICLE_SHORT_DESC' => 'Article Short Desc',
			'ARTICLE_CONTENT' => 'Article Content',
			'ARTICLE_TIMESTAMP' => 'Article Timestamp',
			'CREATION_USER_IP' => 'Creation User Ip',
			'VALIDATION_FLAG' => 'Validation Flag',
			'USER_ID' => 'User',
			'ARTICLE_CATEGORY_ID' => 'Article Category',
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

		$criteria->compare('ARTICLE_ID',$this->ARTICLE_ID);
		$criteria->compare('ARTICLE_NAME',$this->ARTICLE_NAME,true);
		$criteria->compare('ARTICLE_SHORT_DESC',$this->ARTICLE_SHORT_DESC,true);
		$criteria->compare('ARTICLE_CONTENT',$this->ARTICLE_CONTENT,true);
		$criteria->compare('ARTICLE_TIMESTAMP',$this->ARTICLE_TIMESTAMP,true);
		$criteria->compare('CREATION_USER_IP',$this->CREATION_USER_IP,true);
		$criteria->compare('VALIDATION_FLAG',$this->VALIDATION_FLAG);
		$criteria->compare('USER_ID',$this->USER_ID);
		$criteria->compare('ARTICLE_CATEGORY_ID',$this->ARTICLE_CATEGORY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}