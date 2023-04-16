<button @if($isDisabled) disabled @endif {{ $attributes->class(['btn btn-' . $color])->merge(['type' => $type]) }}>
    {{ $slot }}
</button>
