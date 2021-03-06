@extends("layout")

@section('content')
    <body>
    <?php foreach ($posts as $post) : ?>

    <article>

        <a href="/posts/<?=$post->slug ?>"><h1><?= $post->title; ?></h1></a>
        <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        <div><?= $post->excerpt ?></div>
    </article>
    <?php endforeach; ?>

    </body>
@endsection
