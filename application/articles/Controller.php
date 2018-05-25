<?php

include_once SITE_PATH . '/application/articles/ModelArticle.php';

Class Controller  extends CommonController{

   
    
    protected function _process() 
 {
        $model_article = new ModelArticle;
        echo $this->_action;
        if ($this->_action === 'details')
            {
 
            $this->_datas = $model_article->article($_GET['id']);
            echo $_GET['id'];
            $this->_view = 'articles/article_detail.php';
            } 
          
            else if ($this->_action === 'form') 
                {
              
             $this->_view = 'articles/article_form.php';
                 }
            
            else if ($this->_action === 'ajax')      
            {
                     echo $model_article->articlesJSON();
                     exit;
                
            }
                
                 
        else {
            $this->_datas = $model_article->articles();
            
            $this->_view = 'articles/articles.php';
        }
        
        
    }

}