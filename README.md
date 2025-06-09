<!-- <p align="center">
<img src="/assets/images/logo.png" alt="Logo do projeto" title="Promoção CIMED" width="182" style="margin: 30px auto; display: block;">
</p> -->
<h1 align="center">Projeto WEB</h1>

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

Para obter mais informações sobre o projeto navegue pela aplicação e dê uma olhadinha no nosso [repositório](https://github.com/AmandaFelix-dev/ComicsGhost).


### 😁 Enjoy!
