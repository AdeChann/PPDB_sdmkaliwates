@if ($errors->any())
<div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3">
    <ul>
        @foreach ($errors->all() as $item )
        <li>{{item}}</li>
        @endforeach
    </ul>
</div>

@endif
