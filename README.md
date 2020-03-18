# API Agenda médica

API desenvolvida em Lumen com acesso ao banco de dados MySQL com uso do ORM Eloquent.

A função dessa API é permitir a consulta de:
- especialidades
- médicos
- agendas por médico

###### Subir servidor
Comando para subir o servidor PHP local
'php -S localhost:8000 -t public'

###### Abaixo seguem as URLs para chamada do serviço em um servidor local:

## Especialidade
- GET http://localhost:8000/api/especialidade  (retorna lista de especialidades)
- GET http://localhost:8000/api/especialidade/{id} (retorna informações de uma especialidade específica)
- GET http://localhost:8000/api/especialidade/{especialidadeID}/medicos (retorna lista de médicos de uma especialidade específica)

## Médico
- GET http://localhost:8000/api/medico (retorna lista de médicos)
- GET http://localhost:8000/api/medico/{id} (retorna informações de um médico específico)
- GET http://localhost:8000/api/medico/{medicoID}/agendas (retorna lista da agenda de um médico específico)


## Agenda
- GET http://localhost:8000/api/agenda (retorna lista de agendas)
- GET http://localhost:8000/api/agenda/{id} (retorna informações de uma agenda específica)



