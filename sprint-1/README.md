# 📄 Sprint-1: Página "Sobre Mim"

## 🎯 Objetivo

Desenvolver uma página web responsiva apresentando um portfólio pessoal com informações profissionais, habilidades técnicas e formas de contato.

## 📦 Estrutura do Projeto

```
sprint-1/
├── index.html              # Página principal
├── style.css               # Estilos CSS
├── README.md               # Este arquivo
├── fonts/                  # Fontes personalizadas
│   ├── PermanentMarker.ttf
│   ├── PermanentMarker.woff
│   └── Inter.ttf
├── images/                 # Pasta para imagens (quando necessário)
└── templates/              # Arquivos de referência
    ├── projeto01-layout.png
    ├── Projeto_1_checklist.pdf
    ├── Sobre_Mim__Resumo_do_Projeto.pdf
    └── sobre-mim.zip
```

## 🎨 Conteúdo da Página

### Header
- 🎤 Nome: **Caio Vinicius Loureiro**
- 💼 Profissão: **Desenvolvedor Full Stack**
- 📝 Descrição: 20 anos de experiência em desenvolvimento web

### Cards de Habilidades (6)
1. **Sobre** - Apresentação profissional
2. **Front-End** - HTML5, CSS3, JavaScript, React, Vue, jQuery
3. **Mobile** - React Native, Expo, Material Design
4. **Back-End** - Node.js, PHP, Laravel, APIs RESTful
5. **Bancos de Dados** - MySQL, PostgreSQL, IBM DB2
6. **Ferramentas** - Git, GitHub, Trello, Jira, Kanban, SCRUM

### Footer
- Informações de contato
- Links para redes sociais (GitHub, LinkedIn, Instagram)
- WhatsApp e Email com links diretos

## 🛠️ Tecnologias Utilizadas

- **HTML5** - Estrutura semântica (header, section, footer)
- **CSS3** - Estilos, gradientes, flexbox, media queries
- **Fontes** - Permanent Marker (títulos), Inter (corpo)
- **Responsividade** - Media query para portrait até 1024px

## 📊 Design

- **Cores Principais:** Azul (#667eea) e Roxo (#764ba2)
- **Paleta Secundária:** Branco, Cinza (#555), Escuro (#333)
- **Efeitos:** Gradientes, hover animations, box-shadows
- **Layout:** Grid responsivo com 3 colunas (desktop)

## ✅ Checklist de Requisitos

- ✅ Estrutura HTML semântica (`<header>`, `<section>`, `<footer>`)
- ✅ `<h1>` para título principal, `<h2>` para títulos de cards
- ✅ `<p>` para parágrafos, `<ul><li>` para listas
- ✅ Sem valores negativos de margin/padding
- ✅ Largura máxima definida (max-width: 1200px)
- ✅ Cartões centralizados
- ✅ Sem barra de rolagem horizontal
- ✅ Sem `height` desnecessário
- ✅ Media query conforme especificação: `@media only screen and (max-width: 1024px) and (orientation: portrait)`
- ✅ Sem alterações no kit inicial

## 🖥️ Responsividade

### Desktop (1024px+)
- Cards em grid 3 colunas
- Tamanho de fonte padrão
- Layout fluido

### Tablet/Mobile Portrait (até 1024px)
- Cards em grid 2 colunas
- Fonte reduzida
- Padding ajustado

## 🚀 Como Visualizar

1. **Local:**
   - Abra o arquivo `index.html` diretamente no navegador
   - Ou acesse via servidor: `http://localhost/tripleten/sprint-1/`

2. **Via Índice Principal:**
   - Acesse `index.php` na raiz do projeto
   - Clique no link **sprint-1**

## 📱 Compatibilidade

- ✅ Google Chrome
- ✅ Firefox
- ✅ Safari
- ✅ Edge
- ✅ Responsivo em dispositivos móveis (portrait)

## 📝 Notas

- Todas as imagens devem estar em `images/` com atributo `alt`
- Tamanho dos cards pode variar em até 30px do layout padrão
- Links de redes sociais redirecionam para perfis reais

---

**Desenvolvido para:** Curso Tripleten - Desenvolvedor Web  
**Data de atualização:** 6 de fevereiro de 2026
