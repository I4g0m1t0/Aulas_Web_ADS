document.addEventListener('DOMContentLoaded', () => {
    // Seleciona o formulário e adiciona um listener para o evento 'submit'
    const form = document.getElementById("form_exercicio");
    
    form.addEventListener("submit", (e) => {
        e.preventDefault(); // Evita o envio padrão do formulário

        // Obtém os valores dos campos do formulário
        const nome = document.getElementById("form_nome").value;
        const email = document.getElementById("form_email").value;
        const mensagem = document.getElementById("form_mensagem").value;
        
        // Limpa os campos do formulário
        document.getElementById("form_nome").value = "";
        document.getElementById("form_email").value = "";
        document.getElementById("form_mensagem").value = "";

        // Mostra os dados no console
        console.log("Nome:", nome);
        console.log("Email:", email);
        console.log("Mensagem:", mensagem);
    });

    // Atualiza o texto do botão
    const botao = document.getElementById("botao");
    botao.innerText = "Enviar via botão";

    // Adiciona um listener para o botão de clique para enviar o formulário
    const botaoClique = document.getElementById("clique_exercicio");
    botaoClique.addEventListener("click", (e) => {
        e.preventDefault();
        form.submit();
    });
});
