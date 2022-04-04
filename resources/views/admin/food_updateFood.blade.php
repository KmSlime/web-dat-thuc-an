<h1>{{ $pageName }}</h1>


<form method="post" action="/admin/food/update/{{ $food->FoodCode }}">
    @method('PATCH')
    @csrf
    <input type="hidden" name="FoodCode" value="{{ $food->FoodCode }}">
    <p>
        <label for="title">Tên Món Ăn</label><br>
        <input type="text" name="title" value="{{ $news->FoodName }}">
    </p>

    <p>
        <label for="Gia">Giá Tiền</label><br>
        <input type="text" name="Gia" value="{{ $news->FoodPrice }}">
    </p>

    <p>
        <label for="Loai">Loại món ăn</label><br>
        <input type="text" name="Loai" value="{{ $news->FoodCategoryName }}">
    </p>

    <p>
        <label for="Des">Tình trạng</label><br>
        <textarea cols="50" rows="5" name="Des">{{ $news->Status }}</textarea>
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>
</form>