<?php

namespace Classes\Crud;

class ExampleClass {

    public function AddRecord($conn, $data) {
       $conn->insert('names', $data);
       }

    public function UpdateRecord($conn, $conds, $data) {
       $conn->update('names', $conds, $data);
       }

    public function DeleteRecord($conn, $id) {
       $conn->delete('names', ['id' => $id]);
       }

    public function DeleteAllRecords($conn) {
       $conn->executeSql('TRUNCATE names');
       }

    public function DeleteCustomRecord($conn, $data) {
       $condsQuery = 'id = :id OR name =: name';
       $conn->delete('names', $data, 'id = :id OR name =: name');
       }

    public function ViewRecord($data) {
       foreach($data as $key => $val) {
            echo $val->getName() . '<br />';
        }
    }

}