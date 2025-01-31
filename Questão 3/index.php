<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
</head>
<body>

    <header class="header">
        <img src="components/logo-construsite-brasil.svg" alt="">
    </header>

    <section class="section">
        <div class="name-content">
            <div class="name-info">
                <h2 class="title">Nome:</h2>
                <span class="my-name" id="my-name">Rebeca Costa</span>
            </div>
        </div>

        <div class="message-content">
            <form id="contact-form" action="controller/send-email.php" method="post" class="send-email">
                <h2 class="title">Mensagem:</h2>

                <div class="input-content">
                    <label for="message-name">Nome*</label>
                    <input type="text" name="message-name" class="message-name" id="message-name">
                </div>

                <div class="input-content">
                    <label for="message-tel">Telefone*</label>
                    <input type="tel" name="message-tel" class="message-tel" id="message-tel">
                </div>

                <div class="input-content">
                    <label for="message-email">Email*</label>
                    <input type="email" name="message-email" class="message-email" id="message-email">
                </div>
                
                <div class="text-area-content">
                    <label for="message">Mensagem*</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                
                <button type="submit" name="send-email" class="btn-send">Enviar Mensagem</button>
            </form>
        </div>

    </section>

    <script>
        $("#contact-form").validate({
            rules: {
                "message-name": {required: true},
                "message-tel": {required: true},
                "message-email": {required: true},
                "message": {required: true}
            },
            messages: {
                "message-name": {required: "Insira seu nome"},
                "message-tel": {required: "Insira seu telefone"},
                "message-email": {required: "Insira seu email"},
                "message": {required: "Insira uma mensagem"}
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
</body>
</html>
