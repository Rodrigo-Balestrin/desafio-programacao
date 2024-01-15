/** Corrigindo Numero Telefone */
let Number = "5(1)9-876-543-21"

/** Remover caracteres não numéricos */
let correctNumber = Number.replace(/\D/g, '');

/** Formatando numero telefone no formato correto */
let formatedNumber = `(${correctNumber.slice(0, 2)}) ${correctNumber.slice(2, 3)}${correctNumber.slice(3, 7)}-${correctNumber.slice(7, 11)}`;

/** Exibir o resultado */
console.log(formatedNumber);
