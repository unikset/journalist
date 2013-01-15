<?php

/**
 * This is the model class for table "article_category".
 *
 * The followings are the available columns in table 'article_category':
 * @property integer $ARTICLE_CATEGORY_ID
 * @property string $ARTICLE_CATEGORY_NAME
 * @property string $ARTICLE_CATEGORY_DESC
 *
 * The followings are the available model relations:
 * @property Article[] $articles
 */
class ArticleCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ArticleCategory the static model class
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
		return 'article_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ARTICLE_CATEGORY_ID', 'required'),
			array('ARTICLE_CATEGORY_ID', 'numerical', 'integerOnly'=>true),
			array('ARTICLE_CATEGORY_NAME', 'length', 'max'=>45),
			array('ARTICLE_CATEGORY_DESC', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ARTICLE_CATEGORY_ID, ARTICLE_CATEGORY_NAME, ARTICLE_CATEGORY_DESC', 'safe', 'on'=>'search'),
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
			'articles' => array(self::HAS_MANY, 'Article', 'ARTICLE_CATEGORY_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ARTICLE_CATEGORY_ID' => 'Article Category',
			'ARTICLE_CATEGORY_NAME' => 'Article Category Name',
			'ARTICLE_CATEGORY_DESC' => 'Article Category Desc',
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

		$criteria->compare('ARTICLE_CATEGORY_ID',$this->ARTICLE_CATEGORY_ID);
		$criteria->compare('ARTICLE_CATEGORY_NAME',$this->ARTICLE_CATEGORY_NAME,true);
		$criteria->compare('ARTICLE_CATEGORY_DESC',$this->ARTICLE_CATEGORY_DESC,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}