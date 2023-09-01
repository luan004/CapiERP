$(document).ready(function () {
    //load header
    $("#header").load("src/layout/header.html");
    //load footer
    $("#footer").load("src/layout/footer.html");
});

$('#formProduto').submit(function (e) {
    e.preventDefault();

    const produto = {
        nome: $('#nome').val(),
        preco: $('#preco').val(),
        qtd: $('#qtd').val(),
        descricao: $('#descricao').val(),
        imagem: $('#imagem').val()
    }
});