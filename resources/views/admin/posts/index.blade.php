<!DOCTYPE html>
<html>
{{-- Link para ir para o form de criar um posta, impressão dentro do href tem o nome da rota. --}}
<a href="{{ route('posts.create')}}"> Criar novo post</a>
<head>
	<title>xxxx</title>
</head>
<body>
<h1>Posts</h1>
@foreach($posts as $post)

<p>{{ $post->title }} [ <a href="{{route('posts.show', $post->id)}}"> Ver </a> ]</p>

@endforeach

</body>
</html>