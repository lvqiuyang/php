<?php
//class Model_Article extends Orm\Model {}
class Model_Position extends Orm\Model {
	//映射表的名字
	protected static $_table_name = 't_position';
	protected static $_primary_key = array('position_id');
	protected static $_properties = array(
			'position_id', // both validation & typing observers will ignore the PK
			'position' => array(
					'data_type' => 'varchar',
					'validation' => array('required'),
// 					'form' => array('type' => 'text'),
// 					'default' => 'New article',  // 当字段为空时，默认的值是什么
			),
	);
}