<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <h2 class="text-center mb-4">Login</h2>

            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email"
                           class="form-control"
                           id="email"
                           name="email"
                           placeholder="Enter your email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                           class="form-control"
                           id="password"
                           name="password"
                           placeholder="Enter your password">
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Login
                </button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>