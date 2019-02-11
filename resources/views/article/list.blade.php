@foreach($articleInfo as $article)
    Title: <?=$article['title']?>
    <a href="<?=action('ArticleController@detail', [$article['id']]);?>">查看详情</a>
    <br>
@endforeach

