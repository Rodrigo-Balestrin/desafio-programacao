const clients = [
    {
        'id': 1,
        'nome': 'Luis Santos Silveira',
        'idade': 18
    },
    {
        'id': 2,
        'nome': 'Ricardo Lopes Alves',
        'idade': 30
    },
    {
        'id': 3,
        'nome': 'Gustavo Silva Junior',
        'idade': 26
    },
]; 

function renameClients() {
    /** Percorre os cliente */
    for (let index = 0; index < clients.length; index++) {
        const name = clients[index].nome.split(' ') /** Transformar o nome em array */
        const firstName = name[0] /** Selecionar o primeiro nome */
        const lastName = name[name.length -1] /** Selecionar o último sobrenome */

        const fullName = `${lastName}, ${firstName}` /** Montar o nome completo no formato (*/
        console.log(fullName)
        
    }
}

renameClients()


/** Questão bônus 

1) A função é: c e após função é: d
2) A função b está incorreta. Não irá retornar nada pois a função "return" vem antes da função "AlertUser('b')". 

*/
