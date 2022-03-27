@if ($errors->any())
<div class="alert-danger">
    <ul class="style_list-none">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

    </ul>
</div>

@endif
