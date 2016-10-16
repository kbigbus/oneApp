<?php
error_reporting(E_ALL);
require_once('XUtils.php');
$act = $_GET['act'];

switch(strtolower($act)) {
	case 'hearthandle':
		$arr = '处理爱心操作成功';
		break;
	case 'noteimg' :
		$arr = array(
				array('imgUrl'=> 'http://cdn.jinxidao.com/group1/M00/03/B4/ooYBAFe0OaqANuheAAGHCGYpjyA723.jpg?imageView2/5/w/480/h/240/interlace/1/q/80', 'noteId'=>1),
				array('imgUrl'=> 'http://cdn.jinxidao.com/group1/M00/03/B4/ooYBAFe0OaqANuheAAGHCGYpjyA723.jpg?imageView2/5/w/480/h/240/interlace/1/q/80', 'noteId'=>2),
				array('imgUrl'=> 'http://cdn.jinxidao.com/group1/M00/03/B4/ooYBAFe0OaqANuheAAGHCGYpjyA723.jpg?imageView2/5/w/480/h/240/interlace/1/q/80', 'noteId'=>3),
				array('imgUrl'=> 'http://cdn.jinxidao.com/group1/M00/03/B4/ooYBAFe0OaqANuheAAGHCGYpjyA723.jpg?imageView2/5/w/480/h/240/interlace/1/q/80', 'noteId'=>4),
				array('imgUrl'=> 'http://cdn.jinxidao.com/group1/M00/03/B4/ooYBAFe0OaqANuheAAGHCGYpjyA723.jpg?imageView2/5/w/480/h/240/interlace/1/q/80', 'noteId'=>5),
				array('imgUrl'=> 'http://cdn.jinxidao.com/group1/M00/03/B4/ooYBAFe0OaqANuheAAGHCGYpjyA723.jpg?imageView2/5/w/480/h/240/interlace/1/q/80', 'noteId'=>6),
				array('imgUrl'=> 'http://cdn.jinxidao.com/group1/M00/03/B4/ooYBAFe0OaqANuheAAGHCGYpjyA723.jpg?imageView2/5/w/480/h/240/interlace/1/q/80', 'noteId'=>7),
			);
		break;
	case 'notelist' :
		$arr = array(
				array(
					array('title'=> '火车穿山过1', 'desc'=> '火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1', 'noteId'=>1, 'linkUrl'=>'', 'tag'=>'短篇', 'author'=>'张翰是'),
					array('title'=> '火车穿山过2', 'desc'=> '火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1','noteId'=>2, 'linkUrl'=>'', 'tag'=>'连载', 'author'=>'张翰'),
					array('title'=> '火车穿山过3', 'desc'=> '火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1','noteId'=>3, 'linkUrl'=>'', 'tag'=>'长篇', 'author'=>'张是'),
				),
				array(
					array('title'=> '火车穿山过4', 'desc'=> '火车穿山过1火车穿山过1火车穿山过1火车穿山过1','noteId'=>4, 'linkUrl'=>'', 'tag'=>'中篇', 'author'=>'张翰是'),
					array('title'=> '火车穿山过5', 'desc'=> '火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1','noteId'=>5, 'linkUrl'=>'', 'tag'=>'短篇', 'author'=>'翰张是'),
					array('title'=> '火车穿山过6', 'desc'=> '火车穿山过1火车穿山过1火车穿山过1火车穿山过1','noteId'=>6, 'linkUrl'=>'', 'tag'=>'连篇', 'author'=>'翰是张'),
				),
				array(
					array('title'=> '火车穿山过7', 'desc'=> '火车穿山过1火车穿山过1火车穿山过1火车穿山过1','noteId'=>7, 'linkUrl'=>'', 'tag'=>'鬼篇', 'author'=>'是翰张'),
					array('title'=> '火车穿山过8', 'desc'=> '火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1火车穿山过1s','noteId'=>8, 'linkUrl'=>'', 'tag'=>'短篇', 'author'=>'翰张是'),
					array('title'=> '火车穿山过9', 'desc'=> '火车穿山过1火车穿山过1火车穿山过1火车穿山过1','noteId'=>9, 'linkUrl'=>'', 'tag'=>'连篇', 'author'=>'翰是张'),
				),
			);
		break;
	case 'notedetail':
		$id = $_GET['id'];
		$arr = array('id'=>$id, 'title'=> '小说标题'.$id, 'content'=> '小说内容'.$id, 'author'=>'作者', 'date'=>'2016-07-12', 'tag'=>'标签'.$id);
		break;
	case 'notecomment' :
		$id = $_GET['id'];
		$arr = array(
				array('name'=> '用户1', 'pic'=> '', 'comment'=>'评论内容1+评论内容'.$id, 'date'=> '2016.02.13', 'like'=>1111),
				array('name'=> '用户2', 'pic'=> '', 'comment'=>'评论内容2+评论内容'.$id, 'date'=> '2016.02.14', 'like'=>2222),
				array('name'=> '用户3', 'pic'=> '', 'comment'=>'评论内容3+评论内容'.$id, 'date'=> '2016.02.15', 'like'=>3333),
				array('name'=> '用户4', 'pic'=> '', 'comment'=>'评论内容4+评论内容'.$id, 'date'=> '2016.02.16', 'like'=>433),
				array('name'=> '用户5', 'pic'=> '', 'comment'=>'评论内容5+评论内容'.$id, 'date'=> '2016.02.17', 'like'=>114411),
				array('name'=> '用户6', 'pic'=> '', 'comment'=>'评论内容6+评论内容'.$id, 'date'=> '2016.02.18', 'like'=>44),
			);
		break;
	case 'music':
		//直接获取oneApp的数据
		$urls = array(
				'http://v3.wufazhuce.com:8000/api/music/update/1065/2016-10-11%2015:17:01?version=3.5.0&platform=android',
				'http://v3.wufazhuce.com:8000/api/music/update/1073/2016-10-11%2015:17:01?version=3.5.0&platform=android',
				'http://v3.wufazhuce.com:8000/api/music/update/1071/2016-10-11%2015:17:01?version=3.5.0&platform=android',
			);
		$mp3List = array(
			'http://mr1.doubanio.com/e1806a6962e1c1f1617798d36d22ccc6/0/fm/song/p1390493_128k.mp3',
			'http://mr3.doubanio.com/6ba9d99ac640008a90957f916da9d6bf/0/fm/song/p1646245_128k.mp3',
			'http://mr1.doubanio.com/588576d5504e796951ffe4065b689399/0/fm/song/p1440601_128k.mp3');
		$arr = [];
		foreach($urls as $key=>$url) {
			$tmpContent = file_get_contents($url);
			$tmpArr = json_decode($tmpContent,true);
			if(isset($tmpArr['data']) && $tmpArr['data']) {
				$tmpArr['data']['mp3Url'] = $mp3List[$key];
				$arr[] = $tmpArr['data'];
			}
		}
		break;
	default:
		$arr = array(
			array('id'=>1,'imgUrl'=>'http://cdn.jinxidao.com/group1/M00/03/B4/ooYBAFe0OaqANuheAAGHCGYpjyA723.jpg?imageView2/5/w/480/h/240/interlace/1/q/80', 'author'=> '难念的风', 'volname'=> 'VOL.1451', 'content'=> '写出你一生要做的事情，把单子放在皮夹里，经常拿出来看。人生要有目标，要有计划，要有提醒，要有紧迫感。一个又一个小目标串起来，就成了你一生的大目标。生活富足了，环境改善了，不要忘了皮夹里那张看似薄薄的单子。', 'date'=> '2016-09-27', 'like'=> '11111', 'heartFill'=>false),
			array('id'=>2,'imgUrl'=>'http://cdn.jinxidao.com/group1/M00/03/B4/ooYBAFe0OaqANuheAAGHCGYpjyA723.jpg?imageView2/5/w/480/h/240/interlace/1/q/80', 'author'=> '难念的经', 'volname'=> 'VOL.1450', 'content'=> '每当疲惫的时候，那就停下脚步，遥想追逐的远方，汲取力量再上路；每当困惑的时候，那就停下脚步，梳理纷乱的思绪，驱走迷茫再上路；每当痛苦的时候，那就停下脚步，抚摸流血的伤口，擦干眼泪再上路；每当放弃的时候，那就停下脚步，作出艰难的取舍，振奋精神再上路。我们停下脚步，其实只为走得更远。', 'date'=> '2016-09-26', 'like'=> '22222', 'heartFill'=>true),
			array('id'=>3,'imgUrl'=>'http://cdn.jinxidao.com/group1/M00/03/B4/ooYBAFe0OaqANuheAAGHCGYpjyA723.jpg?imageView2/5/w/480/h/240/interlace/1/q/80', 'author'=> '难念的经', 'volname'=> 'VOL.1449', 'content'=> '很多幸福的女人都知道，好丈夫并不是最好的那个男人，而是他无论何时，都像她那双穿起来最舒服的鞋子。——爱情在不同的阶段有不同的表现方式，婚前是激情，婚后多亲情，看起来完全两样，但本质上是一样的，就像蝌蚪与青蛙、毛毛虫与蝴蝶的关系。婚后的爱情不是死了，而是羽化了。', 'date'=> '2016-09-25', 'like'=> '33333', 'heartFill'=>false),
			array('id'=>4,'imgUrl'=>'http://cdn.jinxidao.com/group1/M00/03/B4/ooYBAFe0OaqANuheAAGHCGYpjyA723.jpg?imageView2/5/w/480/h/240/interlace/1/q/80', 'author'=> '难念的经', 'volname'=> 'VOL.1448', 'content'=> '人，心至善，情至诚，志必坚。 人，得意不可忘形，失意不可失志。 人，应有有耻辱感，没有耻辱感就不可能有自尊心。 人，每说一句话，每做一件事，都有要考虑会否影响别人，会否损害别人，这是一个人最起码的素质。', 'date'=> '2016-09-24', 'like'=> '44444', 'heartFill'=>false),
			array('id'=>5,'imgUrl'=>'http://cdn.jinxidao.com/group1/M00/03/B4/ooYBAFe0OaqANuheAAGHCGYpjyA723.jpg?imageView2/5/w/480/h/240/interlace/1/q/80', 'author'=> '难念的经', 'volname'=> 'VOL.1447', 'content'=> '请记得，好朋友的定义是：你混的好，她打心眼里为你开心；你混的不好，她由衷的为你着急。要有梦想，即使遥远。 努力爱一个人。付出，不一定会有收获；不付出，却一定不会有收获，不要奢望出现奇迹。 承诺是一件美好的事情，但美好的东西往往不会变为现实。', 'date'=> '2016-09-23', 'like'=> '55555', 'heartFill'=>false),
			array('id'=>6,'imgUrl'=>'http://cdn.jinxidao.com/group1/M00/03/B4/ooYBAFe0OaqANuheAAGHCGYpjyA723.jpg?imageView2/5/w/480/h/240/interlace/1/q/80', 'author'=> '难念的经', 'volname'=> 'VOL.1446', 'content'=> '心安，便是活着的最美好状态。人生是一种态度，心静自然天地宽。不一样的你我，不一样的心态，不一样的人生。忍耐不是软弱，不是逃避，而是一种心灵的超越。吃亏能养德，忍耐能养心。吃亏时不计较，不比较，想得开，这样的人才能做大事。', 'date'=> '2016-09-22', 'like'=> '66666', 'heartFill'=>false),
			);
		break;
}

$ret = array('code'=>1000, 'message'=>'SUCCESS', 'content'=>$arr);
echo XUtils::echoJson($ret);