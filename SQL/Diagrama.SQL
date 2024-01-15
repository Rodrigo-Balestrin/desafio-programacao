-- 1) Escreva comandos SQL para inserir os dados abaixo conforme o diagrama apresentado.
-- a) Pablo é Pai de Lucas
-- b) Brenda é Mãe de Lucas

INSERT INTO aluno (nome) VALUES ('Lucas'); -- Lucas = id 1
INSERT INTO responsavel (nome) VALUES ('Pablo'); -- Pablo = id 1
INSERT INTO responsavel (nome) VALUES ('Brenda'); -- Brenda = id 2

INSERT INTO parentesco (idAluno, idResponsavel, parentesco) VALUES (1, 1, 'pai');
INSERT INTO parentesco (idAluno, idResponsavel, parentesco) VALUES (1, 2, 'mãe');

-- 2) Escreva uma consulta SQL para retornar dados únicos conforme tabela abaixo. Caso o aluno tenha mais de dois responsáveis, traga apenas os dois primeiros responsáveis encontrados na tabela.

SELECT
    a.nome AS "aluno",
    r.nome AS "responsavel",
    p.parentesco
FROM
    aluno a
LEFT JOIN
    parentesco p ON a.id = p.idAluno
LEFT JOIN
    responsavel r ON p.idResponsavel = r.id
ORDER BY
a.id,r.id;
