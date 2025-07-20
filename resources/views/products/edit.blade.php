<x-layout>
<h1>Edit Products</h1>
<form method="post" action="{{ route("products.update",$product->id) }}">
    @method("PATCH")
    <x-products.form :product="$product"/>
    </form>
</x-layout>
