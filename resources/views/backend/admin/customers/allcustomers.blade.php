@extends('backend.admin.main')
@section('content')
            <div class="layout-px-spacing">

                <div class="row" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div align="right">
                                <a href="{{ route('vehicles.create') }}" class="btn btn-primary m-3">Add Vehicle</a>
                            </div>
                            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Vehicle</th>
                                        <th>Vehicle no. </th>
                                        <th>Modal</th>
                                        <th>Passenger & Luggage</th>
                                        <th>Price(/km)</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
	                                @foreach($data as $row)
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name">
                                                <a href="{{ route('vehicles.show', $row->id) }}">
                                                  <!-- <img src="{{ URL::to('/') }}/images/{{ $row->image }}" alt="avatar" style="width:12%;"> -->
                                                    <span>{{ $row->name }}</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>{{ $row->number }}</td>
                                        <td>{{ $row->modal }}</td>
                                        <td><b>{{ $row->passenger }}</b> Passengers<br><b>{{ $row->luggage }}</b> Luggage</td>
                                        <td>{{ $row->price }}</td>
                                        <td>{{ $row->status }}</td>
                                        <td class="text-center">
                                        <li><a href="{{ route('vehicles.edit', $row->id) }}" class="btn btn-primary mb-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                            <ul class="table-controls">
                                            <form id="delete-{{ $row->id }}" action="{{ route('vehicles.destroy',$row->id) }}" method="POST" style="display: none;">
                                                @method('DELETE')
                                                @csrf
                                                <td> <a  href="javascript:;" onclick="confirmDelete('{{ $row->id }}')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                            </form>
                                            </ul>
                                        </td>
                                    </tr>
	                                @endforeach
                                </tbody>
                                <!-- <thead>
                                    <tr>
                                        <th>Vehicle</th>
                                        <th>Vehicle no. </th>
                                        <th>Modal</th>
                                        <th>Passenger & Luggage</th>
                                        <th>Price(/km)</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead> -->
                            </table>
                        </div>
                    </div>

                </div>

            </div>
@endsection