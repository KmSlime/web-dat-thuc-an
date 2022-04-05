<form method="post" action="/admin/food/store" enctype="multipart/form-data">
    @method('PATCH')
    @csrf

    <style type="text/css">
        .error-message {
            color: red;
        }
    </style>

    @if (count($errors) > 0)
    <div class="error-message">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <p>
        <label for="FoodName">Tên món ăn</label><br>
        <input type="text" name="FoodName" value="">
        <span class="error-message">{{ $errors->first('FoodName') }}</span>
    </p>
    </p>

    <p>
        <label for="FoodPrice">Giá tiền</label><br>
        <input type="text" name="FoodPrice" value="">
        <span class="error-message">{{ $errors->first('FoodPrice') }}</span>
    </p>
    </p>

    <p>
        <label for="FoodCategoryName">Loại món ăn</label><br>
        <input type="text" name="FoodCategoryName" value="">
        <span class="error-message">{{ $errors->first('FoodCategoryName') }}</span>
    </p>
    </p>

    <p>
        <label for="Status">Tình trạng</label><br>
        <input type="text" name="Status" value="">
    </p>
    <p>
    <div class="form-group">
        <label class="control-label col-md-2" for="FoodCoverPhoto">Ảnh </label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="form-group">
        <label class="control-label col-md-2"></label>
        <div class="col-md-10 p-2">
            <img id="Picture" width="200" height="200" />
        </div>
    </div>

    </p>

    <p>
        <button type="submit">Submit</button>
    </p>
</form>