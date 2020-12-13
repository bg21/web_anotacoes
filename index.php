<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anotações</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-anotacoes">

    </div>

    <div class="btn-add">+</div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
        $(function(){
            $('.btn-add').click(function(){
                let el = '<div class="anotacao-single"><textarea placeholder="Sua nova anotação"></textarea></div>';

                $('.container-anotacoes').append(el);

                let textArea = $('.anotacao-single').last().find('textarea');
                let date = new Date();
                let hh = date.getHours();
                let mm = date.getMinutes();

                let finalTime = hh+':'+mm;
                textArea.html('Nova anotação em: '+finalTime);
            });
        });
    </script>
</body>
</html>