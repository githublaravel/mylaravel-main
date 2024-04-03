@extends('taklif.layout.master')
@section('body')
<div class="container">
    @csrf
    <form action="/admin/products/create" method="POST" style="margin-top:13px;width: 32%;margin: auto">
        <div class="form-group">
            <label for="prod_name">Product Name:</label>
            <input type="username" name="name" class="form-control" placeholder="Product Name" id="name">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" class="form-control" name="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" class="form-control" placeholder="Price" id="price" value="">
        </div>

        <div class="form-group">
            <label for="off">off:</label>
            <input type="number" name="off" class="form-control" value="" placeholder="off" id="off">
        </div>

        <div class="form-group">
            <label for="Image">image:</label>
            <input type="file" name="Image" value="" class="form-control" placeholder="Image" id="Image">
        </div>
        <div class="form-group">
            <label for="cat">Category:</label>
            <select name="cat" id="cat">
                @foreach($cats as $cat)
                    <option value="{{$cat->name}}">

                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Save</button>
    </form>
</div>
@endsection