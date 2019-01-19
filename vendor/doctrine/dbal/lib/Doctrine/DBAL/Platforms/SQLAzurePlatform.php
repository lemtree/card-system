<?php
 namespace Doctrine\DBAL\Platforms; use Doctrine\DBAL\Schema\Table; class SQLAzurePlatform extends SQLServer2008Platform { public function getCreateTableSQL(Table $table, $createFlags=self::CREATE_INDEXES) { $sql = parent::getCreateTableSQL($table, $createFlags); if ($table->hasOption('azure.federatedOnColumnName')) { $distributionName = $table->getOption('azure.federatedOnDistributionName'); $columnName = $table->getOption('azure.federatedOnColumnName'); $stmt = ' FEDERATED ON (' . $distributionName . ' = ' . $columnName . ')'; $sql[0] = $sql[0] . $stmt; } return $sql; } } 