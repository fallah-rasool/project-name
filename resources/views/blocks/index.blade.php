<h1>Blocks</h1>
<a href="{{ route('blocks.create') }}">Create New Block</a>
<ul>
    @foreach($blocks as $block)
        <li>{{ $block->title }} - {{ $block->content }}</li>
    @endforeach
</ul>
