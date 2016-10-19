<?php
/**
 * Created by PhpStorm.
 * User: 涧戾
 * Date: 2016/10/19
 * Time: 22:55
 * 商城首页控制器
 */

 class IndexController extends Controller {
     //展示首页
     function actionIndex() {

         //渲染视图
         $this->renderPartial('index');
//         echo "this is first page";
     }
 }