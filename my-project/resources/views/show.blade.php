<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/show.css')}}">
    </head>
    <body>
        <header>
            <h1>タスク一覧</h1>
            <div class="watchbutton">
                <button class="btn-square-pop">start</button>
                <button class="btn-square-pop">stop</button>
            </div>
            <div class="display">
                <span id="hours" class="time">00</span>
                <span id="minutes" class="time">00</span>
                <span id="seconds" class="time">00</span>
            </div>
            <br>
            <hr>
        </header>
        <main>
            <div class="register">
                <button class="registerbutton btn-square-pop" onclick="location.href='./register'">登録</button>
            </div>
            <table border="5" style="border-collapse: collapse">

                <tr>
                    <td class="task">test1</td>
                    <td><button class="button btn-square-pop" onclick="location.href='./detail'">詳細</button></td>
                    <td><button class="button btn-square-pop" onclick="location.href='./edit'">編集</button></td>
                    <td><button class="button btn-square-pop" onclick="location.href='./register'">削除</button></td>
                </tr>

                <tr>
                    <td>test2</td>
                    <td><button class="button btn-square-pop" onclick="location.href='./detail'">詳細</button></td>
                    <td><button class="button btn-square-pop" onclick="location.href='./edit'">編集</button></td>
                    <td><button class="button btn-square-pop" onclick="location.href='./register'">削除</button></td>
                </tr>

                <tr>
                    <td>test3</td>
                    <td><button class="button btn-square-pop" onclick="location.href='./detail'">詳細</button></td>
                    <td><button class="button btn-square-pop" onclick="location.href='./edit'">編集</button></td>
                    <td><button class="button btn-square-pop" onclick="location.href='./register'">削除</button></td>
                </tr>

                <tr>
                    <td>test4</td>
                    <td><button class="button btn-square-pop" onclick="location.href='./detail'">詳細</button></td>
                    <td><button class="button btn-square-pop" onclick="location.href='./edit'">編集</button></td>
                    <td><button class="button btn-square-pop" onclick="location.href='./register'">削除</button></td>
                </tr>

                <tr>
                    <td>test5</td>
                    <td><button class="button btn-square-pop" onclick="location.href='./detail'">詳細</button></td>
                    <td><button class="button btn-square-pop" onclick="location.href='./edit'">編集</button></td>
                    <td><button class="button btn-square-pop" onclick="location.href='./register'">削除</button></td>
                </tr>
            </table>

            <div class="selectbutton">
                <button class="buttonsize btn-square-pop" onclick="location.href='./sort'">ソート</button>
                <button class="buttonsize btn-square-pop" onclick="location.href='./calendar'">カレンダー</button>
            </div>


        </main>


    </body>

</html>
