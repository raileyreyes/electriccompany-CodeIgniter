<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Customer - Puihaha Electric Company</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px 0;
        }

        .main-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            padding: 30px;
            margin: 20px auto;
        }

        .header-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .header-section h1 {
            color: #667eea;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="main-container">

        <div class="header-section">
            <h1>
                <i class="bi bi-person-plus-fill"></i>
                Add Customer
            </h1>

            <p class="text-muted">
                Puihaha Electric Company
            </p>
        </div>

        <form action="<?= base_url('dashboard/store') ?>" method="post">

            <?= csrf_field() ?>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Account Number</label>
                    <input
                        type="text"
                        name="account_number"
                        class="form-control"
                        required
                    >
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Customer Name</label>
                    <input
                        type="text"
                        name="customer_name"
                        class="form-control"
                        required
                    >
                </div>

            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <input
                    type="text"
                    name="address"
                    class="form-control"
                    required
                >
            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Phone</label>
                    <input
                        type="text"
                        name="phone"
                        class="form-control"
                        required
                    >
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        required
                    >
                </div>

            </div>

            <div class="mb-3">
                <label class="form-label">Meter Number</label>
                <input
                    type="text"
                    name="meter_number"
                    class="form-control"
                    required
                >
            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Connection Type</label>

                    <select
                        name="connection_type"
                        class="form-select"
                        required
                    >
                        <option value="">Select Connection Type</option>
                        <option value="residential">Residential</option>
                        <option value="commercial">Commercial</option>
                        <option value="industrial">Industrial</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Status</label>

                    <select
                        name="status"
                        class="form-select"
                        required
                    >
                        <option value="">Select Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="suspended">Suspended</option>
                    </select>
                </div>

            </div>

            <div class="d-flex justify-content-between mt-4">

                <a href="<?= base_url('dashboard') ?>"
                   class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i>
                    Back to Dashboard
                </a>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-person-plus"></i>
                    Add Customer
                </button>

            </div>

        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>