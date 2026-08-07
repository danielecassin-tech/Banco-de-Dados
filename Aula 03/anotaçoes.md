## Configurando o SGBD
SGBD: Sistema Gerenciador de Banco de Dados
Para instalação, utilizamos o comando:

```bash
sudo apt install -y postgresql
```

>No meu servidor, como eu já estava como root, não foi necessário o sudo.

Para acesso inicial, utilizamos o comando:

```bash
sudo -u postgres psql
```
>Autenticação via Linux, não necessita de senha, pois você já está autenticado.

aPÓS O PRIMEIRO ACESSO, ALTERAMOS A SENHA, ATRAVÉS DO COMANDO:
```sql
ALTER USER postgres PASSWORD '123dani';
```

Para sair do SGBD, utilizamos o comando: `\q`.

>Comando famoso \quist em games

Para acesso externo, utilizamos o comando:
```bash
sudo psql -h 




Alterações nos arquivos:
1. Navegamos até o caminho:
```bash
cd /etc/postgresql/18/main
```
2. Editamos o arquivo postgresql.cof atrvés do comando:
```bash 
sudo nano postgresql.conf

Linha listen_adresses = '*'
>Para pesquisar a linha: 'CTRL+W'

![alt text](image.png)

3.Segunda alteração no arquivo pg_hba.conf:
```bash
sudo nano pg_hba.conf
```
4.Alteração realizadas:
![alt text](image-1.png)
 >Fizemos um jeito para que todos de rede fora consiga acessar o que estamos fazendo, colocando o IP: 0.0.0.0/24
