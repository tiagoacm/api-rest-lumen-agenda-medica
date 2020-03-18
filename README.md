# API Agenda médica

API desenvolvida em Lumen com acesso ao banco de dados MySQL com uso do ORM Eloquent.

A função dessa API é permitir a consulta de:
- especialidades
- médicos
- agendas

#### CRIAR BANCO DE DADOS MYSQL
Executar o 'script.sql' no MySQL para criar o BD e Tabelas. O arquivo está dentro na pasta 'database'

#### CRIAR ARQUIVO ENV NO PROJETO
Segue configuração para acessar o banco de dados.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bd_clinica
DB_USERNAME=root
DB_PASSWORD=

#### SUBIR SERVIDOR 
Comando para subir o servidor PHP local

'php -S localhost:8000 -t public'

#### Endpoint para chamada no servidor local:

### Especialidade
- GET http://localhost:8000/api/especialidade  (retorna lista de especialidades)
- GET http://localhost:8000/api/especialidade/{id} (retorna informações de uma especialidade específica)
- GET http://localhost:8000/api/especialidade/{especialidadeID}/medicos (retorna lista de médicos de uma especialidade específica)

### Médico
- GET http://localhost:8000/api/medico (retorna lista de médicos)
- GET http://localhost:8000/api/medico/{id} (retorna informações de um médico específico)
- GET http://localhost:8000/api/medico/{medicoID}/agendas (retorna lista da agenda de um médico específico)

### Agenda
- GET http://localhost:8000/api/agenda (retorna lista de agendas)
- GET http://localhost:8000/api/agenda/{id} (retorna informações de uma agenda específica)



