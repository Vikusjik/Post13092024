<x-app-layout>
    <h1>edit posts</h1>
    <form action="{{route('posts.update', $post)}}" method="post">
        @csrf
        @method('put')
        <label for="title"> Title: </label>
        <input type="text" id="title" name="title" value="{{$post->title}}">

        <label for="content"> Content: </label>
        <textarea name="content" id="content" >{{$post->content}}</textarea>

        <br>
        <input type="hidden" name="user_id" value="1">
        <input type="submit" value="update">
    </form>
</x-app-layout>