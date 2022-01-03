<?php

namespace Crud;

use Simplon\Mysql\Crud\CrudModel;

class NameModel extends CrudModel
{
    const COLUMN_ID =   'id';
    const COLUMN_NAME = 'name';
    const COLUMN_AGE =  'age';

    protected $id;
    protected $name;
    protected $age;


    public function getId(): int
    {
        return (int)$this->id;
    }

    public function setId(int $id): NameModel
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): NameModel
    {
        $this->name = $name;

        return $this;
    }

    public function getAge(): int
    {
        return (int)$this->age;
    }

    public function setAge(int $age): NameModel
    {
        $this->age = $age;

        return $this;
    }
}