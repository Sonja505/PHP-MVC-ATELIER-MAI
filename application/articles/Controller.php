<?php

Class Controller {

    private $_action;
    private $_datas = array();
    private $_view = 'articles/article_detail.php';

    public function __construct($actionUrl) {


        $this->_action = $actionUrl;



        if ($this->_action === 'details') {

            $this->_article($_GET['id']);
        } else {
            $this->_articles();
        }
    }

    private function _articles() {


        $db = Db::connect();

        $results = $db->query('SELECT * FROM articles');

        if (!$db->errno && $results->num_rows > 0) {
            $this->_datas['articles'] = $results;
        }

        $this->_view = 'articles/articles.php';
    }

    private function _article($id) {


        $db = Db::connect();

        $results = $db->query('SELECT * FROM articles WHERE IdArticle = \'' . $db->real_escape_string($id) . '\'');

        if (!$db->errno && $results->num_rows > 0) {
            $this->_datas['article'] = $results;
        }

        $this->_view = 'articles/article_detail.php';
    }

    public function get_view() {

        return $this->_view;
    }

    public function get_datas() {

        return $this->_datas;
    }

}
