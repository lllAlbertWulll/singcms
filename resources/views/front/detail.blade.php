@extends('front.master')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9">

                <div class="news-detail">
                    <h1>{$vo.title}</h1>
                    {$vo.content}
                </div>

            </div>

        @include('front.right')
        <!-- end right-->
        </div>
    </div>
</section>
@endsection

@section('scripts')
    <script src="/js/jquery.js"></script>
@endsection