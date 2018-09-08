<form action="/app/public/update" method="post">
    {!! csrf_field() !!}
    <input type="text" name="account_name">
    <input type="password" name="password">
    <input type="text" name="they">
    <input type="password" name="name">

    <input type="submit" name="nhap">
</form>