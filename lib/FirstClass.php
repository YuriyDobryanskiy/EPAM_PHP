<?php

namespace lib;

class FirstClass
{
    function selectList($link){
        if ($result = $link->query('SELECT id, firstName, age, university FROM student')) {
            while( $row = $result->fetch_assoc() ){
                printf("Name: %s, Age: %s, University: %s -- <a href='?edit=%s'>EDIT</a> -- <a href='?delete=%s'>DELETE</a><br/>", $row['firstName'], $row['age'], $row['university'], $row['id'], $row['id']);
            }
        }
    }

    function addStudent($link, $n, $a, $u){
        //$n = $this->HTML($n);
        $link->query("INSERT INTO student (firstName, age, university) VALUES ('$n', '$a', '$u')");
    }

    function deleteStudent($link, $d){
        $link->query("DELETE FROM student WHERE id = $d");
    }

    function editStudent($link, $d){
        $editResult = $link->query("SELECT * FROM student WHERE id = $d");
        if ( count($editResult) == 1 ){
            $row = $editResult->fetch_array();
        }
        return $row;
    }

    function saveEditStudent($link, $id, $n, $a, $u){
        $link->query("UPDATE student SET firstName = '$n', age = '$a', university = '$u' WHERE id = $id");
    }

    function HTML($x) {
        return htmlspecialchars($x);
    }
}