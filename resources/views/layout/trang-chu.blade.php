<form action="/app/public/logIn" method="post">
    {!! csrf_field() !!}
    <input type="text" name="account_name">
    <input type="password" name="password">
    <input type="submit" name="nhap">
</form>