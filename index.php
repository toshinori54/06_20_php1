<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート </title>
</head>

<body>
    <form action=" quest_txt_create.php" method="POST">
        <fieldset>
            <legend>コロナ渦における変化</legend>
            <a herf="quest_read.php">一覧画面<a>
                    <div>
                        １０代：<input type="radio" name="year" value="１０代">
                        ２０代：<input type="radio" name="year" value="２０代">
                        ３０代：<input type="radio" name="year" value="３０代">
                        ４０代：<input type="radio" name="year" value="４０代">
                        ５０代：<input type="radio" name="year" value="５０代">
                        ６０代以上：<input type="radio" name="year" value="６０代">
                    </div>
                    <div>
                        男：<input type="radio" name="gender" value="男">
                        女：<input type="radio" name="gender" value="女">
                    </div>
                    <div>コロナは大変なこと</div>
                    <form method="post" action="examle">
                        <div>
                            <select name="example1">
                                <option value="マスクが変えない">マスクが変えない </option>
                                <option value="どこにも出かけられない">どこにも出かけられない </option>
                                <option value="視力低下や肩こり">視力低下や肩こり</option>
                                <option value="運動不足">運動不足 </option>
                                <option value="食費がかかる">食費がかかる</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                        <!-- </form> -->


                        <div>コロナで良かったこと</div>
                        <!-- <form method="post" action="examle"> -->
                        <div>
                            <select name="example2">
                                <option value="自分の時間が出来た ">自分の時間が出来た </option>
                                <option value="睡眠を多くとれる">睡眠を多くとれる </option>
                                <option value="仕事によるストレス軽減">仕事によるストレス軽減</option>
                                <option value="趣味の時間を作ることが出来た">趣味の時間を作ることが出来た</option>
                                <option value="自炊をするようになった">自炊をするようになった</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                    </form>



                    <div>
                        <button>submit</button>
                    </div>
        </fieldset>

    </form>


</body>

</html>