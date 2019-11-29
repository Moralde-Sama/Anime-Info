<?php
    interface IDatabaseAction {
        function insertInto($array_value);
        function update($array_column, $array_value, $string_condition);
        function delete($id);
        function search($array_column, $string_condition);
        function rawQuery($query);
    }
?>