@props(['messages'])

@if ($messages)
    <div class="mt-1">
        @foreach ((array) $messages as $message)
            <p class="text-danger mb-1">{{ $message }}</p>
        @endforeach
    </div>
@endif
