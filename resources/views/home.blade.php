<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- MDB -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <title>ToDo List</title>
</head>

<body class="bg-info">
    <div class="container w-25 mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>To-do list</h3>
                <form action="{{ route('store') }}" method="post" autocomplete="off">
                    @csrf
                    <input type="text" name="content" class="form-control" placeholder="Ajouter une nouvelle tache">
                    <button type="submit" class="btn btn-dark btn-sm px-4"><i class="fas fa-plus"></i></button>
                </form>
                {{-- si les taches count --}}
                @if (count($todolists))
                    <ul class="list-group list-group-flush mt-3">
                        @foreach ($todolists as $todolist)
                            <li class="list-group-item">
                                <form action="{{ route('destroy', $todolist->id) }}" method="post">
                                    {{ $todolist->content }}
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-link btn-sm float-end"><i class="fas fa-trash"></i></button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-center mt-3">Pas de taches !</p>
                @endif
            </div>
            @if (count($todolists))
                <div class="card-footer">
                    Vou avez {{count($todolists)}} taches en attente
                </div>
            @endif
        </div>
    </div>
</body>

</html>
