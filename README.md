# Ternura na Cozinha

O software “Ternura na Cozinha” foi concebido como um espaço dedicado ao armazenamento de receitas, proporcionando a possibilidade de organizá-las em diversas categorias. Sua funcionalidade assemelha-se à experiência de manusear um livro de receitas da vovó, que nos foi legado em seu obituário. Com esta plataforma, busca-se preservar e compartilhar não apenas receitas culinárias, mas também a memória afetuosa associada à tradição familiar na arte da gastronomia.

## Pré-requisitos

Para rodar o projeto, é necessário ter o Composer e o PHP instalados. É recomendável usar as versões mais atualizadas, embora este projeto tenha sido desenvolvido em Laravel 10, se não me engano.

Além disso, certifique-se de que a extensão SQLite do PHP esteja ativada. Você pode precisar habilitá-la no arquivo `php.ini`.

## Instalação

1. Renomeie o arquivo `.env.example` para `.env`.
2. Execute o seguinte comando para gerar a chave de aplicação do Laravel:
    ```
    php artisan key:generate
    ```
3. Execute as migrações do banco de dados:
    ```
    php artisan migrate
    ```
4. Popule o banco de dados com dados de exemplo:
    ```
    php artisan db:seed
    ```
5. Inicie o servidor local:
    ```
    php artisan serve
    ```

## Contato

Se tiver alguma dúvida ou sugestão, sinta-se à vontade para entrar em contato.
