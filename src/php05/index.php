<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo-box">
                <a href="index.php" class="header__logo">World Clock</a>
            </div>
            <div class="header__menu">
                <ul class="header__menu-table">
                    <li>
                        <a href="" class="link">概要</a>
                    </li>
                    <li>
                        <a href="" class="link">詳細</a>
                    </li>
                    <li>
                        <a href="" class="link">about us</a>
                    </li>
                    <li>
                        <a href="" class="link">contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="content">
            <div class="content__text">
                <h2>日本と世界の時差を確認</h2>
            </div>
            <form action="result.php" class="search-form" method="get">
                <select name="select_country" id="" class="search-form__select">
                    <option value="ニューヨーク">🇺🇸ニューヨーク</option>
                    <option value="シドニー">🇦🇺シドニー</option>
                    <option value="ロンドン">🇬🇧ロンドン</option>
                    <option value="上海">🇨🇳上海</option>
                    <option value="モスクワ">🇷🇺モスクワ</option>
                    <option value="ヨハネスブルグ">🇿🇦ヨハネスブルグ</option>
                </select>
                <div class="search-form__button">
                    <button type="submit" class="search-form__button-submit">時間を見てみる</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>