@component('admin.layouts.elements.body')
@slot('title') Páginas @endslot
@slot('description')  Inclusão de página @endslot

    <a href="{{ route('pages.index') }}" class="btn btn-xs btn-default"> Voltar </a>

    <form action="{{ route('pages.store') }}" class="form-horizontal" method="post">
        @include('admin.pages.form')
    </form>



@endcomponent