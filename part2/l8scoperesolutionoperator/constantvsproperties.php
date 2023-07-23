<?php

class constantvsproperties{

    const ARTICLE = 'This is new article for SPORT';
    const TOPIC = "This is new topic for SPORT";
    public $post = "This is new post for SPORT";  // baby>contentone result = POLITICAL
    // protected $post = "This is new post for SPORT"; // baby>contentone result = POLITICAL
    // private $post = "This is new post for SPORT";  // baby>contentone result = SPORT

    public function contentone(){
        echo self::ARTICLE;
        echo "<br/>";

        echo static::TOPIC;
        echo "<br/>";

        echo $this->post;
        echo "<br/>";
    }

}

class baby extends constantvsproperties{

    const ARTICLE = 'This is new article for POLITICAL';
    const TOPIC = "This is new topic for POLITICAL";

    public $post = "This is new post for POLITICAL";

    public function contenttwo(){
        echo self::ARTICLE;
        echo "<br/>";

        echo static::TOPIC;
        echo "<br/>";

        echo $this->post;
        echo "<br/>";
    }
}

echo "This is Constant vs Properties <br/>";

$obj = new constantvsproperties();
$obj->contentone();

echo "<br/>";

$bb = new baby();
$bb->contentone();
echo "<br/>";
$bb->contenttwo();

echo "<hr/>";

?>