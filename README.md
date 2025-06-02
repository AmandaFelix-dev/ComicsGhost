<!-- <p align="center">
<img src="/assets/images/logo.png" alt="Logo do projeto" title="Promoção CIMED" width="182" style="margin: 30px auto; display: block;">
</p> -->
<h1 align="center">Projeto WEB</h1>
<div align="center">
Dependências e requisitos utilizados para este projeto:

<!-- [![Badge](https://img.shields.io/badge/NodeJS-20.18.0-lightblue?style=for-the-badge&logo=Node.js)](https://nodejs.org/en/)
[![Badge](https://img.shields.io/badge/Npm-10.8.2-lightblue?style=for-the-badge&logo=npm)](https://www.npmjs.com/)
[![Badge](https://img.shields.io/badge/AngularCLI-^19.1.4-lightblue?style=for-the-badge&logo=angular)](https://github.com/angular/angular-cli) -->
[![Badge](https://img.shields.io/badge/Bootstrap-5.3.3-lightblue?style=for-the-badge&logo=bootstrap)](https://getbootstrap.com/docs/5.2/getting-started/download/)

[//]: # ([![Badge]&#40;https://img.shields.io/badge/Wow.js-1.1.3-lightblue?style=for-the-badge&logo=Javascript&#41;]&#40;https://wowjs.uk/docs.html&#41;)
</div>

# 📑 Info

Este projeto foi feito usando [LINGUAGEM](https://www.google.com/) version 00.0.0.

# 📑 Branches

```
├── dev (local)
├── homolog (homolog)
└── master (production)
```

# 💡 Comandos git

### Clonar o repositorio
```bash
git clone https://github.com/felixAmandy/commands_git.git
# ou se estiver utilizando chave SSH
git clone git@github.com:felixAmandy/commands_git.git
```

### Listar as branches
```bash
git branch
# para atualizar as referências remotas do seu repositório local use:
git fetch --all
```

### Navegar pelas branchs
```bash
# sendo NAME o nome da branch q você quer ir
git checkout NAME
```

### Adicionar suas alteraçoes na staging area
```bash
# '.' podendo ser tbm o nome do arquivo, o '.' seria tudo
git add . 
```

### Salvar suas alterações na staging area
```bash
# MSG sendo sua mensagem
git commit -m "MSG"
```

### Salvar/add suas alterações ao repositorio
```bash
# NAME sendo o nome da branch q você quer enviar as suas alterações
git push -u origin NAME 
```

### Buscar as alterações do repositorio
```bash
# NAME sendo o nome da branch q você quer obter as alterações
git pull origin NAME
```

# ⚙️ Executar Projeto

### Arquivo .env
Na raíz do projeto, é possível identificar o arquivo ```.env.example```, copie o conteúdo dele em um novo arquivo chamado ```.env```. 
Após isso, no terminal, faça o seguinte comando: ```php artisan key:generate```. Isso vai gerar automaticamente uma chave de criptografia e adicioná-la ao seu ```.env```.
### Comando de execução
```
php artisan migrate && php artisan db:seed --class=HqsSeeder && php artisan serve
```
Este comando irá primeiro executar migrações pendentes, depois popular o banco de dados e, finalmente, iniciar o servidor do Laravel.
Abra o seu browser e navegue até `http://127.0.0.1:8000/`. 

# 📑 Recursos adicionais

Para obter mais informações sobre o projeto navegue pela aplicação e dê uma olhadinha no nosso [repositório](https://github.com/felixAmandy/WEB-Project).


### 😁 Enjoy!