$(document).ready(function () {
    //load header
    $("#header").load("src/layout/header.html");
    //load footer
    $("#footer").load("src/layout/footer.html");
});

let np = false;
$('#novoProduto').click(function () {
    if (np) {
        $('#formProduto').slideUp();
        np = false;
    } else {
        $('#formProduto').slideDown();
        np = true;
    }
});

$('#formProduto').submit(function (e) {
    e.preventDefault();

    const produto = {
        nome: $('#nome').val(),
        preco: $('#preco').val(),
        qtd: $('#qtd').val(),
        descricao: $('#descricao').val()
    }

    // new row in table
    const newRow = `
    <tr>
        <td>${produto.nome}</td>
        <td>R$${produto.preco},00</td>
        <td>${produto.qtd}</td>
        <td>${produto.descricao}</td>
        <td>
            <button class="button button-red removeProduto">
                Excluir
            </button>
        </td>
    </tr>`;

    // add new row in table
    $('#tableProdutos tbody').append(newRow);
});

// remove product
$('#tableProdutos').on('click', '.removeProduto', function () {
    $(this).parent().parent().remove();
});