<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="public/assets/users/css/style.css">
</head>
<body>


    <section class="hp">
        <div class="hp__wrapper">
            <div class="hp__header">
                <div class="hp__headerwrp">
                    <a href="#">Личный кабинет</a>
                </div>
            </div>
            <div class="hp__content">
                <div class="hp__sendbid">
                    <form method="post" name="bindform">
                        <input type="text" name="name" placeholder="Имя">
                        <input type="email" name="email" placeholder="Email">
                        <textarea name="message"cols="30" rows="10" placeholder="Текст заявки"></textarea>
                        <button type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


</body>
</html>