@extends('admin.admin-html')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l12">
        <h4 class="left-align">Create Users</h4>
    </div>

</div>

<hr class="col s12 m4 l12">

<div class="col s12 m4 l12">
    <form class="col s6" action="{{route('users.store')}}" method="POST">
        <div class="row">
            <div class="input-field col s6">
                <input id="name" type="text" class="validate">
                <label for="name">Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <p>
                    <label for="commanditaire">
                        <input id="commanditaire" name="user-type" value="commanditaire" type="radio" />
                        <span>Commanditaire</span>
                    </label>
                </p>
            </div>
            <div class="input-field col s6">
                <p>
                    <label for="interprete">
                        <input id="interprete" name="user-type" value="interprete" type="radio" />
                        <span>Interprete</span>
                    </label>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>

            <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>
</div>
</form>
<div class="row">
    <div class="col s12">
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
        </button>
    </div>
</div>

</div>
@endsection
