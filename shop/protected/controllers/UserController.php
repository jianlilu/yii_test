<?php
/**
 * Created by PhpStorm.
 * User: 涧戾
 * Date: 2016/10/19
 * Time: 21:17
 * 用户控制器
 */

class UserController extends Controller {
    function actionLogin() {
//        echo "i want to login";
//        通过控制器方法调用视图
//        renderPatial()调用视图
        $this->renderPartial('login');
    }
}
