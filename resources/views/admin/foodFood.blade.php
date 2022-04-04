<h1>Danh sách các món ăn</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên món ăn</th>
            <th>Giá tiền</th>
            <th>Loại món ăn</th>
            <th>Tình trạng</th>
            <th>Sửa</th>
            <th>Xoá</th>
        </tr>
    </thead>
    <tbody>
    @foreach($news as $row)
        <td>{{$row->id}}</td>
        <td><a href="/admin/food/{{$row->FoodCode}}">{{$row->FoodName}}</a></td>
            <td>{{$row->FoodPrice}}</td>
            <td>{{$row->FoodCategoryName}}</td>
            <td>{{$row->Status}}</td>
            <td><a href="/admin/food/edit/{{$row->FoodCode}}">Edit</a> </td>
            <td><a href="/admin/food/delete/{{$row->FoodCode}}">Delete</a></td>
            
        </tr>
        @endforeach
    </tbody>
</table>