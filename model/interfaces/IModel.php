<?php
    interface IModel {
        function add($param);
        function remove($param);
        function update($param);
        function search($param);
        function saveChanges();
    }
?>