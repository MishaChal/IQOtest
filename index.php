<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="js/script.js"></script>
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
$(function () {
    $("#datepicker").datepicker({dateFormat: 'dd.mm.yy',changeMonth: true,
		changeYear: true,
		yearRange: "-2:+2"});
});
    </script>
</head>
<style>

</style>

<body>
    <div class="container">
        <header>
            <div class="row">

                <div class="col-9" style="padding-left: 5px"> <img src="images/bank.png"></div>
                <div class="col-3" id="number"> 8-800-100-5005 <br>+7 (3452) 522-000</div>
            </div>
            <nav class="top-menu">
                <ul class="menu-main">
                    <li><a href="" style="border-left: none">Кредитные карты</a></li>
                    <li><a href="" class="current">Вклады</a></li>
                    <li><a href="">Дебетовая карта</a></li>
                    <li><a href="">Страхование</a></li>
                    <li><a href="">Друзья</a></li>
                    <li><a href="">Интернет-банк</a></li>
                </ul>
            </nav>
        </header>
        <ol id="breadcrumbs">
            <li>
                <a href=""><u>Главная</u></a>
            </li>
            -
            <li>
                <a href=""><u>Вклады</u></a>
            </li>
            -
            <li>
                <a href="" class="active">Калькулятор</a>
            </li>
        </ol>
        <form id="ajax_form" action="" method="post">
            <h2>Калькулятор</h2>
            <div class="row">
                <div class="col-4 calc">
                    <p><label for="date">Дата оформления вклада</label>
                </div>
                <div class="col-2"><input type="text" name="date" id="datepicker" style="width:88px; height: 23px;" placeholder="дд.мм.гггг"></p>
                </div>
                <div class="col-6"></div>
                <div class="col-4 calc">
                    <p><label for="Sum">Сумма вклада</label>
                </div>
                <div class="col-2"><input type="number" name="sum" id="Sum" min="1000" max="3000000" step="1000" style="width:88px; height: 23px;" oninput="inputSum()"></p>
                </div>
                <div class="col-6"><input id="range" type="range" min="1000" max="3000000" step="1000" value="0" style=width:238px;
                        oninput="inputRangeSum()"><br><div><div style="font-family: Arial; font-size:9px; font-style: oblique; margin-bottom:0; display: inline-block; padding-right:140px;">1 тыс. руб.</div> <div style="text-align:right;font-family: Arial; font-size:9px; font-style: oblique; margin-bottom:0; display: inline-block;">3 000 000</div></div></div>
            
                <div class="col-4 calc">
                    <p><label>Срок вклада</label>
                </div>
                <div class="col-2" ><select style="width:88px; height: 23px;">
                        <option>1 год</option>
                        <option>2 года</option>
                        <option>3 года</option>
                        <option>4 года</option>
                        <option>5 лет</option>
                    </select></p>
                </div>
                <div class="col-6"></div>
                <div class="col-4 calc">
                    <p><label for="PopolnenieVklada">Пополнение вклада</label>
                </div>
                <div class="col-2"><input type="radio" name="YesOrNo" value="Нет" checked>Нет <input type="radio"
                        name="YesOrNo" value="Да">Да </p>
                </div>
                <div class="col-6"></div>
                <div class="col-4 calc">
                    <p><label for="SumPopVkl">Сумма пополнения вклада</label>
                </div>
                <div class="col-2"><input type="number" name="spv" id="SumPopVkl" min="1000" max="3000000" step="500" style="width:88px; height: 23px;" oninput="inputSpv()"></p>
                </div>
                <div class="col-6"><input id="rangeSpv" type="range" min="1000" max="3000000" step="500" value="0" style=width:238px;
                        oninput="inputRangeSpv()"><br><div><div style="font-family: Arial; font-size:9px; font-style: oblique; margin-bottom:0; display: inline-block; padding-right:140px;">1 тыс. руб.</div> <div style="text-align:right;font-family: Arial; font-size:9px; font-style: oblique; margin-bottom:0; display: inline-block;">3 000 000</div></div></div>
            
            <div class="col-3"><input id="btn" type="button" value="Рассчитать" ></div><div class="col-9"><div id="result_form"></div></div></div>
        </form>
        <footer>
            <div class="footer_text"><u>Кредитные&#8194карты</u> <u>Вклады</u> <u>Дебетовая&#8194карта</u>
                <u>Страхование</u> <u>Друзья</u> <u>Интернет-банк</u></div>
        </footer>
    </div>
</body>

</html>