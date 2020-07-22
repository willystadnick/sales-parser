# Prova Técnica para o Cargo de Programador Web

## Descrição do Problema

Construa um sistema em PHP para análise de dados, onde o mesmo deverá permitir:

- importar arquivos de texto;
- ler e analisar os dados dos arquivos;
- gerar um relatório.

## Orientações

Deve existir 3 tipos de entidades dentro desses arquivos, onde para cada tipo temos um layout diferente, são eles:

| Entidade | ID | Formato |
|------|------|------|
| Salesman | 001 | 001,CPF,Name,Salary |
| Customer | 002 | 002,CNPJ,Name,Business Area |
| Sales | 003 | 003,Sale ID,[Item ID­-Item Quantity-­Item Price],Salesman ID* |

* observe no formato a lista de itens estruturado por colchetes.

## Exemplo de dados das entidades (apenas um exemplo)

```
001,1234567891234,Steve,80000
001,3245678865434,Elias,60000.99
002,2345675434544345,Rita Ruggs,Rural
002,2345675433444345,Dianne Bragg,Rural
003,10,[1­-10­-100, 2-­30­-2.50, 3-­40-­3.10],Steve
003,08,[1-­34-­10, 2-­33­-1.50, 3­-40­-0.10],Elias
```

## Processamento dos dados

O sistema deve ler somente arquivos com extensão .dat, localizados em um diretório, como %HOMEPATH%/data/in.

Depois de processados, o sistema deve gerar um arquivo de saída seguindo o formato {file_name}.done.dat em outro diretório, como %HOMEPATH%/data/out.

## Resultado

O arquivo processado deve apresentar como resultados a quantidade de clientes e de vendedores informados na entrada, a média salarial dos vendedores, o ID da venda mais cara, bem como o pior vendedor.

## Importante

Você poderá usar qualquer programa no desenvolvimento da prova, bem como escolher qualquer biblioteca externa se precisar.

Os critérios de avaliação que usaremos para avaliar seu teste serão a lógica de programação, clean code e código otimizado.
