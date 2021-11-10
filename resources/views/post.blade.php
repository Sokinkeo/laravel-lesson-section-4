@extends("layout")

@section('content')
    <body>
    <article>
        <h1><?= $post->title; ?></h1>
        <div>
            <?= $post->body; ?>
        </div>
        <a href="/">Go back</a>
    </article>


    </body>
@endsection
