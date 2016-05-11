<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="registrationform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Регистрация</h4>
            </div>
            <form role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputName1">Имя</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Введите имя">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Введите email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль
                        </label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                        <span class="help-block">минимум 6 символов</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2">Пароль еще раз</label>
                        <input type="password" name="password2" class="form-control" id="exampleInputPassword2" placeholder="Пароль">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="subscribe" type="checkbox"> Я хочу получать информационные сообщения от markettown.ru
                        </label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Регистрация</button>
                    <p class="text-center">Регистрируясь, я подтверждаю своё согласие с условиями пользовательского
                        соглашения</p>
                </div>
            </form>
        </div>
    </div>
</div>