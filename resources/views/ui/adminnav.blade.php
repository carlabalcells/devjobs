<a class="text-white text-sm uppercase bold p-3 {{Request::is('vacantes') ? 'bg-teal-500' : ''}}"  href="{{ route('vacante.index') }}">Vacantes</a>
<a class="text-white text-sm uppercase bold p-3 {{Request::is('vacantes/create') ? 'bg-teal-500' : ''}}" href="{{ route('vacante.create') }}">Nueva Vacante</a>