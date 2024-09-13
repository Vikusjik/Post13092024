<x-app-layout>
    <h1>Create posts</h1>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <label for="title"> Title: </label>
        <input type="text" id="title" name="title">

        <label for="content"> Content: </label>
        <textarea name="content" id="content" ></textarea>

        <br>
        <input type="hidden" name="user_id" value="1">
        <input type="submit" value="Create">
    </form>
</x-app-layout>