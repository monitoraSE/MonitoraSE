const mysql = require('mysql'); 

// Criando a conexão com o Banco de Dados

const connection = mysql.createConnection({
    host: '162.240.17.101',
    user: 'projetos_bpinto',
    password: '*kTa0uJcTw2y',
    database: 'projetos_ECOMP2023_G3',
});

// Conectando ao Banco de Dados

connection.connect((err) => {
    if (err) {
        console.log('Erro ao conectar ao banco de dados', err)
        return
    }
    console.log('Conexão estabelecida!')
})

// Realizando busca no Banco de Dados

connection.query('SELECT Nome FROM Usuario', (err, rows) => {
    if (err) throw err

    console.log('Nome: ', rows, '\n\n')
})

// Finalizando a conexão

connection.end((err) => {
    if(err) {
        console.log('Erro para finalizar a conexão', err)
        return 
    }
    console.log('A conexão foi finalizada')
})
