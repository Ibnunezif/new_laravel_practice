<x-layout>
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>{{ $product->size }}</p>
    <a href={{ route("product.edit",$product->id) }}>Edit</a>
</x-layout>
