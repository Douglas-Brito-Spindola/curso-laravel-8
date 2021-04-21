<h1>Detalhe do post</h1>

<ul>
	 <li>
		<strong>Titulo:</strong> {{$post->title}}
	</li>
	<li>
		<strong>Conteúdo:</strong> {{$post->content}}
	</li>
</ul>

<form action="{{ route('posts.destroy', $post->id)}}" method="post">
	@csrf
	<input type="hidden"  name="_method" value="delete">
	<button type="submit">Delete o post {{$post->title}}</button>
</form>
