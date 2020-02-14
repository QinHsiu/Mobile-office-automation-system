<?php
/**
 * 
 * @authors	九炼 (cherish@cherish.pw)
 * @wat 传智播客教育集团 PHP学院
 * @date    2016-06-18 23:29:23
 * @url 	http://dwz.cn/920815
 * @desc	无限级分类
 *
 * ━━━━━━神兽出没━━━━━━
 * 　　   ┏┓　 ┏┓
 * 　┏━━━━┛┻━━━┛┻━━━┓
 * 　┃              ┃
 * 　┃       ━　    ┃
 * 　┃　  ┳┛ 　┗┳   ┃
 * 　┃              ┃
 * 　┃       ┻　    ┃
 * 　┃              ┃
 * 　┗━━━┓      ┏━━━┛ Code is far away from bugs with the animal protecting.
 *       ┃      ┃     神兽保佑,代码无bug。
 *       ┃      ┃
 *       ┃      ┗━━━┓
 *       ┃      　　┣┓
 *       ┃      　　┏┛
 *       ┗━┓┓┏━━┳┓┏━┛
 *     　  ┃┫┫　┃┫┫
 *     　  ┗┻┛　┗┻┛
 *
 * ━━━━━━感觉萌萌哒━━━━━━
 */

#递归方法实现无限极分类
function getTree($list,$pid=0,$level=0) {
	static $tree = array();
	foreach($list as $row) {
		if($row['pid']==$pid) {
			$row['level'] = $level;
			$tree[] = $row;
			getTree($list, $row['id'], $level + 1);
		}
	}
	return $tree;
}