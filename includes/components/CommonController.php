<?php

class CommonController {

    protected $_action;
    protected $_view;
    protected $_datas = [];

    public function __construct($actionUrl) {
        $this->_action = $actionUrl;


        $this->_process();
    }
    
      public function get_view() {

        return $this->_view;
    }

    public function get_datas() {

        return $this->_datas;
    }

}
