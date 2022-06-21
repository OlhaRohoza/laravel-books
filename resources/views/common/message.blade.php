<div>
        @if (Session::has('success_adding'))
        <div class="alert alert-success" style="background: lightgreen; color: darkgreen">
            {{ Session::get('success_adding') }}
        </div>

    @elseif (Session::has('success_deleting'))
        <div class="alert alert-success" style="background: pink; color: red">
            {{ Session::get('success_deleting') }}
        </div>
    @endif
</div>