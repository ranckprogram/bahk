<?php
namespace Home\Model;
use Think\Model;

class ArticleModel extends Model {
	public function Article(){
		echo "hehe";
	}

	//黑名单
	public function blackList($attr="blackid"){
		$blacklist = M("blacklist"); 
        $blackAttr = $blacklist->group($attr)->field($attr)->select();
        if($blackAttr){
        	$result = arrChange($blackAttr,$attr);
        	return $result;
        }else{
        	return ""; 
        }
	}
	// 可见的文章
	public function articleList($param){
		$blackList= $this->blackList();
		$map["id"] = array('not in',$blackList);
        if($param=="hotest"){
        	$articleList = $this->order('views desc')->limit(6)->where($map)->select();
        }else if($param=="newest"){
        	$articleList = $this->order('time desc')->limit(6)->where($map)->select();
        }else{
        	$articleList = $this->order('time desc')->where($map)->select();
        }
        return $articleList;
	}

	// 可见的文章---同上 ，但是另一种 ->select()
	public function articleListother($param){
		$blackList= $this->blackList();
		$map["id"] = array('not in',$blackList);
        if($param=="hotest"){
        	$articleList = $this->order('views desc')->limit(6)->where($map);
        }else if($param=="newest"){
        	$articleList = $this->order('time desc')->limit(6)->where($map);
        }else{
        	$articleList = $this->order('time desc')->where($map);
        }
        return $articleList;
	}

}