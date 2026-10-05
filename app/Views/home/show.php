<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Details - Puihaha Electric Company</title>

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

        .detail-label {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="main-container">

        <div class="header-section">
            <h1>
                <i class="bi bi-person-vcard"></i>
                Customer Details
            </h1>

            <p class="text-muted">
                Puihaha Electric Company
            </p>
        </div>

        <div class="row">

            <div class="col-md-6 mb-3">
                <div class="detail-label">Account Number</div>
                <div><?= esc($account['account_number']) ?></div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="detail-label">Customer Name</div>
                <div><?= esc($account['customer_name']) ?></div>
            </div>

            <div class="col-md-12 mb-3">
                <div class="detail-label">Address</div>
                <div><?= esc($account['address']) ?></div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="detail-label">Phone</div>
                <div><?= esc($account['phone']) ?></div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="detail-label">Email</div>
                <div><?= esc($account['email']) ?></div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="detail-label">Meter Number</div>
                <div><?= esc($account['meter_number']) ?></div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="detail-label">Connection Type</div>
                <div><?= ucfirst(esc($account['connection_type'])) ?></div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="detail-label">Status</div>
                <div><?= ucfirst(esc($account['status'])) ?></div>
            </div>

        </div>

 <div class="d-flex justify-content-between mt-4">

    <a href="<?= base_url('dashboard') ?>"
       class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i>
        Back to Dashboard
    </a>

    <a href="<?= base_url('account/edit/' . $account['id']) ?>"
       class="btn btn-primary">
        <i class="bi bi-pencil"></i>
        Edit Customer
    </a>

    <form action="<?= base_url('account/delete/' . $account['id']) ?>"
              method="post"
              onsubmit="return confirm('Are you sure you want to delete this customer?');">

            <?= csrf_field() ?>

            <button type="submit" class="btn btn-danger">
                <i class="bi bi-trash"></i>
                Delete Customer
            </button>

        </form>
</div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>