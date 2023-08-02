<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('/css/register.css')}}">
    </head>
    <body>

        <main>
            <form action="" method="post">

                <div class="register">
                    <input class="name" type="text" name="name" value=""placeholder="タスク名" />

                    <br><input class="name" type="text" value=""placeholder="ジャンル"/>

                    <div class="progressmenu">
                        <select name="progress" id="progress">
                            <option value="">進捗</option>
                            <option value="notstart">未着手</option>
                            <option value="start">作業中</option>
                            <option value="clear">完了</option>
                        </select>
                    </div>

                    <div class="severitymenu">
                        <select name="severity" id="severity">
                            <option value="">優先度</option>
                            <option value="notstart">低</option>
                            <option value="start">中</option>
                            <option value="clear">高</option>
                        </select>
                    </div>

                    <input class="name" type="text" value=""placeholder="締め切り日 (yyyy/mm/dd)"/>
                    <br><input class="name" type="text" value=""placeholder="目標日 (yyyy/mm/dd)"/>

                    <br><button class="submit"type="submit">登録</button>
                </div>


            </form>
            <div class="back">
                <br><br><button class="backbutton" onclick="location.href='./show'">戻る</button>
            </div>
        </main>


    </body>

</html>
