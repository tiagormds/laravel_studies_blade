<div class="card p-3 my-3">
    <h3 class="{{ $colorname() ? 'text-info' : '' }}">{{ $pessoa }}</h3>
    <hr>
    <p class="test-light">Línguas que domina: </p>
    <ul class="text-start">
        @foreach($linguas as $lingua)
            <li class="text-warning">{{ $lingua }}</li>
        @endforeach
    </ul>
</div>
