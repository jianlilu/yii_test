<?php
/**
 * Created by PhpStorm.
 * User: 涧戾
 * Date: 2016/10/19
 * Time: 22:20
 */

class GoodsController extends Controller {
    /*商品列表页面*/
    function actionCategory() {

//        render() 带布局渲染
//        renderPartial() 部分渲染
    $this->renderPartial('category');
    }


    //商品详细页面
    function actionDetail() {
        $this->renderPartial('detail');
    }
}