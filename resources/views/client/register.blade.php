@extends('client.app')
@push('styles')
    <link href="{{asset('client/css/register.css')}}" rel="stylesheet" type="text/css"/>
@endpush
@section('content')
    <div class="container white z-depth-2">
        <ul class="tabs teal">
            <li class="tab col s3"><a class="white-text active">Regjistrohu</a></li>
        </ul>
        <div id="register" class="col s12">
            <form  class="col s12" enctype="multipart/form-data" action="send.php" method="post" id="registrationForm">
                <div class="form-container">
                    <h3 class="teal-text">Mirësevini</h3>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="name" name="name" type="text" class="validate" required>
                            <label for="name">Emri</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="surname" name="surname" type="text" class="validate" required>
                            <label for="surname">Mbiemri</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="phone" name="phone" type="text" class="validate">
                            <label for="phone">Telefon</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email" data-error="Email jo i saktë">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="specialty" id="specialty">
                                <option value="" disabled selected>Specialiteti</option>
                                @foreach($specialties as $specialty)
                                    <option value="{{$specialty->id}}">{{$specialty->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="institution" id="institution" required>
                                <option value="" disabled selected>Institucioni</option>
                                @foreach($institutions as $institution)
                                    <option value="{{$institution->id}}">{{$institution->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="specialty" id="specialty" required>
                                <option value="" disabled selected>Vendndodhja</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <div class="file-field input-field">
                                <div class="btn"><span><i class="fa fa-paperclip" aria-hidden="true"></i></span>
                                    <input type="file" name="file[]" id="cv">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Ngarkoni CV-në tuaj.">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <div class="file-field input-field">
                                <div class="btn"><span>  <i class="fa fa-camera" aria-hidden="true"></i>
                                    </span>
                                    <input type="file" name="file[]" id="foto">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Ngarkoni foton tuaj.">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button class="btn waves-effect waves-light teal btn-block" type="submit" name="submit"  id="submit" value="send">Regjistrohu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
@push('scripts')
    <script src="{{asset('client/js/register.js')}}" type="text/javascript"></script>
@endpush
