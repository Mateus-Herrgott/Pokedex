<?php

    namespace app\Models;
    use app\utils\Database;
    use PDO;

    class Type extends CoreModel {

        private $color;

        public function find($id) {
            $pdo = Database::getPDO();
            $sql = "SELECT* FROM `type` WHERE `id` = '$id'";
            $pdoStatement = $pdo->query($sql);

            $type = $pdoStatement->fetchObject(self::class);

            return $type;
        }

        public function findAll() {
            $pdo = Database::getPDO();
            $sql = "SELECT* FROM `type`";
            $pdoStatement = $pdo->query($sql);

            $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

            return $types;
        }


        /**
         * Get the value of color
         */ 
        public function getColor()
        {
                return $this->color;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */ 
        public function setColor($color)
        {
                $this->color = $color;

                return $this;
        }
    }