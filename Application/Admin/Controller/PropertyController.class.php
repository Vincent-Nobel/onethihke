<?php
/**
 * Created by PhpStorm.
 * User: 22121
 * Date: 2017/8/10
 * Time: 15:01
 */

namespace Admin\Controller;


class PropertyController extends AdminController
{
    public function index(){
//        $pid = i('get.pid', 0);
        /* 获取频道列表 */
//        $map  = array('status' => array('gt', -1), 'pid'=>$pid);
        $list = M('Property')->select();
//        var_dump($list);exit;
        $this->assign('list', $list);
//        $this->assign('pid', $pid);
        $this->meta_title = '导航管理';
        $this->display();
    }
    //添加
    public function add()
    {
        if(IS_POST){

            $Channel = D('Property');
            $data = $Channel->create();
//            var_dump($_POST);exit;
            if($data){
                $Channel->tel=$_POST['tel'];
                $sn = date('Ymd').substr(implode(NULL,array_map('ord',str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
                $Channel->number=$sn;
//                var_dump($_POST);exit;
                $id = $Channel->add();
                if($id){
                    $this->success('新增成功', U('index'));
                    //记录行为
                    action_log('update_property', 'property', $id, UID);
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($Channel->getError());
            }
        } else {
            $pid = i('get.pid', 0);
            //获取父导航
            if(!empty($pid)){
                $parent = M('Property')->where(array('id'=>$pid))->field('title')->find();
                $this->assign('parent', $parent);
            }
//            var_dump($pid);exit;
            $this->assign('pid', $pid);
            $this->assign('info',null);
            $this->meta_title = '新增导航';
            $this->display('add');
        }
    }
    /**
     * 编辑频道
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function edit($id){

        if(IS_POST){
            $Channel = D('Property');
//            $data = $Channel->create();
//            var_dump($_POST);exit;
            $data = $Channel->create();
            if($data){
                if($Channel->save()){
                    //记录行为
                    action_log('update_property', 'channel', $data['id'], UID);
                    $this->success('编辑成功', U('index'));
                } else {
                    $this->error('编辑失败');
                }

            } else {
                $this->error($Property->getError());
            }
        } else {
            $info = array();
            /* 获取数据 */
            $info = M('Property')->find($id);
//            var_dump($info);
            if(false === $info){
                $this->error('获取配置信息错误');
            }

            $pid = i('get.pid', 0);
            //获取父导航
            if(!empty($pid)){
                $parent = M('Property')->where(array('id'=>$pid))->field('title')->find();
                $this->assign('parent', $parent);
            }
//            var_dump($info);exit;
            $this->assign('pid', $pid);
            $this->assign('info', $info);
            $this->meta_title = '编辑导航';
            $this->display();
        }
    }
    //删除
    public function del(){
//        var_dump($id);exit;
        $id = array_unique((array)I('id',0));
//        var_dump($id);exit;
        if ( empty($id) ) {
            $this->error('请选择要操作的数据!');
        }

        $map = array('id' => array('in', $id) );
        if(M('Property')->where($map)->delete()){
            //记录行为
            action_log('update_channel', 'channel', $id, UID);
            $this->success('删除成功');
        } else {
            $this->error('删除失败！');
        }
    }

}