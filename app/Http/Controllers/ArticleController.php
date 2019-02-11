<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon as Carbon;
use Illuminate\Http\Request;
use Mockery\Exception;

class ArticleController extends Controller
{
    private $article;

    public function __construct()
    {
        $this->article = new \App\Article();
    }

    //
    public function index()
    {
        $username = 'aboo';
        $email = 'josh.xia@163.com';
//        return view('article.list', compact('username', 'email'));
//        return view('article.list')->with('username', $username);

//        return view('article.list', [
//            'username' => 'Josh',
//            'email'    => 'josh.xia@163.comomomom',
//        ]);
    }

    public function addArticle()
    {
        $article = new \App\Article();
        $article->title        = "Josh's first Article";
        $article->introduction = 'article article';
        $article->content      = "Josh's first Article";
        $article->published_at = Carbon::now();
        $res = $article->save();
        var_dump($res);
    }

    /**
     * todo 批量写入文章
     */
    public function addArticleBatch()
    {
        // todo 错误写法
        for ($i=0, $max=10; $i < $max; $i++) {
            $this->article->title        = "Josh's " . $i . "th Article";
            $this->article->introduction = 'article article';
            $this->article->content      = "Josh's " . $i . "th Article";
            $this->article->published_at = Carbon::now();
            $this->article->save();
        }

        // todo 正确写法
        for ($i=0, $max=10; $i < $max; $i++) {
            $article = new \App\Article();// 每次循环都需要实例化一个新的model
            $article->title        = "Josh's " . $i . "th Article";
            $article->introduction = 'article article';
            $article->content      = "Josh's " . $i . "th Article";
            $article->published_at = Carbon::now();
            $article->save();
        }

        echo 'success';
    }



    public function findArticleToArray()
    {
        $article = new \App\Article();
        $articleInfo = $article::find(1)->toArray();
        var_dump($articleInfo);
    }

    public function findArticleToJson()
    {
        $article = new \App\Article();
        $articleInfo = $article::find(1)->toJson();
        var_dump($articleInfo);
    }

    public function findArticleByCondition()
    {
        $articleInfo = \App\Article::where('title', '=', "Josh's first Article")->get()->toArray();
        var_dump($articleInfo);
    }

    public function update()
    {
        $article = \App\Article::find(4);
//        $article->introduction = 'test test';
//        $res = $article->save();

        $res = $article->update([
            'content' => 'check check',
        ]);

        var_dump($res);
    }

    public function findFull()
    {
        $article = Article::findOrFail(99);
        var_dump($article);

    }

    // todo 列表
    public function articleList()
    {
        $articleInfo = Article::all()->toArray();
        return view('article.list', compact('articleInfo'));
    }

    // todo 详情
    public function detail($id)
    {
        $articleInfo = Article::find($id);
        return view('article.detail', compact('articleInfo'));
    }

    // todo 新增 页面
    public function articleAdd()
    {

    }

    // todo 新增 动作
    public function doArticleAdd()
    {

    }

    // todo 修改 页面
    public function articleChange()
    {

    }

    // todo 修改 动作
    public function doArticleChange()
    {

    }

    // todo 删除 动作
    public function doArticleDelete()
    {

    }
}
