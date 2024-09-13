<x-app-layout>
    <h1>All posts</h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <div>
                    <a href="{{ route('posts.show', $post) }}">Show</a>
                    <a href="{{ route('posts.edit', $post) }}">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <!-- Исправляем маршрут для создания поста -->
    <a href="{{ route('posts.create') }}">Create</a>
</x-app-layout>