<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    	@yield('htmlheader_title')
        @yield('contentheader_title')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">@yield('htmlheader_title')</li>
    </ol>
</section>