<section class="content-section bg-light" id="update-account">
    <div class="container px-4 px-lg-5">
        <div class="content-section-heading text-center">
            <h2 class="mb-5">Update Account Details</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="update_account.php" method="post">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="username" name="username" type="text" placeholder="Username" required />
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" name="password" type="password" placeholder="Password" required />
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="school" name="school" type="text" placeholder="School" required />
                        <label for="school">School</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="city" name="city" type="text" placeholder="City" required />
                        <label for="city">City</label>
                    </div>
                    <div class="d-grid"><button class="btn btn-primary btn-xl" type="submit">Update Account</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
