<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2015 Christoph Kappestein <k42b3.x@gmail.com>
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Sample\Api\InternetPopulation\Endpoint;

use Doctrine\DBAL\Schema\Schema;

/**
 * TestSchema
 *
 * @author  Christoph Kappestein <k42b3.x@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class TestSchema
{
	public static function getSchema()
	{
		$schema = new Schema();

		$table = $schema->createTable('internet_population');
		$table->addColumn('id', 'integer', array('autoincrement' => true));
		$table->addColumn('place', 'integer');
		$table->addColumn('region', 'string');
		$table->addColumn('population', 'integer');
		$table->addColumn('users', 'integer');
		$table->addColumn('world_users', 'float');
		$table->addColumn('datetime', 'datetime');
		$table->setPrimaryKey(array('id'));

		return $schema;
	}
}
