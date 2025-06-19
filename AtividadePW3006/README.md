Organização das Pastas:
A estrutura do projeto foi organizada de forma que os arquivos de login e cadastro estão separados por tipo (HTML, CSS, JS e PHP), facilitando a manutenção e o entendimento. Os arquivos HTML principais também foram divididos de acordo com suas funcionalidades. A estrutura atual está da seguinte forma:

O projeto possui as páginas: Home, Produtos, Quem Somos, Contato, além de páginas específicas para Login e Cadastro de Usuário.

ATIVIDADEPW3006/
├── CSS/
│   ├── Imagens/
│   ├── cadastroUsuario.css
│   ├── loginUsuario.css
│   └── style.css
├── HTML/
│   └── Paginas/
│       ├── cadastroUsuario.html
│       ├── contato.html
│       ├── index.html
│       ├── loginUsuario.html
│       ├── produtos.html
│       └── quemsomos.html
├── JS/
│   ├── indexcadastro.js
│   └── indexLogin.js
├── PHP/
│   ├── AtualizaUsuario.php
│   ├── CadastroUsuario.php
│   ├── Conexao.php
│   ├── ConsultaUsuario.php
│   ├── loginUsuario.php
│   ├── RemoveUsuario.php
│   └── UsuarioController.php
├── SQL/
│   └── crud_pdo.sql
