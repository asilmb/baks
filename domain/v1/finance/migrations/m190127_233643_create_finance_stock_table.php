<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
* Handles the creation of table `finance_stock`.
*/
class m190127_233643_create_finance_stock_table extends Migration
{
	public $table = '{{%finance_stock}}';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'id' => $this->primaryKey(),
		];

	}

	public function afterCreate()
	{
		
	}

}