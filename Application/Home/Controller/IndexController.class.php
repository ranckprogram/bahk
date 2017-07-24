<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function index($page = 1) {
		// 初始页为1
		$article = D("article");
		$news = $article->page($page, 15)->articleList();
		$blackList = $article->blackList();
		$map["id"] = array('not in', $blackList);
		$count = $article->where($map)->count(); //总条数
		$total = ceil($count / 15);
		$sidehot = $article->order('views desc')->where($map)->limit(6)->select();
		$newsest = $article->order('time desc')->where($map)->limit(6)->select();
		$this->assign("sidehot", $sidehot);
		$this->assign("newsest", $newsest);
		$this->assign("news", $news);
		$this->assign("page", $page);
		$this->assign("total", $total);
		$this->display();
	}

	public function article($id) {
		$article = D("article");
		$map["id"] = $id;
		$new = $article->where($map)->select();
		$data["id"] = $id;
		$data["views"] = (int) ($article->where($map)->getField("views")) + 1;
		$article->save($data);
		$blackList = $article->blackList();
		$notblacklist["id"] = array('not in', $blackList);
		$sidehot = $article->order('views desc')->where($notblacklist)->limit(6)->select();
		$newsest = $article->order('time desc')->where($notblacklist)->limit(6)->select();
		//评论
		$commit = M("commit");
		$commitLink = M("commit_article");
		$mappoint["articleid"] = $id;
		$maplink = $commitLink->where($mappoint)->select();
		if ($maplink) {
			//如果该文章有评论
			$commitid["id"] = array("in", arrChange($maplink, "commitid"));
		} else {
			$commitid["id"] = array("in", [""]);
		}
		$commiter = $commit->where($commitid)->select();
		$this->assign("sidehot", $sidehot);
		$this->assign("newsest", $newsest);
		$this->assign("new", $new[0]);
		$this->assign("commiter", $commiter);
		$this->display("details");
	}
	public function commit() {
		//以后或许可以 有黑名单过滤掉某些人 邮箱  邮箱验证
		$article = $_POST['articleid'];
		$data["name"] = $_POST['name'];
		$data["email"] = $_POST['email'];
		$data["text"] = $_POST['text'];
		$data['time'] = Date('Y-m-d H:i:s');
		$commit = M("commit");
		$result = $commit->add($data);
		if ($result) {
			// 如果主键是自动增长型 成功后返回值就是最新插入的值
			$insertId = $result;
		}
		//获得当前文章 ID 添加关联表信息
		$commitLink = M("commit_article");
		$dataId["articleid"] = $article;
		$dataId["commitid"] = $insertId;
		$commitLink->data($dataId)->add();
		$this->ajaxReturn($data);
	}

	public function test() {
		$test = D("Article");
		$result = $test->ableViewPaper();

	}

}