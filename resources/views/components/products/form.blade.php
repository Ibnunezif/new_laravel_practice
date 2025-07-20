@csrf
<label for="name">Name</label>
<input type="text" name="name" id="name" value="{{ old('name',$product->name ?? '') }}" />
@error('name')
<p class="text-danger">{{ $message }}</p>
@enderror

<label for="description">Description</label>
<textarea name="description" id="description" >{{ old('description',$product->description ?? '') }}</textarea>
@error('description')
<p class="text-danger">{{ $message }}</p>
@enderror

<label for="size">Size</label>
<input type="text" name="size" id="size" value="{{ old('size',$product->size ?? '') }}" />
@error('size')
<p class="text-danger">{{ $message }}</p>
@enderror

<button type="submit">Save</button>