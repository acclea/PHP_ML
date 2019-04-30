<?php
/**
 * Created by PhpStorm.
 * User: leshu
 * Date: 2019/4/30
 * Time: 16:37
 */
use Phpml\Classification\KNearestNeighbors;
class Home extends MY_Controller{

    /**
     *-------------------------------------
     * @Function                 __construct
     * @Author                   acclea
     * @Date                     2019/4/30
     * @Time                     16:32
     * @Describe                 构造函数
     *-------------------------------------
     */
    public function __construct(){
        parent::__construct();
    }

    //-------------------------------------------------------------------


    /**
     *-------------------------------------
     * @Function                 index
     * @Author                   acclea
     * @Date                     2019/4/30
     * @Time                     16:41:43
     * @Describe                 index
     *-------------------------------------
     */
    public function index(){

        $samples = array(array(1, 3), array(1, 4), array(2, 4), array(3, 1), array(4, 1), array(4, 2));
        $labels = array('a', 'a', 'a', 'b', 'b', 'b');

        $classifier = new KNearestNeighbors();
        $classifier->train($samples, $labels);

        echo $classifier->predict(array(3, 2));
    }

    //-------------------------------------------------------------------
}