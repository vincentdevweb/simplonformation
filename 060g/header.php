<header>
    <nav>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><?= $dictionnary['app.name'] ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="registerDisplay.php"><?= $dictionnary['register.page.title'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listRegistration.php"><?= $dictionnary['listRegistration.page.title'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="addCreditCardTypeDisplay.php"><?= $dictionnary['addCreditCardType.page.title'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listCreditCardType.php"><?= $dictionnary['listCreditCardType.page.title'] ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </nav>
</header>