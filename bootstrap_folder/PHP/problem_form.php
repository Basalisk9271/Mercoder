<section class="content-section bg-light" id="submit">
    <div class="container px-4 px-lg-5">
        <div class="content-section-heading text-center">
            <h2 class="mb-5">Submit a Problem</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="submit.php" method="post">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" name="title" type="text" placeholder="Title" required />
                        <label for="title">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="author" name="author" type="text" placeholder="Author" required />
                        <label for="author">Author</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="date" name="date" type="date" placeholder="Date" required />
                        <label for="date">Date Created</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="description" name="description" placeholder="Description" style="height: 10rem;" required></textarea>
                        <label for="description">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="sample_input" name="input" placeholder="Sample Input" style="height: 10rem;" required></textarea>
                        <label for="sample_input">Sample Input</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="sample_output" name="output" placeholder="Sample Output" style="height: 10rem;" required></textarea>
                        <label for="sample_output">Sample Output</label>
                    </div>
                    <div class="d-grid"><button class="btn btn-primary btn-xl" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
