<?php
namespace Admin\Controller;
use Common\Controller\SessionController;

class AdminController extends SessionController {
	public function alist() {
		//黑名单
		$blacklist = M("blacklist");
		$blackid = $blacklist->group("blackid")->field('blackid')->select();
		if ($blackid) {
			$b = array();
			foreach ($blackid as $v) {
				$b[$v['blackid']] = $v['blackid'];
			};
			// $string=join(',',$b);  // 用字符串也行
			$map['id'] = array('not in', $b);
		}

		// 文章
		$article = M("article");
		$list = $article->order("id desc")->where($map)->select(); //分页 / 分类  /过滤掉 黑名单的-逻辑删除
		$this->assign("list", $list);
		$this->display();
	}
	public function edit($id) {
		$article = M("article");
		$map["id"] = $id;
		$paper = $article->where($map)->select();
		$this->assign("paper", $paper[0]);
		$this->display("edit");
	}
	public function news() {
		$this->display("edit");
	}
	public function update($id) {
		$map['title'] = $_POST["title"];
		$map['text'] = $_POST["text"];
		$map['time'] = Date("y-m-d h-m-s");
		$article = M("article");
		$point["id"] = $id;
		$article->where($point)->save($map); // 根据条件更新记录
	}
	public function save() {
		$map['title'] = $_POST["title"];
		$map['text'] = $_POST["text"];
		$map['views'] = 0;
		$map['time'] = Date("y-m-d h-m-s");
		$article = M("article");
		$article->add($map);
	}
	public function del($id) {
		//将其id写入黑名单 ，做逻辑删除
		$data["blackid"] = $id;
		$blacklist = M("blacklist");
		$blacklist->data($data)->add();
	}
}
