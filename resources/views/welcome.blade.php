<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h1>Contactez moi</h1>
        <form action="/mail" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Mail</label>
                <input type="text" name="mail" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <label for="">Sujet</label>
            <select name="email_subject_id" class="form-control mb-3">
                @foreach ($subject as $item)
                    <option value="{{ $item->id }}">{{ $item->subject }}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Votre message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </form>
    </div>
    <div class="container mt-5">
        <h1>Newsletter</h1>
        <form action="/newsletter" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
