<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Task</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <table class="border border-danger">
                    <h2>Add Task</h2>
                    <hr>
                    <br>
                    <form method="post" action="{{route('index')}}">
                        @method('PATCH')
                        <div class="form-group">
                            <h4 class="control-label col-sm-2" for="task">Task</h4>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="add_task" placeholder="Enter task" name="task">
                                @csrf
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8"></div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary" onclick="add()"><a href="{{route('store')}}" style="color: white">Add</a></button>
                                    <button type="button" class="btn btn-dark"><a href="{{route('index')}}" style="color: black">Back</a></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </table>
            </div>
            <div class="col-sm-3">

            </div>
        </div>
        <script>
            function add() {
                alert("B???n ???? th??m th??nh c??ng!");
            }
        </script>
    </body>
</html>
