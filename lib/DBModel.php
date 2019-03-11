<?php 

class DBModel{
    public function setAttributes(){

        $sqlString = array();
        
        foreach ($this->tableFields as $field){
            if(is_int($this->$field) || is_double($this->$field)){
                $sqlString [] = $field . " = " . $this->$field;
            }else{
                $sqlString [] = $field . " = ' " . $this->$field . " '";
            }
        }
        return implode( " , " , $sqlString );
    }
    public function add(){
        global $dbh;
        $sql = "INSERT INTO " . $this->tableName . " SET " . $this->setAttributes() . " ;" ; 
        // $dbh->exec($sql);
        echo $sql;
    }

}

?>