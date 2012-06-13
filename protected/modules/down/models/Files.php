<?php

/**
 * This is the model class for table "files".
 *
 * The followings are the available columns in table 'files':
 * @property integer $id
 * @property string $orig_name
 * @property string $view_name
 * @property string $about
 * @property string $cat
 * @property integer $time
 */
class Files extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Files the static model class
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
		return 'files';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('orig_name, view_name, about, cat, time', 'required'),
			array('id, time', 'numerical', 'integerOnly'=>true),
			array('orig_name, view_name', 'length', 'max'=>300),
			array('about', 'length', 'max'=>900),
			array('cat', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, orig_name, view_name, about, cat, time', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'orig_name' => 'Оригинальное название',
			'view_name' => 'Название для отображения',
			'about' => 'Описание',
			'cat' => 'Директория',
			'time' => 'Время',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('orig_name',$this->orig_name,true);
		$criteria->compare('view_name',$this->view_name,true);
		$criteria->compare('about',$this->about,true);
		$criteria->compare('cat',$this->cat,true);
		$criteria->compare('time',$this->time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}