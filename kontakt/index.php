<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Kontakt</title>
</head>
<body>
    <header class="nav">
        <img src="/assets/HERMETIKO-HORIZONTAL.png" alt="" class="nav-logo">
        <div class="nav-links">
            <div class="nav-links-home nav-links-link" onclick="window.open('../', '_self')">
                Home
            </div>
            <div class="dropdown">
                <div class="nav-links-lösungen nav-links-link">
                    Lösungen <i class='bx bx-chevron-down more' ></i>
                </div>
                <div class="dropdown-content">
                    <a href="#">Neigungsschalter</a>
                    <a href="#">Magnetschalter</a>
                    <a href="#">Reedschalter</a>
                </div>
            </div>
            <div class="nav-links-contact" onclick="window.open('kontakt/', '_self')">
                Kontakt
            </div>
        </div>
    </header>
    <div class="section-contact">
            <h1>Kontakt Formular</h1>
            <form action="" class="contact-form">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-input">
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-input">
                <br>
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-input">
                <br>
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-input">
            </form>
    </section>
</body>
</html>