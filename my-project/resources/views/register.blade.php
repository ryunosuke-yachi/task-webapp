<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/register.css')}}">
    </head>
    <body>
        <header>
            <h1>登録画面</h1>
        </header>

        <main>

            <p>タスク名</p>
            <input type="text" />

            <p>進捗</p>
            <select name="start">
            <option value="notstart">未着手</option>
            <option value="start">作業中</option>
            <option value="clear">完了</option>
            </select>

            <p>重要度</p>
            <select name="start">
            <option value="notstart">低</option>
            <option value="start">中</option>
            <option value="clear">高</option>
            </select>

            <p>締め切り日</p>
            <input type="date" />

            <p>ジャンル</p>
            <input type="text" />

            <p>目標日</p>
            <input type="date" />

            <br><button onclick="location.href='./show'">戻る</button>
        </main>


    </body>

</html>
