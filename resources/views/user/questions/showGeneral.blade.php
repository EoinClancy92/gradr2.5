@extends('layouts.appUser')
<link rel="stylesheet" href="{{ URL::asset('css/master.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/showgeneral.css') }}" />

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      <div class="container questions">
          <div class="row justify-content-center">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-body">
                          <table id="table-questions" class="table table-hover">
                            <tbody>
                                    <div class="sideBar float-left" style="margin-right:1em; height:75px">
                                      <form style="display:inline-block" method="POST" action="{{route('user.questions.voteGeneral',$questionsGeneral->id)}}" class="float-right">
                                        <input type="hidden" name="_method" value="PUT">
                                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                           <button type="submit" class="form-control btn btn-sm"><i class="fas fa-thumbs-up" style="margin-right:0.2em;"></i>{{$questionsGeneral->votes}}</a>
                                     </form>
                                    </div>
                                    <div class="content">
                                      <h7><b>General</b></h7> · <h7>Posted by: <a href="{{ route('user.profile', $questionsGeneral->student->user->name) }}">{{ $questionsGeneral->student->user->name }}</a></h7> · {{ substr($questionsGeneral->created_at,'0','10')}}<h7 class="float-right"><a href="{{ route('user.answers.create', ['type' => $questionsGeneral->getTable(), 'id' => $questionsGeneral->id])}}">Answer</a></h7>
                                      <h2 style="margin-top:0.2em;">{{ $questionsGeneral->title }}</h2>
                                      <p>{{ $questionsGeneral->info }}</p>
                                      <h7><a href="{{ route('user.answers.index', ['type' => $questionsGeneral->getTable(), 'id' => $questionsGeneral->id])}}" > {{$questionsGeneral->answers}} Answer(s) </a></h7>
                                   </div>
                            </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
