<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/stylesforsecondpage.css">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Library</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="secondpage.php">Library</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Data Table Section -->
<div class="container mt-5 mb-5">
    <h2>Library Catalog</h2>

    <!-- Table for Displaying Data -->
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publication Year</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'get_books.php'; ?>
        </tbody>
    </table>

    <!-- Form for Adding Data -->
    <form action="add_book.php" method="post" class="mt-4">
        <h3>Add New Book</h3>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="bookid">Book ID:</label>
                <input type="number" class="form-control" id="bookid" name="id" required>
            </div>
            <div class="form-group col-md-4">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group col-md-4">
                <label for="author">Author:</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <div class="form-group col-md-2">
                <label for="year">Publication Year:</label>
                <input type="number" class="form-control" id="year" name="year" required>
            </div>
            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-success">Add Book</button>
            </div>
        </div>
    </form>

    <!-- Form for Updating Data -->
    <form action="update_book.php" method="post" class="mt-4">
        <h3>Update Book</h3>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="update-id">Book ID:</label>
                <input type="number" class="form-control" id="update-id" name="id" required>
            </div>
            <div class="form-group col-md-4">
                <label for="update-title">Title:</label>
                <input type="text" class="form-control" id="update-title" name="title" required>
            </div>
            <div class="form-group col-md-4">
                <label for="update-author">Author:</label>
                <input type="text" class="form-control" id="update-author" name="author" required>
            </div>
            <div class="form-group col-md-2">
                <label for="update-year">Publication Year:</label>
                <input type="number" class="form-control" id="update-year" name="year" required>
            </div>
            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-warning">Update Book</button>
            </div>
        </div>
    </form>

    <!-- Form for Deleting Data -->
    <form action="delete_book.php" method="post" class="mt-4">
        <h3>Delete Book</h3>
        <div class="form-group">
            <label for="delete-id">Book ID:</label>
            <input type="number" class="form-control" id="delete-id" name="id" required>
        </div>
        <button type="submit" class="btn btn-danger" >Delete Book</button>
    </form>
</div>

<!-- Bootstrap JS and Popper.js scripts (required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
