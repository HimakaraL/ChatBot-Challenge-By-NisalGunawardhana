<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body class="body">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0">
                    <div class="card-header card-header1 text-black text-center">
                        <h4>Signup Form</h4>
                    </div>
                    <div class="card-body card-header1">
                        <form action="/signup" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-block">Signup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center mt-4">
        <p>&copy; Nisal Gunawardhana, Microsoft Learn Student Ambassador, Postman Student Leader</p>
    </footer>

    <style>
        .card-header1{
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f87e5f, #feb47b); 
        }

        .body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f87e5f, #feb47b);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #popup-area {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }

        .popup-message {
            background-color: #007bff;
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            opacity: 0.9;
            max-width: 300px;
            word-wrap: break-word;
        }

        .close-popup {
            cursor: pointer;
        }

        .upper-container {
            display: flex;
            justify-content: end;
            padding: 10px;
            background-color: #f87e5f;
        }

        .buttonUp {
            width: 80px;
        }
    </style>

    <script>
        // Add JavaScript logic here if needed
    </script>
</body>

</html>
