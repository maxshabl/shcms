<?php

namespace Core\Database\Mysql;

use Core\Service\ServiceInterface;

/**
 * Class MysqlService
 * @package Core\Database\Mysql
 */
class MysqlService implements ServiceInterface
{

    /**
     * @var array
     */
    private $config;

    /**
     * @var PDO
     */
    private $connect;

    /**
     * @var
     */
    private $request;


    /**
     * MysqlService constructor.
     * @param \stdClass $config
     */
    public function __construct(\stdClass $config)
    {
        try {
            $this->connect = new \PDO(
                $config->dsn,
                $config->user,
                $config->password,
                [\PDO::ATTR_PERSISTENT => true]
            );
            $this->connect->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        } catch (\PDOException $e) {
            //$this->dbh->rollBack();
        }
    }

    /**
     * @return $this
     */
    private function connect()
    {
        $dsn = 'mysql:host='.$this->config->host.';dbname='.$this->config->db_name.
            ';charset='.$this->config['charset'];
        $this->connect = new \PDO($dsn, $this->config['username'], $this->config['password']);
        return $this;
    }

    /**
     * Запрос.
     * @param string $sql
     * @param array|null $params
     * @return bool|self::$instance
     */
    public function execute(string $sql, $params = null)
    {
        try {
            $this->request = $this->connect->prepare($sql, array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $this->request->execute($params);
            return $this;
        } catch (\PDOException $e) {
            return $this->connect->rollBack();
        }
    }


    /**
     * @return $this|bool
     */
    public function beginTransaction()
    {
        try {
            $this->connect->beginTransaction();
        } catch (\PDOException $e) {
            return false;
        }
        return $this;
    }


    /**
     * @return bool
     */
    public function commit()
    {
        try {
            $this->connect->commit();
        } catch (\PDOException $e) {
            return $this->connect->rollBack();
        }
        return true;
    }


    /**
     * @return bool
     */
    public function rollBack()
    {
        $this->connect->rollBack();
        return false;
    }


    /**
     * @return bool
     */
    public function fetchAll()
    {
        try {
            $result = $this->request->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return $this->connect->rollBack();
        }
    }
}
