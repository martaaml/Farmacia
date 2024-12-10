<?php
    namespace Lib;
    use mysqli;

    class Database {
        private mysqli $connection;
        private mixed $result;

        public function __construct(private string $server, private string $user, private string $password, private string $database) {
            
            $this->connection = $this->connect();
        }

        private function connect(): mysqli {
            $connection = new mysqli($this->server, $this->user, $this->password, $this->database);
            if ($connection->connect_error) {
                die("Connection error: " . $connection->connect_error);
            }
            return $connection;
        }

        public function querySQL(string $query): mixed {
            $this->result = $this->connection->query($query);
            if ($this->result === false) {
                die("Query error: " . $this->connection->error);
            }
            return $this->result;
        }

        public function register(): mixed {
            return ($row = $this->result->fetch_assoc()) ? $row : false;
        }

        public function close(): void {
            $this->connection->close();
        }
    }
?>