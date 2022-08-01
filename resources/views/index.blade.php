<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Todo App</title>
    <!-- bootstrap files -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body><br>
   <div class="row">
    <div class="col-md-3 m-auto" style="margin-left:500px;">
        <h3>My Todo App</h3>
        <form action="">
            <div class="form-group">
                <input type="text" class="form-control" name="item" placeholder="Add an item">
            </div>
            <input type="submit" class="btn btn-primary" name="add" value="Add Item">
        </form><hr>
    </div>
   </div>
   <div class="row">
    <div class="col-md-4 m-auto" style="margin-left:500px;">
        <table class="table">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Todo Item</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tr>

            </tr>
        </table>
    </div>
   </div>
</body>
</html>