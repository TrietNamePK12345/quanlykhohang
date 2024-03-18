<?php

namespace App\Core;

class Database
{

    use Connection;
    use QueryBuilder;
    public \PDO $conn;

    public function __construct()
    {
        $this->conn = $this->createConnection();
    }

    // thêm
    public function insertData($table, $data)
    {
        if (!empty($data)) {
            $fielStr = '';
            $valueStr = '';
            foreach ($data as $key => $value) {
                $fielStr .= $key . ',';
                $valueStr .= "'" . $value . "',";
            }

            $fielStr = rtrim($fielStr, ',');
            $valueStr = rtrim($valueStr, ',');
            $sql = "INSERT INTO $table($fielStr) VALUES ($valueStr)";
            echo $sql;
            $status = $this->query($sql);
            if (!$status) return false;
        }
        return true;
    }

    // sửa
    public function updateData($table, $data, $condition = '')
    {
        if (!empty($data)) {
            $updateStr = '';
            foreach ($data as $key => $value) {
                $updateStr .= "$key='$value',";
            }
            $updateStr = rtrim($updateStr, ',');
            $sql = "UPDATE $table SET $updateStr";
            if (!empty($condition)) {
                $sql = "UPDATE $table SET $updateStr WHERE $condition";
            }
            $status = $this->query($sql);
            if (!$status) return false;
        }
        return true;
    }

    // xóa
    public function deleteData($table, $condition = ''): bool
    {
        $sql = 'DELETE FROM ' . $table;
        if (!empty($condition)) {
            $sql = 'DELETE FROM ' . $table . ' WHERE ' . $condition;
        }
        $status = $this->query($sql);
        if (!$status) return false;
        return true;
    }

    public function lastInsertId()
    {
        return $this->conn->lastInsertId();
    }


    public function query($sql)
    {
        try {
            $statement = $this->conn->prepare($sql);
            $statement->execute();
            return $statement;
        } catch (\Exception $exception) {
            $mess = $exception->getMessage();
            $data['message'] = $mess;
             Controller::render('_404', $data); // Chú ý: Điều này có thể cần được xác định
            die();
        }
    }

}