<div class="form-group mb-3">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $book->title ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="thumbnail">Thumbnail</label>
    <input type="text" name="thumbnail" id="thumbnail" class="form-control" value="{{ old('thumbnail', $book->thumbnail ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="author">Author</label>
    <input type="text" name="author" id="author" class="form-control" value="{{ old('author', $book->author ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="publisher">Publisher</label>
    <input type="text" name="publisher" id="publisher" class="form-control" value="{{ old('publisher', $book->publisher ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="publication">Publication Date</label>
    <input type="date" name="publication" id="publication" class="form-control" value="{{ old('publication', $book->publication ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="price">Price</label>
    <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $book->price ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="quantity">Quantity</label>
    <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity', $book->quantity ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id" class="form-control" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ isset($book) && $book->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>
