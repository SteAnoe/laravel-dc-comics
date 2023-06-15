<form action="{{route('comics.update', $comic)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label class="form-label" for="">title</label>
        <input class="form-control" type="text" name="title" value="{{old('title') ?? $comic->title }}">
    </div>
    <div class="form-group">
        <label class="form-label" for="">description</label>
        <textarea class="form-control" type="text" name="description">{{old('description') ?? $comic->description }}</textarea>
    </div>
    <div class="form-group">
        <label class="form-label" for="">thumb</label>
        <input class="form-control" type="text" name="thumb" value="{{old('thumb') ?? $comic->thumb }}">
    </div>
    <div class="form-group">
        <label class="form-label" for="">price</label>
        <input class="form-control" type="number" name="price" value="{{old('price') ?? $comic->price }}">
    </div>
    <div class="form-group">
        <label class="form-label" for="">series</label>
        <input class="form-control" type="text" name="series" value="{{old('series') ?? $comic->series }}">
    </div>
    <div class="form-group">
        <label class="form-label" for="">sale_date</label>
        <input class="form-control" type="date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date }}">
    </div>
    <div class="form-group">
        <label class="form-label" for="">type</label>
        <input class="form-control" type="text" name="type" value="{{old('type') ?? $comic->type }}">
    </div>
    <button type="submit">add comic</button>
</form>