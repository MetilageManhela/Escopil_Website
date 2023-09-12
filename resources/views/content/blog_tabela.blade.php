@extends("layout.admin")

@section('titulo')

@endsection

@section('conteudo')
<button style="margin-left: 95%; width: 50px" type="button" class="btn btn-outline-primary">+</button>

<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Mensagem</th>
            <th>Imagem</th>
            <th>data de Registo</th>
            <th> Acção</th>
          
        </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{$blog->id}}</td>
            <td>{{$blog->titulo}}</td>
            <td>{{$blog->mensagem}}</td>
            <td><img width="100px" height="100px" src="/storage{{$blog->imagem}}"></td>
            <td>{{$blog->created_at}}</td>
            <td>
                <button type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </td>
          
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Titulo</th>
            <th>Mensagem</th>
            <th>Imagem</th>
            <th>data de Registo</th>
            <th>Acção</th>
        </tr>
    </tfoot>
</table>
							
@endsection

@section('js')
<script>
https://code.jquery.com/jquery-3.7.0.js
https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js
https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js
</script>
@endsection