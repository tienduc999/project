<form action="/app/public/dangKydoi" method="post">
    {!! csrf_field() !!}
    <input type="text" name="time">
    <input type="text" name="stadium">
    <input type="text" name="address">
    <input type="text" name="level">
    <input type="text" name="match">
    <input type="text" name="status">
    <input type="text" name="note">
    <input type="text" name="user_id">


    <input type="submit" name="nhap">
</form>
