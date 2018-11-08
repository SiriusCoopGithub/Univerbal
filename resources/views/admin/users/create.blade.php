@extends('admin.admin-html')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l12">
        <h4 class="left-align">Create Users</h4>
    </div>

</div>

<hr class="col s12 m4 l12">
<div id="vue-admin-create-user">

    <div class="col s12 m4 l12">
        <form class="col s6 m4 l6" action="{{route('users.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <input id="name" type="text" class="validate">
                    <label for="name">Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <p>
                        <label for="commanditaire">
                            <input id="commanditaire" name="usertype" value="commanditaire" type="radio" />
                            <span>Commanditaire</span>
                        </label>
                    </p>
                </div>
                <div class="input-field col s6 m4 l6">
                    <p>
                        <label for="interprete">
                            <input id="interprete" name="usertype" value="interprete" type="radio" />
                            <span>Interprete</span>
                        </label>
                    </p>
                </div>
            </div>

            {{-- @foreach ($roles as $role)
            <div class="input-field col s12 m4 l12">

                <label>
                    <input type="checkbox" :native-value="{{$role->id}}" />
                    <span>{{$role->display_name}}</span>
                </label>

            </div>
            @endforeach --}}

            <div class="row">
                <div class="input-field col s12 m4 l12">
                    <input id="password" type="password" class="validate" minlength="6" autocomplete="new-password"
                        required>
                    <label for="password">Password</label>
                </div>

                <div class="input-field col s6 m4 l6">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>


            <div class="row">
                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script-create-user-password')
<script>
    const vueAdminCreateUserPassword = new Vue({
        el: '#vue-admin-create-user',
        data: {
            msg: 'coucou',
            // rolesSelected: "{!! old('roles') ? old('roles') : '' !!}",
        }
    });

</script>
@endsection
