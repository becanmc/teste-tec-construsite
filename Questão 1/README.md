# Questão 1

- Arquivo-mãe: Questão 1/SQL_QUESTAO_01.sql

## Estrutura da pasta
Questão 2/
├─ README.md
└─ SQL_QUESTAO_01.sql

## Localização das respostas
- Questão A: Linha 52
- Questão B: Linha 163

## O que foi adicionado?
- Questão A: 
Filtro de nome, cpf, rg, telefone e email dos clientes da tabela `clientes`.
```sql
SELECT nome_cliente, cpf_cliente, rg_cliente, telmask_cliente, email_cliente 
FROM clientes;
```

- Questão B: 
Filtro de número de compras feitas por clientes que têm a foto de perfil com `ordem_foto = 1`.
```sql
SELECT COUNT(*) 
FROM compras AS c 
JOIN clientes_fotos as f 
ON f.fk_id_cliente_clientes = c.fk_id_cliente_clientes 
WHERE c.sel_status_compra='concluido' 
AND f.ordem_foto=1;
```

## Fontes:
--