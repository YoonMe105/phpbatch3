<?php

// Note:: Interface is just a rule.
// Note:: Interface can't include body.
//         Modifier must be public in interface, cuz we need to override
//         A class must the implements keyword
interface artical{

    public function setid();
    public function createarticle();
    public function readarticle($id);
    public function updatearticle($id,$title);
    public function deletearticle();

}

class myinterface implements artical{

    public function setid(){
        echo "I am setid ID. <br/>";
    }

    public function createarticle(){
        echo "I am create article. <br/>";
    }

    public function readarticle($id){
        echo "I am read article.ID is ${id} <br/>";
    }

    public function updatearticle($id,$title){
        echo "I am update article.ID is ${id} and Title is ${title} <br/>";
    }

    public function deletearticle(){
        echo "I am delete article. <br/>";
    }
    
}



echo "This is Interface. <br/>";

$obj = new myinterface();
$obj->setid();
$obj->createarticle();
$obj->readarticle(10);
$obj->updatearticle(10,'This is new article 10');
$obj->deletearticle();


echo "<hr/>";



?>