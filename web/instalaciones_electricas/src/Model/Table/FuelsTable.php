<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fuels Model
 */
class FuelsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('fuels');
		$this->displayField('name');
		$this->primaryKey('id');

		$this->belongsToMany('Technologies', [
			'joinTable' => 'fuels_technologies',
		])->setForeignKey('id_fuel');
	}

	public function getQueryFuels ($filters){
		$query = $this->find('all');
        $query->select(['Fuels.id', 'Fuels.name', 'Fuels.fue_cos', 'Fuels.production']);
		$query->where($filters);
		
		return $query;	
	}

	public function getTechnologiesByFuelId ($id_fuel){
		$query = $this->find('all');
		$query
			->select(['Fuels.id', 'Fuels.name'])
			->select(['Technology.id', 'Technology.name', 'Technology.renowable'])
			->select(['FuelsTechnology.id_fuel', 'FuelsTechnology.id_technology', 'FuelsTechnology.power', 'FuelsTechnology.perc_con', 'FuelsTechnology.fue_con'])
			->where([
				'Fuels.id' => $id_fuel
			])
			->order([
				'Technology.name' => 'ASC'
			])
        	->join([
				'FuelsTechnology' => [
					'table' => 'fuels_technologies',
					'type' => 'INNER',
					'conditions' => 'Fuels.id = FuelsTechnology.id_fuel'
				],
				'Technology' => [
					'table' => 'technologies',
					'type' => 'INNER',
					'conditions' => 'Technology.id = FuelsTechnology.id_technology'
				]
			]);
			
		
		return $query->toArray();
	}

}
