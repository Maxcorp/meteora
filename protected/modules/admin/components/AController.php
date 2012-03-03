<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class AController extends CController
{
        public $layout = 'application.modules.admin.views.layouts.main';
	public $menu = array();
	public $breadcrumbs = array();
        
        protected function beforeAction()
        {
            // если юзер не залогинен и текущий экшен не login, то редиректим на логин форму
            if(Yii::app()->controller->action->id != 'login' && Yii::app()->user->isGuest){
                //$this->redirect(Yii::app()->user->loginUrl);
            } else {
                return true;

            }
        }
}