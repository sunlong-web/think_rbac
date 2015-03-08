<?php
class PermesModel extends RelationModel{

	//关联模型
	protected $_link=array(
		'payman'=>array(      //这里和class_name处必须有一处为关联表的名字
			'mapping_type'=>BELONGS_TO,
			'class_name'=>'payman',
			'foreign_key'=>'pid',
			'mapping_name'=>'linkUser'
		)	
	);
}