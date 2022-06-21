<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>

    <body class="antialiased">
        <form id="listaTopicos">
            <select>
                @foreach($cursos as $curso)
                    <option>{{ $curso->nome }}</option>
                @endforeach
            </select>
            {{-- <!-- {{ $cursos }} --> --}}

            <div style="background-color: gray;">
                <textarea id="lista_itens" name="w3review" rows="20" cols="50"></textarea>
            </div>
            <input id="btn-sbm" type="submit" name="" />
        </form>
        <form id="topicosBox" method="POST" action="/api/conteudosprogramaticos">
            @csrf
        </form>

    </body>

</html>
<script type="text/javascript">
    document.getElementById("listaTopicos").addEventListener("submit", function (event) {
        event.preventDefault()
        listaTopicos = document.getElementById('lista_itens').value
        arrTopicos = listaTopicos.split("\n")
        var list = document.createElement("ul");

        for (let i of arrTopicos) {
            let item = document.createElement("li");
            item.setAttribute('name', 'descricao');
            item.setAttribute('class', 'item');
            item.setAttribute('value', i);
            item.innerHTML = i + "<select name='fk_idconteudo_programatico'><option value=1>tópico</option><option value=2>subtopico</option><option value=3>subsubtópico</option></select>";
            list.appendChild(item);        
        }
        document.getElementById("topicosBox").appendChild(list);
        var button = document.createElement('input');
        button.setAttribute('type', 'submit');
        button.setAttribute('ID', 'btnSendList');
        button.setAttribute('value', 'Salvar Topicos');
        button.setAttribute('form', 'topicosBox');
        document.getElementById("topicosBox").appendChild(button);
        return console.log(arrTopicos)
    })

    function enviarDados(){
        let topicos = document.getElementsByClassName('item')
        return console.log(topicos)
    }
    

</script>
