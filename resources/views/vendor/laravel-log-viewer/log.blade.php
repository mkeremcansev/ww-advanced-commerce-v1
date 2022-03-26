@extends('panel.layouts.extends')
@section('title')
    @lang('words.logs')
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="responsive-datatable">
                    <div class="row justify-content-center">
                      <div class="col-lg-3 mb-2">
                        <div class="list-group">
                          @foreach($folders as $folder)
                            <div class="list-group-item">
                              {{ \Rap2hpoutre\LaravelLogViewer\LaravelLogViewer::DirectoryTreeStructure($storage_path, $structure) }}
                            </div>
                          @endforeach
                          @foreach($files as $file)
                            <a href="?l={{ \Illuminate\Support\Facades\Crypt::encrypt($file) }}" class="list-group-item @if ($current_file == $file) active @endif">
                              {{$file}}
                            </a>
                          @endforeach
                        </div>
                      </div>
                        <div class="col-lg-9">
                            @if ($m = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        {{ $m }}
                                    </div>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">@lang('words.logs')</h4>
                                    <div class="btn-group">
                                      <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('words.actions')</button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        @if($current_file)
                                          <a href="?dl={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}" class="dropdown-item text-success">@lang('words.download')</a>
                                          <a href="?clean={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}" class="dropdown-item text-primary">@lang('words.file_clear')</a>
                                          <a href="?del={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}" class="dropdown-item text-warning">@lang('words.delete')</a>
                                          @if(count($files) > 1)
                                            <a href="?delall=true{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}" class="dropdown-item text-danger">@lang('words.all_files_delete')</a>
                                          @endif
                                        @endif
                                      </div>
                                  </div>
                                </div>
                                <div class="card-datatable">
                                  <table class="dt-responsive table">
                                    <thead>
                                      <tr>
                                        <th></th>
                                          <th>@lang('words.status')</th>
                                          <th>@lang('words.date')</th>
                                          <th>@lang('words.content')</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($logs as $key => $log)
                                        <tr data-display="stack{{ $key }}">
                                          <td></td>
                                          <td class="nowrap text-{{ $log['level_class'] }}">
                                            {{$log['level']}}
                                          </td>
                                          <td class="date">{{ $log['date'] }}</td>
                                          <td class="text">
                                            {{ $log['text'] }}
                                          </td>
                                        </tr>
                                      @endforeach
                                      </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

