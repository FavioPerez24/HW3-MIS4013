<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Performance Reports</title>
    <!-- Add w3.css -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Add custom CSS for improved accordion functionality -->
    <style>
        .accordion .card {
            border: none;
            box-shadow: none;
        }
        .accordion .card:not(:first-child) .card-header {
            border-radius: 0;
        }
        .accordion .card-header {
            background-color: #f7f7f7;
            border-bottom: 1px solid #ddd;
        }
        .accordion .card-header:hover {
            background-color: #e6e6e6;
        }
        .accordion .collapse:not(:first-child) {
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Performance Reports</h1>

        <div class="accordion" id="youthProfiles">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Rico Lewis
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#youthProfiles">
                    <div class="accordion-body">
                        <strong>Rising Star in Manchester City's Full-Back System</strong>
                    </div>
                </div>
            </div>
            <!-- Add more accordion items here -->
        </div>
    </div>

    <!-- Add jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iVG9l2E8XWxTZ3UQZi10qMwYgG9/2d7iFYxQYt5R+MtF+K/2CfYeN0WbLsJQMwb0W0pM+YtQEUYHkIkGFQ" crossorigin="anonymous"></script>
</body>
</html>
