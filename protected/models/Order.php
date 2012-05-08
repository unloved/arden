<?php

/**
 * This is the model class for table "orders".
 *
 * The followings are the available columns in table 'orders':
 * @property integer $id
 * @property integer $client_id
 * @property integer $master_id
 * @property integer $service_id
 * @property integer $status_id
 * @property integer $created_at
 * @property integer $ended_at
 *
 * The followings are the available model relations:
 * @property Services $service
 * @property Clients $client
 * @property Masters $master
 */
class Order extends CActiveRecord
{
        public $statuses=array(''=>'', 0=>'Открыт');
        
        public function beforeSave()
        {
            if ($this->isNewRecord == true) {
                $this->created_at = time();
                $this->status_id = 1;
            }
                
        }
        
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Order the static model class
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
		return 'orders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('client_id, master_id, service_id', 'required'),
			array('client_id, master_id, service_id, status_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, client_id, master_id, service_id', 'safe', 'on'=>'search'),
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
			'service' => array(self::BELONGS_TO, 'Service', 'service_id'),
			'client' => array(self::BELONGS_TO, 'Client', 'client_id'),
			'master' => array(self::BELONGS_TO, 'Master', 'master_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'client_id' => 'Клиент',
			'master_id' => 'Мастер',
			'service_id' => 'Услуга',
			'status_id' => 'Статус',
			'created_at' => 'дата создания',
			'ended_at' => 'дата закрытия',
		);
	}
        
                
        public function GetStatus()
        {
            return $this->statuses[$this->status_id];
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
		$criteria->compare('client_id',$this->client_id);
		$criteria->compare('master_id',$this->master_id);
		$criteria->compare('service_id',$this->service_id);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('created_at',$this->created_at);
		$criteria->compare('ended_at',$this->ended_at);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}