# Freelance Hours

## Inicializando o Projeto

Siga os passos abaixo para configurar e inicializar a aplicação.

### 1. Subindo a Imagem Docker e Iniciando a Aplicação

O projeto utiliza o Laravel Sail para gerenciar os containers Docker. Com o Docker inicializado, execute o comando:

```bash
./vendor/bin/sail up -d
```

Para parar a execução do projeto no Docker, execute o comando:

```bash
./vendor/bin/sail down
```

### 2. Iniciando o Vite

Após iniciar a aplicação, é necessário compilar os arquivos CSS utilizando o Vite, execute o comando:

```bash
npm run dev
```

### 3. Iniciando o Worker de Filas

A aplicação utiliza filas para o envio de e-mails e outros processos em background. Para iniciar o worker, abra um nova aba no terminal e execute o comando:

```bash
./vendor/bin/sail artisan queue:work
```

### 4. Iniciando o Scheduler

O Schedule é utilizado para automatizar tarefas, sua função é verificar a cada minuto se o projeto ainda aceita propostas. Para iniciar o scheduler, abra um nova aba no terminal e execute o comando:

```bash
./vendor/bin/sail artisan schedule:work
```

---

Certifique-se de que todas as dependências e pré-requisitos estão corretamente instalados antes de executar os comandos.
