<?php 
namespace Model;

use \Gas\Core;
use \Gas\ORM;

class User extends ORM {

    public $table = 'dbo.users';

    function _init()
    {

        self::$relationships = array (
            // 'user'        =>  ORM::belongs_to('\\Model\\User')
        );

        self::$fields = array(
            'id'          =>  ORM::field('auto[10]'),
            // 'name'       =>  ORM::field('char[255]', array('required','max_length[255]')),
            // 'body'        =>  ORM::field('string'),
            // 'modified_at' =>  ORM::field('datetime'),
            // 'created_at'  =>  ORM::field('datetime'),
        );

        // $this->ts_fields = array('modified_at','[created_at]');
    }
}