<h1>{{ $pageName }}</h1>


<form method="post" action="/admin/food/update/{{ $food->FoodCode }}">
    @method('PATCH')
    @csrf
    <input type="hidden" name="FoodCode" value="{{ $food->FoodCode }}">
    <p>
        <label for="title">Tên Món Ăn</label><br>
        <input type="text" name="title" value="{{ $food->FoodName }}">
    </p>

    <p>
        <label for="Gia">Giá Tiền</label><br>
        <input type="text" name="Gia" value="{{ $food->FoodPrice }}">
    </p>

    <p>
        <label for="Loai">Loại món ăn</label><br>
        <input type="text" name="Loai" value="{{ $food->FoodCategoryName }}">
    </p>

    <p>
        <label for="Des">Tình trạng</label><br>
        <textarea cols="50" rows="5" name="Des" value="{{ $food->Status }}"></textarea>
    </p>

    <div class="form-group">
        <label class="control-label col-md-2" for="FoodCoverPhoto">Ảnh </label>
        <input type="file" name="image" class="form-control" value="{{ $food->FoodCoverPhoto }}">
    </div>
    <div class="form-group">
        <label class="control-label col-md-2"></label>
        <div class="col-md-10 p-2">
            <img id="Picture" width="200" height="200" />
        </div>
    </div>


    <p>
        <button type="submit">Submit</button>
    </p>
</form>