@extends('layouts.main-layout')

@section('content')
     <main>
          <ul>
               @foreach ($employees as $employee)
               <li>
                         <details> 
                              <summary>Employee {{$employee -> id}}:  {{ $employee -> firstname}} {{$employee -> lastname }} </summary>                              
                              <p> Location: {{ $employee -> location -> street }}, {{$employee -> location -> state }} </p>
                              @foreach ($employee -> tasks as $task)
                              <p>Task {{$task -> id}}: {{ $task -> name }}</p>
                              @endforeach
                         </details>
               </li>
               @endforeach
          </ul>
     </main>
@endsection