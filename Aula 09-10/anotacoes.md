## primeiro eu criei a tabela:
CREATE TABLE chamados( 
    id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY, 
    equipamento VARCHAR(100) NOT NULL, 
    setor VARCHAR(100) NOT NULL, 
    descricao TEXT NOT NULL,
    prioridade VARCHAR(20) NOT NULL, 
    status VARCHAR(20) NOT NULL 
);

## Depois ajuste em manutencao.php e conexao.php

## depois coloquei os produtus em Json:
![alt text](image.png)

## Depois em GET:
![alt text](image-1.png)

## Antes do PUT:
![alt text](image-2.png)

## Depois do PUT:
![alt text](image-3.png)

## Antes do DELETE:
![alt text](image-4.png)

## Depois do DELETE:
![alt text](image-5.png)