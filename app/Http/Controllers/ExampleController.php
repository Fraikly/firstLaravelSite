<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function one(){
        return "One";
    }
    public function two(){
        return' two';
    }

//training with migration
    private function show($n){
        $id=Post::find($n)->id;
        $name=Post::find($n)->name;
        $about=Post::find($n)->about;
        $likes=Post::find($n)->likes;
        print_r("id = {$id}, name={$name}, about: {$about}, likes={$likes} |||||| ") ;
    }
    public function table(){
        //precious one
        static $count_id=1;
        $this->show($count_id);
        $count_id++;
        $this->show($count_id);

        //the same as the previous one
        $tables=Post::all();
        foreach ($tables as $table){
            $id=$table->id;
            $name=$table->name;
            $about=$table->about;
            $likes=$table->likes;
            print_r("id = {$id}, name={$name}, about: {$about}, likes={$likes} |||||| ") ;
        }
    }
    public function create(){
        Post::create([
            'name' => 'different',
            'about' => 'hi',
            'likes' =>30
        ]);
    }

    public  function update(){
        $table = Post::find(3);
        $table->update(["name"=> "update"]);
    }
}
