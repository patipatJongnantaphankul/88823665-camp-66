@extends('layouts.default')

@section('content')
    <form action="{{ url('product') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="category" class="form-label">Category Name</label>
                    <input type="text" name="category" class="form-control" id="category">
                </div>
            </div>
        </div>
        <button type="button" id="btn-add-product" class="btn btn-primary">
            + เพิ่ม product
        </button>
        <div class="row" id='add-product'>

        </div>
        <div class="mt-3 row">
            <button class="btn btn-success" type="submit">บันทึก</button>
        </div>
    </form>
    <table class="mt-3 table">
        <thead>
            <tr>
                <td>#</td>
                <td>Category Name</td>
                <td>Product Name</td>
                <td>User Name</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorys as $index => $category) {?>
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                    <?php
                    $name= '';
                    foreach ($products->where('category_id', $category->id) as $product) {
                        $name  = $user->where('id',$product->user_id)->first()->name;
                        ?>
                        <ul>
                            <li>{{$product->name}}</li>
                        </ul>
                        <?php } ?>
                    </td>
                    <td>{{$name}}</td>
                </tr>
                <?php }?>
        </tbody>
    </table>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        var count =1;
        $('#btn-add-product').on('click', function(){
            $("#add-product").append(`
            <div class="mt-3 col-6">
                <label class="form-label product-label">${count++}. Product Name
                    <button type="button" class="btn btn-danger btn-delete-product">ลบ</button>
                </label>
                    <input type="text" name="product_name[]" class="form-control">
            </div>
            `)
        })

        $(document).on('click','.btn-delete-product', function(){
            $(this).parent().parent().remove();
        })
    });
</script>
@endsection
