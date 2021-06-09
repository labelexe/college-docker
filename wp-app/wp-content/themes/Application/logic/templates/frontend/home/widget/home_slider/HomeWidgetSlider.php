<?php

use HomeWidgetSlider_Query;

class HomeWidgetSlider{

    /**
     * HomeWidgetSlider constructor.
     */

    protected $query;

    public function __construct()
    {
//        $this->query = new HomeWidgetSlider_Query();
    }
    public function getHomeSlider(){
        $this->query->getAllSlides();
    }
    public function getHomeSliderAjax(){

    }
}
