<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Почтова Виктория Владимировна, группа 221-361, лабораторная работа №10 (анализвтор текста)</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .src_text {
      color: blue;
      font-style: italic;
    }
  </style>
</head>
<body>
    <header>
        <img src="logo.jpg" alt="University Logo">
        <p>Почтова Виктория Владимировна, группа 221-361, лабораторная работа №10 (анализатор текста)</p>
    </header>
    <main>
        <?php

        if (isset($_POST['data']) && $_POST['data']) {
            echo '<div class="src_text">' . $_POST['data'] . '</div>';
            analyzeText(iconv("utf-8", "cp1251", $_POST['data']));
        } else {
            echo '<div class="src_error">Нет текста для анализа</div>';
        }

        function analyzeText($text) {
            echo '<br>Количество символов: ' . strlen($text) . '<br><br>';

            preg_match_all("/[а-яА-Яa-zA-Z]/u", iconv("cp1251", "utf-8", $text), $matches);
            $totalLetters = count($matches[0]);
            echo 'Всего букв: ' . $totalLetters . '<br><br>';

            preg_match_all("/[А-ЯA-Z]/u", iconv("cp1251", "utf-8", $text), $matches);
            $totalUppercaseLetters = count($matches[0]);
            echo 'Всего заглавных букв: ' . $totalUppercaseLetters . '<br><br>';

            preg_match_all("/[а-яa-z]/u", iconv("cp1251", "utf-8", $text), $matches);
            $totalLowercaseLetters = count($matches[0]);
            echo 'Всего строчных букв: ' . $totalLowercaseLetters . '<br><br>';

            preg_match_all("/[^\p{L}\p{N}\s]/u", iconv("cp1251", "utf-8", $text), $matches);
            $totalPunctuationMarks = count($matches[0]);
            echo 'Всего знаков препинания: ' . $totalPunctuationMarks . '<br><br>';

            $digit_count = preg_match_all('/\d/', iconv("cp1251", "utf-8", $text));
            echo 'Количество цифр: ' . $digit_count . '<br><br>';

            echo 'Количество слов: '.count(preg_split('/\s+/', $text)).'<br><br>';

            $char_freq = array_count_values(str_split(mb_strtolower($text, "cp1251")));
            echo 'Количество вхождений каждого символа текста:<br>';

            echo "<table><tr><td>Cимвол</td><td>Количество вхождений</td></tr>";
            foreach ($char_freq as $char => $freq) {
                echo '<tr><td>'. iconv("cp1251", "utf-8", $char).'</td><td>'. $freq.'</td></tr>';
            }
            echo "</table><br><br>";

            $words = [];
            $wordList = preg_split('/\s+/', $text);

            for ($i = 0; $i < count($wordList); $i++) {
                $word = mb_strtolower($wordList[$i], "cp1251");

                if (preg_match('/^[^\p{L}]+$/u', $word)) {
                    continue;
                }
                
                if (isset($words[$word])) {
                    $words[$word]++;
                } else {
                    $words[$word] = 1;
                }
            }

            ksort($words);
            echo 'Список всех слов в тексте и количество их вхождений, отсортированный по алфавиту:<br>';

            echo "<table><tr><td>Cлово</td><td>Количество вхождений</td></tr>";
            foreach ($words as $word => $freq) {
                echo '<tr><td>'. iconv("cp1251", "utf-8", $word).'</td><td>'. $freq.'</td></tr>';
            }
            echo "</table><br><br>";

        }
        ?>
        <button><a href="index.html">Другой анализ</a></button>
    </main>
    <footer>
        <p>Электронная почта: vika.pochtova.04@bk.ru</p>
    </footer>
</body>
</html>
