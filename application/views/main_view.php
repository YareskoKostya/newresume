<h2 style="position: relative; left: 100px">Заполните резюме</h2>
<form action="/list" method="POST">
    <table>
        <tr>
            <td align="right">
                Ваше имя:
            </td>
            <td>
                <input class="form-control" type="text" name="name">
            </td>
        </tr>
        <tr>
            <td align="right">
                Ваша фамилия:
            </td>
            <td>
                <input class="form-control" type="text" name="surname">
            </td>
        </tr>
        <tr>
            <td align="right">
                Дата рождения:
            </td>
            <td>
                <input class="form-control" type="date" name="birthdate">
            </td>
        </tr>
        <tr>
            <td align="right">
                Национальность:
            </td>
            <td>
                <select class="custom-select" name="country">
                    <option>Украина</option>
                    <option>Беларусь</option>
                    <option>Молдова</option>
                    <option>Польша</option>
                    <option>Словакия</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">
                Телефон:
            </td>
            <td>
                <input class="form-control" type="tel" name="tel">
            </td>
        </tr>
        <tr>
            <td align="right">
                Почта:
            </td>
            <td>
                <input class="form-control" type="email" name="email">
            </td>
        </tr>
        <tr>
            <td align="right">
                Текущий адрес:
            </td>
            <td>
                <input class="form-control" type="text" name="address">
            </td>
        </tr>            
        <tr>
            <td colspan="2" align="center">
                <br/> Образование:

            </td>
        </tr>
        <tr>
            <td align="right">
                Дата начала обучения:
            </td>
            <td>
                <input class="form-control" type="date" name="datebeginstudy0">
            </td>
        </tr>
        <tr>
            <td align="right">
                Дата окончания обучения:
            </td>
            <td>
                <input class="form-control" type="date" name="dateendstudy0">
            </td>
        </tr>
        <tr>
            <td align="right">
                Название учебного заведения:
            </td>
            <td>
                <input class="form-control" type="text" name="studyname0">
            </td>
        </tr>
        <tr>
            <td align="right">
                Специальность:
            </td>
            <td>
                <input class="form-control" type="text" name="professionstudy0">
            </td>
        </tr>
        <tr>
            <td align="right">
                Степень:
            </td>
            <td>
                <input class="form-control" type="text" name="doctor0">
            </td>
        </tr>
    </table>
    <div id="inputstudy0"></div>
    <button style="position: relative; left: 130px" type="button" class="btn btn-primary" onclick="addStudy()">Добавить ещё</button>
    <table style="position: relative; left: 45px">
        <tr>
            <td colspan="2" align="center">
                <br/> Трудоустройство:
            </td>
        </tr>
        <tr>
            <td align="right">
                Дата начала работы:
            </td>
            <td>
                <input class="form-control" type="date" name="datebeginwork0">
            </td>
        </tr>
        <tr>
            <td align="right">
                Дата окончания работы:
            </td>
            <td>
                <input class="form-control" type="date" name="dateendwork0">
            </td>
        </tr>
        <tr>
            <td align="right">
                Место работы:
            </td>
            <td>
                <input class="form-control" type="text" name="workname0">
            </td>
        </tr>
        <tr>
            <td align="right">
                Специальность:
            </td>
            <td>
                <input class="form-control" type="text" name="professionwork0">
            </td>
        </tr>                
    </table>
    <div id="inputwork0"></div>
    <button style="position: relative; left: 130px" type="button" class="btn btn-primary" onclick="addWork()">Добавить ещё</button>

    <table style="position: relative; left: 150px">
        <tr>
            <td colspan="2" align="center">
                <br/>
            </td>
        </tr>
        <tr>
            <td align="right">
                Интересы:
            </td>
            <td>
                <input class="form-control" type="text" name="interests">
            </td>
        </tr>
    </table>
    <button style="position: relative; left: 230px" type="submit" class="btn btn-primary">Отправить</button>
</form>
<script>
    var x = 0;
    function addStudy() {
        if (x < 4) {
            var str1 = '<table><tr><td align="right">Дата начала обучения:</td><td><input class="form-control" type="date" name="datebeginstudy' + (x + 1) + '"></td></tr><tr><td align="right">Дата окончания обучения:</td>';
            var str2 = '<td><input class="form-control" type="date" name="dateendstudy' + (x + 1) + '"></td></tr><tr><td align="right">Название учебного заведения:</td><td><input class="form-control" type="text" name="studyname' + (x + 1) + '"></td></tr>';
            var str3 = '<tr><td align="right">Специальность:</td><td><input class="form-control" type="text" name="professionstudy' + (x + 1) + '"></td></tr><tr><td align="right">Степень:</td><td><input class="form-control" type="text" name="doctor' + (x + 1) + '"></td></tr></table><div id="inputstudy' + (x + 1) + '"></div>';
            document.getElementById('inputstudy' + x).innerHTML = str1 + str2 + str3;
            x++;
        } else
        {
            alert('Достаточно!');
        }
    }
    var y = 0;
    function addWork() {
        if (y < 4) {
            var str4 = '<table style="position: relative; left: 45px"><tr><td align="right">Дата начала работы:</td><td><input class="form-control" type="date" name="datebeginwork' + (y + 1) + '"></td></tr><tr><td align="right">Дата окончания работы:</td>';
            var str5 = '<td><input class="form-control" type="date" name="dateendwork' + (y + 1) + '"></td></tr><tr><td align="right">Место работы:</td><td><input class="form-control" type="text" name="workname' + (y + 1) + '"></td></tr>';
            var str6 = '<tr><td align="right">Специальность:</td><td><input class="form-control" type="text" name="professionwork' + (y + 1) + '"></td></tr></table><div id="inputwork' + (y + 1) + '"></div>';
            document.getElementById('inputwork' + y).innerHTML = str4 + str5 + str6;
            y++;
        } else
        {
            alert('Достаточно!');
        }
    }
</script>