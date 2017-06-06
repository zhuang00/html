<?php
    class UserModel extends Model{
        public $_table="user";
        function getUser($id){
           return  $this->find($id);
        }
    }