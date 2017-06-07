@foreach ((array) session('flash_notification') as $message)
    @if ($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ])
    @else
      <div class="panel-body">
        <div class="alert
                    alert-{{ $message['level'] }}
                    {{ $message['important'] ? 'alert-important' : '' }}"
        >
                <button type="button" class="close close-sm" data-dismiss="alert">
                    <i class="fa fa-times"></i>
                </button>

            {!! $message['message'] !!}
        </div>
      </div>
    @endif
@endforeach

{{ session()->forget('flash_notification') }}
