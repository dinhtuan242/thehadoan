@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    <section class="section">
        <div class="container">
            <div class="row">

                <div class="col s12 m3">
                    <div class="agent-sidebar">
                        @include('agent.sidebar')
                    </div>
                </div>

                <div class="col s12 m9">
                    <div class="agent-content">
                        <h4 class="agent-title">Thông tin cá nhân</h4>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">person</i>
                                    <input id="name" name="name" type="text" value="{{ $profile->name }}" class="validate" disabled>
                                    <label for="name">Tên</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">assignment_ind</i>
                                    <input id="username" name="username" type="text" value="{{ $profile->username}}" class="validate" disabled>
                                    <label for="username">Tên đăng nhập</label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" name="email" type="email" value="{{ $profile->email }}" class="validate" disabled>
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="email" name="email" type="email" value="{{ $profile->phone }}" class="validate" disabled>
                                    <label for="email">SĐT</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">location_on</i>
                                    <input id="email" name="email" type="email" value="{{ $profile->address }}" class="validate" disabled>
                                    <label for="email">Địa chỉ</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="about" name="about" class="materialize-textarea" disabled>{{ $profile->about}}</textarea>
                                    <label for="about">Thông tin về bạn</label>
                                </div>
                            </div>

                            <div class="row">
                                <a href="{{route('agent.profile.view-update')}}">
                                    <button class="btn waves-effect waves-light btn-large brown darken-3" type="button">
                                        Cập nhật thông tin
                                        <i class="material-icons right">send</i>
                                    </button>
                                </a>
                            </div>
                    </div>
                </div> <!-- /.col -->

            </div>
        </div>
    </section>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('textarea#about').characterCounter();
    });

</script>
@endsection