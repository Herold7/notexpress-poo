<?php 

namespace models;

use utilities\Database;

abstract class AbstractModel
{
    protected $pdo;
    protected string $table;
    protected string $fields;
    protected string $values;
    protected array $valuesBinded;

    public function __construct()
    {
        $this->pdo = (new Database())->getPdo();
    }

    // Methods

    /**
     * Method create()
     * To add a new element in the database
     * @param void
     * @return void
     */
    public function create(): void
    {
        $query = $this->pdo->prepare(
            "INSERT INTO {$this->table} ({$this->fields}) VALUES ({$this->values})"
        );
        $query->execute($this->valuesBinded);
    }

    /**
     * Method readAll()
     * To read all element in the database
     * @param void
     * @return array
     */
    public function findAll(): array
    {
        $query = $this->pdo->prepare(
            "SELECT * FROM {$this->table}"
        );
        $query->execute();
        $result = $query->fetchAll();
        return $result;
        
    }

/**
     * Method read()
     * To read all element in the database
     * @param string
     * @return array
     */
    public function find(string $slug): array
    {
        $query = $this->pdo->prepare(
            "SELECT * FROM {$this->table} WHERE slug = '{$slug}'"
        );
        $query->execute();
        $result = $query->fetch();
        return $result;
        
    }


    /**
     * Method update()
     * To update an element already in the database
     * @param string $slug
     * @return void
     */
    public function update(string $slug): void
    {
        $query = $this->pdo->prepare(
            "UPDATE {$this->table} SET {$this->fields} WHERE slug = '{$slug}'"
        );
        $query->execute();
    }

    /**
     * Methods delete()
     * To delete a new element in the database
     * @param string $slug
     * @param ?string $relation
     * @return void
     */
    public function delete(string $slug, ?string $relation): void
    {
        if($relation) {
            $relationLower = strtolower($relation);
            $query = $this->pdo->prepare(
                "DELETE FROM {$this->table} WHERE {$relationLower} = {$slug}"
            );
            $query->execute();
        } else {
            $query = $this->pdo->prepare(
                "DELETE FROM {$this->table} WHERE id = {$slug}"
            );
            $query->execute();
        }
    }
}
// Don't write any code below this line