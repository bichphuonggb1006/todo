@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-1">
            <button type="button" class="btn btn-info"><a href="{{route('add')}}" style="color: white">Add</a></button>
        </div>
        <div class="col-sm-8">
        </div>
        <div class="col-sm-3">
            <form action="" method="GET">
                <input type="text" placeholder="Nhập từ cần tìm" style="border-radius: 7px">
                <button type="submit">Search</button>
                @csrf
            </form>
        </div>

    </div>
    <hr>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
        <tr>
            <th class="col-sm-1">ID</th>
            <th>Task</th>
            <th class="col-sm-2">Edit</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Học Laravel</td>
            <td>
                <button type="button" class="btn btn-success"><a href="{{route('update')}}" style="color: white">Update</a></button>
                <button type="button" class="btn btn-danger" onclick="deleteTask()">Delete</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Tìm hiểu PHP cơ bản</td>
            <td>
                <button type="button" class="btn btn-success"><a href="{{route('update')}}" style="color: white">Update</a></button>
                <button type="button" class="btn btn-danger" onclick="deleteTask()">Delete</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Tìm hiểu về Git</td>
            <td>
                <button type="button" class="btn btn-success"><a href="{{route('update')}}" style="color: white">Update</a></button>
                <button type="button" class="btn btn-danger" onclick="deleteTask()">Delete</button>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>CSDL - MySQL</td>
            <td>
                <button type="button" class="btn btn-success"><a href="{{route('update')}}" style="color: white">Update</a></button>
                <button type="button" class="btn btn-danger" onclick="deleteTask()">Delete</button>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>Develop Environment</td>
            <td>
                <button type="button" class="btn btn-success"><a href="{{route('update')}}" style="color: white">Update</a></button>
                <button type="button" class="btn btn-danger" onclick="deleteTask()">Delete</button>
            </td>
        </tr>
        <tr>
            <td>6</td>
            <td>Cách sử dụng Composer </td>
            <td>
                <button type="button" class="btn btn-success"><a href="{{route('update')}}" style="color: white">Update</a></button>
                <button type="button" class="btn btn-danger" onclick="deleteTask()">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        function deleteTask() {
            var result = confirm("Bạn có muốn xóa task này?");
            if (result == true) {
                alert("Xóa thành công!");
            }
        }
    </script>
@endsection
