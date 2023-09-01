$(document).ready(function () {
    $("#header").load("src/layout/header.html");
    $("#footer").load("src/layout/footer.html");
});

let np = false;
$('#novoCliente').click(function () {
    if (np) {
        $('#form').hide();
        np = false;
    } else {
        $('#form').show();
        np = true;
    }
});

$('#form').submit(function (e) {
    e.preventDefault();

    const cliente = {
        nome: $('#nome').val(),
        email: $('#email').val(),
        cpf: $('#cpf').val(),
        tel: $('#tel').val(),
        genero: $('#genero').val(),
        data: $('#data').val()
    }

    const newRow = `
    <tr>
        <td>${cliente.nome}</td>
        <td>${cliente.cpf}</td>
        <td>${cliente.tel}</td>
        <td>${cliente.email}</td>
        <td>${cliente.genero}</td>
        <td>${cliente.data}</td>
        <td>
            <button class="button button-red remove">
                Excluir
            </button>
        </td>
    </tr>`;

    $('#table tbody').append(newRow);
});

$('#table').on('click', '.remove', function () {
    $(this).parent().parent().remove();
});