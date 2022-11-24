<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation in Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>


</head>

<body>
<form method="POST" action="form" >
    @csrf
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Entrez votre nom" name="nom">
    </div>
    <div class="form-group">
        <label for="prenom" >Prenom</label>
        <input type="text" class="form-control"  placeholder="Entrez votre prenom" name="prenom">
    </div>
    <div class="form-group input-group date" data-provide="datepicker">
        <label for="dteNaissance">Date de naissance</label>
        <input type="date" class="datepicker" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" name="dteNaissance">
        <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input type="email" class="form-control"  placeholder="Entrez votre email" name="email">
    </div>
    <div class="form-group">
        <label for="telephone">Numéro de telephone</label>
        <input type="text" class="form-control"  placeholder="Entrez votre numéro de telephone" name="telephone">
    </div>
    <div class="form-group">
        <label for="adresse">adresse</label>
        <input type="text" class="form-control"  placeholder="Entrez votre adresse " name="adresse">
    </div>
    <small class="form-text text-muted">Nous ne partagerons pas vos informations </small>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        startDate: '-3d'
    });
</script>
</html>
