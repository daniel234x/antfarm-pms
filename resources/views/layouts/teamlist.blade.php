
@if(count($team) > 0)

<div class="content-list-body row">

    @foreach($team as $team)

    <div class="col-md-6">
      <div class="card card-team">
        <div class="card-body">
          <div class="dropdown card-options">
            <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">more_vert</i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">

                <a href="{{ route('dashboard.destroy', $team->id) }}" class="dropdown-item text-danger" data-method="delete">Remove</a>

            </div>
          </div>
          <div class="card-title">

            <a href="dashboard/teams/{{ $team->id }}"><h5 data-filter-by="text">{{ $team->team_name }}</h5></a>
            <span>4 Projects, 6 Members</span>

          </div>
          <ul class="avatars">

            <li>
              <a href="#" data-toggle="tooltip" title="Kenny">
                <img alt="Kenny Tran" class="avatar" src="assets\img\avatar-male-6.jpg">
              </a>
            </li>

            <li>
              <a href="#" data-toggle="tooltip" title="David">
                <img alt="David Whittaker" class="avatar" src="assets\img\avatar-male-4.jpg">
              </a>
            </li>

            <li>
              <a href="#" data-toggle="tooltip" title="Sally">
                <img alt="Sally Harper" class="avatar" src="assets\img\avatar-female-3.jpg">
              </a>
            </li>

            <li>
              <a href="#" data-toggle="tooltip" title="Kristina">
                <img alt="Kristina Van Der Stroem" class="avatar" src="assets\img\avatar-female-4.jpg">
              </a>
            </li>

            <li>
              <a href="#" data-toggle="tooltip" title="Claire">
                <img alt="Claire Connors" class="avatar" src="assets\img\avatar-female-1.jpg">
              </a>
            </li>

            <li>
              <a href="#" data-toggle="tooltip" title="Marcus">
                <img alt="Marcus Simmons" class="avatar" src="assets\img\avatar-male-1.jpg">
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>

    @endforeach



</div>

@else


<div class="content-list-body row">

    <h2 class="else"> No teams created... </h2>
    <style>
        .else {
            text-align: center;
            margin: 0 auto;
            margin-top: 30px;
            color: rgb(112, 112, 112)
        }
    </style>
<div>

@endif
