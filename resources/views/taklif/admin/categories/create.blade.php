@extends('taklif.layout.master')
@section('body')
    <div class="container">
        <form action="/admin/categories/create" method="POST" style="margin-top:13px;width: 32%;margin: auto">
        @csrf
            <div class="form-group">
                <label for="category_name">category Name:</label>
                <input type="username" name="name" class="form-control"
                    placeholder="category name" id="category_name">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Create</button>
        </form>
    </div>
@endsection
