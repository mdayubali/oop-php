<?php
class Father{
    public function firstname(){
        return "My First Name is Md Ayub";
    }
    protected function name(){
        echo "My Name is Mojammel";
    }
}
class Son extends Father{
    function fname(){
        return $this->name();
    }
}
$objs = new Son();
echo $objs->firstname();
echo "<br>";
echo $objs->fname();