@extends('layouts.app')

@section('content')
@section('page_title', 'Formulários de Interesse')
@section('title', 'Formulários — DoBraga Educacional')

<div class="container mt-5">
   <div class="row">
      <div class="col-md-12">
         <div class="white_shd full margin_bottom_30">
            <div class="full graph_head d-flex justify-content-between align-items-center">
               <div class="heading1 margin_0">
                  <h2>Formulários Recebidos</h2>
               </div>
               <a href="{{ route('formulario.export') }}" class="btn btn-success">
                  <i class="bi bi-download"></i> Exportar Excel
               </a>
            </div>

            <div class="table_section padding_infor_info">
               <div class="table-responsive-sm">
                  <table class="table table-hover">
                     <thead class="table-light">
                        <tr>
                           <th>Nome</th>
                           <th>Email</th>
                           <th>Gênero</th>
                           <th>Idade</th>
                           <th>Interesse</th>
                           <th>Contato</th>
                           <th>Responsável</th>
                           <th>Telefone do Responsável</th>
                           <th>Data</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($formularios as $f)
                        <tr>
                           <td>{{ $f->name }}</td>
                           <td>{{ $f->email }}</td>
                           <td>{{ $f->gender }}</td>
                           <td>{{ $f->age }}</td>
                           <td>{{ $f->interest }}</td>
                           <td>{{ $f->phone }}</td>
                           <td>
                              @if($f->age !== null && $f->age < 18)
                                 {{ $f->resp_name ?? 'Não informado' }}
                              @else
                                 -
                              @endif
                           </td>
                           <td>
                              @if($f->age !== null && $f->age < 18)
                                 {{ $f->resp_phone ?? 'Não informado' }}
                              @else
                                 -
                              @endif
                           </td>
                           <td>{{ $f->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>

         <div class="d-flex justify-content-center">
            {{ $formularios->links() }}
         </div>
      </div>
   </div>
</div>
@endsection
