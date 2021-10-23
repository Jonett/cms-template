<div class="row mt-5">
    <div class="col-6 offset-3">
        <div class="card">
            <div class="card-header">
                <h3>register new user</h3>
            </div>
            <div class="card-body">
                <form action="/new_user" method="POST">
                    <label for="uname1">username</label>
                    <input id="uname1" name="uname" type="text" class="form-control">

                    <label for="password1">password</label>
                    <input id="password1" name="pwd1" type="password1" class="form-control">

                    <label for="password2">write passsowrd again</label>
                    <input id="password2" name="pwd2" type="text" class="form-control">

                    <button type="submit" class="btn btn-outline-success mt-4">register</button>
                </form>
            </div>
        </div>
    </div>
</div>
