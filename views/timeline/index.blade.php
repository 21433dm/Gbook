@extends('templates.default')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-6">
            <form role="form" action="#" method="post">
                <div class="form-group">
                    <textarea placeholder="What's up {{ Auth::user()->username }}?" name="status" class="form-control" rows="2"></textarea>
                    <br>
                    <button type="submit" class="btn btn-outline-primary">Update status</button>
                </div>
            </form>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5">
            <!-- Timeline statuses and replies -->
        </div>
    </div>
@stop