<?php

class DefaultController extends AController
{
	public function actionIndex()
	{
		$this->render('index');
	}
        
        public function actionLogin()
	{
		$this->render('LoginForm');
	}
        
        public function test()
        {
            echo "test";
        }
}