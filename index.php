<?php
/**
 * Index dinâmico que exibe links para todas as pastas do projeto
 * As pastas aparecem automaticamente como links
 */

// Obtém o diretório atual
$dir = __DIR__;

// Lista todos os itens no diretório
$items = scandir($dir);

// Filtra apenas as pastas (ignorando . e ..)
$folders = [];
foreach ($items as $item) {
    $path = $dir . DIRECTORY_SEPARATOR . $item;
    if ($item !== '.' && $item !== '..' && is_dir($path) && $item !== '.git') {
        $folders[] = $item;
    }
}

// Ordena as pastas alfabeticamente
sort($folders);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripleTen - Índice de Projetos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 600px;
            width: 100%;
        }

        h1 {
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
            text-align: center;
        }

        .subtitle {
            color: #666;
            text-align: center;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .folders-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
        }

        .folder-link {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 15px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .folder-link:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.6);
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        }

        .folder-link::before {
            content: "📁 ";
            margin-right: 8px;
        }

        .empty-message {
            text-align: center;
            color: #999;
            padding: 40px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>TripleTen</h1>
        <p class="subtitle">Índice de Sprints e Projetos</p>

        <?php if (count($folders) > 0): ?>
            <div class="folders-list">
                <?php foreach ($folders as $folder): ?>
                    <a href="./<?php echo htmlspecialchars($folder); ?>" class="folder-link">
                        <?php echo htmlspecialchars($folder); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="empty-message">
                <p>Nenhuma pasta encontrada. Crie uma pasta no projeto para vê-la aqui!</p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
