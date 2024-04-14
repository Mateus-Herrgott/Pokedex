<?php

    namespace app\Models;
    use app\utils\Database;
    use PDO;

    class Pokemon extends CoreModel {
        
        private $hp;
        private $attack;
        private $defense;
        private $spe_attack;
        private $spe_defense;
        private $speed;
        private $number;

        public function find($id) {
            $pdo = Database::getPDO();
            $sql = "SELECT* FROM `pokemon` WHERE `id` = '$id'";
            $pdoStatement = $pdo->query($sql);

            $pokemon = $pdoStatement->fetchObject(self::class);

            return $pokemon;
        }

        public function findAll() {
            $pdo = Database::getPDO();
            $sql = "SELECT* FROM `pokemon`";
            $pdoStatement = $pdo->query($sql);

            $pokemons = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

            return $pokemons;
        }

        public function findByNumber($id) {
                $pdo = Database::getPDO();
                $sql = "SELECT* FROM `pokemon` WHERE `number` = '$id'";
                $pdoStatement = $pdo->query($sql);
    
                $pokemon = $pdoStatement->fetchObject(self::class);
    
                return $pokemon;
            }

        /** 
     * Méthode permettant de récupérer une liste de pokémons par type
     */
    public function findByType($typeId)
    {
        // On joint la table de pivot "pokemon_type" afin de pouvoir filtrer sur les ID de type
        $sql = "SELECT *
                FROM `pokemon` 
                INNER JOIN `pokemon_type` ON `pokemon_type`.`pokemon_number` = `pokemon`.`number`
                WHERE `pokemon_type`.`type_id` = {$typeId}
                ORDER BY `pokemon`.`number`";

        // On récupère la connexion à la BDD
        $pdo = Database::getPDO();

        // On exécute la requête avec query car on souhaite pouvoir accéder
        // aux données retournées par la requête
        $pdoStatement = $pdo->query($sql);

        // On récupère tous les résultats avec "fetchAll" et on met transmet les données récupérées à une instance du model courant (Pokemon)
        $pokemons = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $pokemons;
    }

        public function getTypes()
        {     
            $sql = "SELECT `type`.*
                    FROM `pokemon_type`
                    INNER JOIN `type` ON `type`.`id` = `pokemon_type`.`type_id`
                    WHERE `pokemon_type`.`pokemon_number` = {$this->getNumber()}";

            $pdo = Database::getPDO();
            $pdoStatement = $pdo->query($sql);
            $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Type::class);

            return $types;
        }

        /**
         * Get the value of hp
         */ 
        public function getHp()
        {
                return $this->hp;
        }

        /**
         * Set the value of hp
         *
         * @return  self
         */ 
        public function setHp($hp)
        {
                $this->hp = $hp;

                return $this;
        }

        /**
         * Get the value of attack
         */ 
        public function getAttack()
        {
                return $this->attack;
        }

        /**
         * Set the value of attack
         *
         * @return  self
         */ 
        public function setAttack($attack)
        {
                $this->attack = $attack;

                return $this;
        }

        /**
         * Get the value of defense
         */ 
        public function getDefense()
        {
                return $this->defense;
        }

        /**
         * Set the value of defense
         *
         * @return  self
         */ 
        public function setDefense($defense)
        {
                $this->defense = $defense;

                return $this;
        }

        /**
         * Get the value of spe_attack
         */ 
        public function getSpe_attack()
        {
                return $this->spe_attack;
        }

        /**
         * Set the value of spe_attack
         *
         * @return  self
         */ 
        public function setSpe_attack($spe_attack)
        {
                $this->spe_attack = $spe_attack;

                return $this;
        }

        /**
         * Get the value of spe_defense
         */ 
        public function getSpe_defense()
        {
                return $this->spe_defense;
        }

        /**
         * Set the value of spe_defense
         *
         * @return  self
         */ 
        public function setSpe_defense($spe_defense)
        {
                $this->spe_defense = $spe_defense;

                return $this;
        }

        /**
         * Get the value of speed
         */ 
        public function getSpeed()
        {
                return $this->speed;
        }

        /**
         * Set the value of speed
         *
         * @return  self
         */ 
        public function setSpeed($speed)
        {
                $this->speed = $speed;

                return $this;
        }

        /**
         * Get the value of number
         */ 
        public function getNumber()
        {
                return $this->number;
        }

        /**
         * Set the value of number
         *
         * @return  self
         */ 
        public function setNumber($number)
        {
                $this->number = $number;

                return $this;
        }
    }