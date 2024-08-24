const express = require("express");
const cors = require("cors");
const app = express();
const port = 3000;

app.use(cors());
app.use(express.json);
app.use(express.urlencoded({ extended: true}));

app.listen(port, () => {
    console.log("Servidor rodando na porta: ", port);
})

app.post("/mensagem", (req,res) => {
    const nome = req.body.nome;
    const email = req.body.email;
    const mensagem = req.body.mensagem;

    // código que envia o email

    const resposta = {
        mensagem: "Obrigado por seu contato: " + nome,
    }
    res.json(resposta);
})