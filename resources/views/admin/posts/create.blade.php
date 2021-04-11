<h1>Novo post</h1>
<form action="{{ route('posts.store')}}" method="post">
	@csrf
	<input type="text" name="title" placeholder="Título">
	<textarea name="content" id="content" cols="30" rows="4" ></textarea>
	<button type="submit">enviar</button>
</form>