<x-ecommerce.base.a {{ $attributes->class([])->merge(['href' => '#' , 'class' => 'btn btn-primary primary_button_color']) }}>
{{ $slot }}
</x-ecommerce.base.a>