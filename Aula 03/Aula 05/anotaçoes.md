## Update e Delete
**UPDATE** ou **DELETE** afetam todas as linhas da sua tabela. Logo, **JAMIAS** executar sem o comando `WHERE`.

UPDATE filmes
SET avaliacao=10
WHERE nome='Tropa de Elite';
```
```mermaid
flowchart LR
A[SELECT com o WHERE] -->B{Retornou a linha certa?}
B--SIM-->C[Update ou DELETE]
B--NÃO-->A
```
```mermaid
erDiagram
streming {
    int id PK "Gerado Automaticamente"
    varchar nome "Nome do filme ou série"
    int duracao "Duração do filme ou série (min)"
    int avaliacao "avaliacao de 0-10"
}

```sql
CREATE TABLE produtos(
     id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY NOT NULL,
     nome VARCHAR(100) NOT NULL,
     duracao INT(10,2) NOT NULL,
     avaliacao INT NOT NULL DEFAULT 0
);
```

### explicação da atividade:
-Eu fiz a tabela Streming com vinte filmes e séries: ![alt text](image.png)

-Depois coloquei em ordem creçente os melhores filmes e séries: ![alt text](image-1.png)

- Essa é a tabela atualizada ![alt text](image-3.png)

- Depois retirei cinco ![alt text](image-2.png)