<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class MicroAttributeDb
{
    protected $wpdb;
    protected $table;

    public function __construct()
    {
        global $wpdb;
        global $table_prefix;

        $this->wpdb = $wpdb;

        //table prefix
        if ($table_prefix) {
            $this->table = $table_prefix . 'micro_attributes';
        } else {
            $this->table = 'wp_micro_attributes';
        }
    }

    public function getAttributes()
    {
        return $this->wpdb->get_results("SELECT * FROM {$this->table}");
    }

    public function getAttributeId(int $id)
    {
        if ($id !== null) {
            $sql = "SELECT * FROM {$this->table} WHERE id = ${id}";
            try {
                return $this->wpdb->get_results($sql);
            } catch (Error $exception) {
                return $exception;
            }
        }
    }

    public function deleteAttribute(int $id)
    {
        if ($id !== null) {
            try {
                $item = $this->wpdb->delete($this->table, array(
                    "id" => $id
                ),
                    array(
                        '%d'
                    )
                );

                if ($item === 1){
                    //return $item;
                    return true;
                }
            } catch (Error $exception) {
                return $exception;
            }
            //
        }
        /* Завершаем выполнение */
        die();
    }

    public function addAttribute(string $title, string $slug)
    {
//        global $wpdb;

//        echo $title;

        if ($title !== null && $slug !== null) {

//            $sql = "INSERT INTO {$table_prefix}micro_attributes (title,slug) VALUES (%s,%s)";
//
//            //query -> prepare
//            $wpdb->query(
//                $wpdb->prepare(
//                    $sql,
//                    $title,
//                    $slug
//                )
//            );
            //query insert
            $item = $this->wpdb->insert($this->table,
                //data
                array(
                    "title" => $title,
                    "slug" => $slug
                    //format
                ), array(
                    '%s',
                    '%s'
                ));

            return $item;

            //return true;
            //
        }
        die();
    }
}
