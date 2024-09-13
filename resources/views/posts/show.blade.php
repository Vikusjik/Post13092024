<x-app-layout>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>

    <h2>Comments</h2>
    <ul>
        @foreach ($post->comments as $comment)
            <li>{{ $comment->content }}</li>
        @endforeach
    </ul>

    <form action="{{ route('posts.storeComment', $post) }}" method="POST">
        @csrf
        <textarea name="content" placeholder="Add a comment"></textarea>
        <br>
        <input type="submit" value="Add Comment" >
    </form>
</x-app-layout>