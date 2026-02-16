<h1>Create Block</h1>
<form method="POST" action="{{ route('blocks.store') }}">
    @csrf
    <label>Title:</label>
    <input type="text" name="title"><br>
    <label>Content:</label>
    <textarea name="content"></textarea><br>
    <button type="submit">Save</button>
</form>
