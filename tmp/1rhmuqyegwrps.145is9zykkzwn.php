<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">home</a>
                </li>

                <?php if ($SESSION['login_state'] == TRUE): ?>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">logout</a>
                        </li>
                    
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/register">register</a>
                        </li>
                    

                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>