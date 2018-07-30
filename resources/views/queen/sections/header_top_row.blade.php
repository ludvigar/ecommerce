<!-- header-top-row -->
<div class="header-top-row">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('queen.partials.header_account')
            </div>

            @include('queen.partials.login_top_link')

            <div class="col-md-4">
                <div class="pull-right">
                    @include('queen.partials.header_language')
                    @include('queen.partials.header_currency')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /header-top-row -->