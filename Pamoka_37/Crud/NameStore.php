<?php

namespace Crud;

use Simplon\Mysql\Crud\CrudModelInterface;
use Simplon\Mysql\Crud\CrudStore;
use Simplon\Mysql\MysqlException;
use Simplon\Mysql\QueryBuilder\CreateQueryBuilder;
use Simplon\Mysql\QueryBuilder\DeleteQueryBuilder;
use Simplon\Mysql\QueryBuilder\ReadQueryBuilder;
use Simplon\Mysql\QueryBuilder\UpdateQueryBuilder;

class NameStore extends CrudStore
{
    public function getTableName(): string
    {
        return 'names';
    }

    public function getModel(): CrudModelInterface
    {
        return new NameModel();
    }

    public function create(CreateQueryBuilder $builder): NameModel
    {
        $model = $this->crudCreate($builder);

        return $model;
    }

    public function read(?ReadQueryBuilder $builder = null): ?array
    {
        $response = $this->crudRead($builder);

        return $response;
    }

    public function readOne(ReadQueryBuilder $builder): ?NameModel
    {
        $response = $this->crudReadOne($builder);

        return $response;
    }

    public function update(UpdateQueryBuilder $builder): NameModel
    {
        $model = $this->crudUpdate($builder);

        return $model;
    }

    public function delete(DeleteQueryBuilder $builder): bool
    {
        return $this->crudDelete($builder);
    }

    public function customMethod(int $id): ?NameModel
    {
        $query = 'SELECT * FROM ' . $this->getTableName() . ' WHERE id=:id';

        if ($result = $this->getCrudManager()->getMysql()->fetchRow($query, ['id' => $id]))
        {
            return (new NameModel())->fromArray($result);
        }

        return null;
    }

}