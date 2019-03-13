<?php 

class DBModel{
    public function setAttributes(){

        $sqlString = array();
        
        foreach ($this->dbFields as $field){
            if(is_int($this->$field) || is_double($this->$field)){
                $sqlString [] = $field . " = " . $this->$field;
            }else{
                $sqlString [] = $field . " = ' " . $this->$field . " '";
            }
        }
        return implode( " , " , $sqlString );
    }
    
    public static function read($sql, $type = PDO::FETCH_ASSOC, $class = null)
    {
        global $dbh;
        $results = $dbh->query($sql);
        if($results) {
            if(null !== $class && $type == PDO::FETCH_CLASS) {
                $data = $results->fetchAll($type, $class);
            } else {
                $data = $results->fetchAll($type);
            }
            // if(count($data) == 1) {
            //     $data = array_shift($data);
            // }
            return $data;
        } else {
            return false;
        }
    }

    private function add ()
    {
        global $dbh;
        $sql = "INSERT INTO " . $this->tableName . " SET " . $this->setAttributes();
        $affectedRows = $dbh->exec($sql);
        if ($affectedRows != false) {
            $this->id = $dbh->lastInsertId();
        } else {
            return false;
        }
        return true;
    }

    public function update ()
    {
        global $dbh;
        $sql = "UPDATE " . $this->tableName . " SET " . $this->setAttributes() .
                 ' WHERE id = ' . $this->id;
        $affectedRows = $dbh->exec($sql);
        return $affectedRows != false ? true : false;
    }

    public function delete ()
    {
        global $dbh;
        $sql = "DELETE FROM " . $this->tableName . ' WHERE id = ' . $this->id;
        $affectedRows = $dbh->exec($sql);
        return $affectedRows != false ? true : false;
    }
    
    public function save()
    {
        return ($this->id === null) ? $this->add() : $this->update();
    }

}

?>