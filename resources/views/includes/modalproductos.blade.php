<div class="tab-pane" id="mesa-libre">
    <h4 class="title">Mesas Libres</h4>
    <div class="team">
        <div class="row">
            @foreach($boards as $board)
                @if($board->status == 0)
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-content">
                                <h6 class="category text-danger">
                                    {{ $board->num_board }}
                                </h6>
                                <h4 class="card-title">
                                    {{ $board->place }}
                                </h4>

                                <form action="{{ url('/admin/boards/'.$board->id.'/do') }}" method="post">
                                    {{ csrf_field() }}
                                    <button class="btn btn-primary btn-round">
                                        <i class="material-icons">update</i>
                                        <div class="ripple-container"></div></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
