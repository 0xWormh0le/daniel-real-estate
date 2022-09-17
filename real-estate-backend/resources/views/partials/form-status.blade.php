
<script>
    function notification(modaltitle, modalcontent, modalstate) {
      var placementFrom = "top";
      var placementAlign = "right";
      var state = modalstate;
      var style = "withicon";
      var content = {};

      content.message = modalcontent;
      content.title = modaltitle;
      if (style == "withicon") {
      content.icon = 'fa fa-bell';
      } else {
      content.icon = 'none';
      }
      content.url = '/';
      content.target = '_blank';

      $.notify(content,{
      type: state,
      placement: {
          from: placementFrom,
          align: placementAlign
      },
      time: 1000,
      delay: 2000,
      });
    }
</script>
@if (session('message'))
  <script>
    var mdtitle = {{ trans('auth.message') }};
    var mdcontent = {{ session('message') }};
    var mdstate = "info";
    notification(mdtitle, mdcontent, mdstate);
  </script>
@endif

@if (session('success'))
  <script>
    var mdtitle = {{ trans('auth.success') }};
    var mdcontent = {{ session('success') }};
    var mdstate = "success";
    notification(mdtitle, mdcontent, mdstate);
  </script>
@endif

@if (session('status'))
  @if(session()->get('status') == 'wrong')
    <script>
      var mdtitle = {{ trans('auth.someProblems') }};
      var mdcontent = {{ session('message') }};
      var mdstate = "warning";
      notification(mdtitle, mdcontent, mdstate);
    </script>
  @else
    <script>
      var mdtitle = {{ trans('auth.success') }};
      var mdcontent = {{ session('status') }};
      var mdstate = "success";
      notification(mdtitle, mdcontent, mdstate);
    </script>
  @endif
@endif

@if (session('notice'))
  <script>
    var mdtitle = {{ trans('auth.noticeTitle') }};
    var mdcontent = {{ session('notice') }};
    var mdstate = "warning";
    notification(mdtitle, mdcontent, mdstate);
  </script>
@endif

@if (session('anError'))
  <script>
    var mdtitle = {{ trans('auth.someProblems') }};
    var mdcontent = {{ session('anError') }};
    var mdstate = "warning";
    notification(mdtitle, mdcontent, mdstate);
  </script>
@endif

@if (session('error'))
  <script>
    var mdtitle = {{ trans('auth.someProblems') }};
    var mdcontent = {{ session('error') }};
    var mdstate = "warning";
    notification(mdtitle, mdcontent, mdstate);
  </script>
@endif

@if (count($errors) > 0)
  <div id="error_content" style="display:none">
    @foreach ($errors->all() as $error)
      {{ $error }} <br />
    @endforeach
  </div>
  <script>
    var mdtitle = {{ trans('auth.someProblems') }};
    var mdcontent = $("#error_content")[0].innerText;
    var mdstate = "danger";
    notification(mdtitle, mdcontent, mdstate);
  </script>
@endif