<?php

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

class HomeWidgetSlider_Query
{
    protected $model;
    public $table_name = "wp_home_slides";

    public function __construct()
    {
        global $wpdb;
        $this->model = $wpdb;
    }

    /**
     * @return QM_DB|wpdb
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Получение слайдера
     * @param $id
     */

    public function getSlider($id)
    {
        $this->getModel()->get_results('SELECT * ');
    }

    /**
     * Получение слайда по id
     * @param int $id
     * @return array|object|null
     */
    public function getSlideId(int $id)
    {
        $getResult = $this->getModel()->query("SELECT * FROM $this->table_name WHERE `id` = $id");
        if (isset($id) && $getResult !== null) {
            $getResult = $this->getModel()->get_results("SELECT * FROM $this->table_name WHERE `id` = $id");
            return $getResult;
        } else {

        }
    }

    /**
     * Получение всех слайдов
     * @return array|object|null
     */

    public function getAllSlides()
    {
        return $this->getModel()->get_results("SELECT * FROM $this->table_name");
    }

    /**
     * Добавление слайда в таблице
     * @param array $data
     */

    public function insertSlide(array $data)
    {
        if (isset($data)) {
            $this->getModel()->insert($this->table_name, $data, null);
        } else {
            throw new RuntimeException('Not set data');
        }
    }

    /**
     * Обновление слайда
     * @param int $id
     * @param array $data
     */
    public function updateSlide(int $id, array $data)
    {
        $dataResult = [];
        if (isset($data) && isset($id)) {
            //check change name
            if ($data['name']) {
                $dataResult['name'] = $data['name'];
            }
            //check change post_id
            if ($data['post_id']) {
                $dataResult['post_id'] = $data['post_id'];
            }
            //check change description
            if ($data['description']) {
                $dataResult['description'] = $data['description'];
            }
            //check change image url
            if ($data['image']) {
                $dataResult['image'] = $data['image'];
            }

            $dataResult = [];

            $this->getModel()->update($this->table_name, $dataResult, null);

        } else {
            throw new RuntimeException('Not set data');
        }
    }


    public function initialTableSlide()
    {
        $charset_collate = $this->getModel()->get_charset_collate();
        $sql = "CREATE TABLE $this->table_name (
    `id` MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
	`name` TINYTEXT NOT NULL,
	`post_id` bigint NULL,
	`description` MEDIUMTEXT NULL,
	`time` DATETIME NULL DEFAULT NULL,
	`image` MEDIUMTEXT NULL,
	PRIMARY KEY (`id`)) $charset_collate;";
        dbDelta($sql);
    }

}
