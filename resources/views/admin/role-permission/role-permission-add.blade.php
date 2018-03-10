@extends('admin.layouts.master')

@section('content')
            <div class="box-header">
                <h3 class="box-title">Role & Permission Add</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <form action="/role/save/permission" method="post">

            <div class="table-responsive">

                    <table class="table">
                        <tbody>
                        <tr>
                            <td><strong>Permission Slug</strong></td>
                            <td><strong>Permission Name</strong></td>

                            @foreach($roles as $role)
                                <td align="center"><strong>{{ $role->display_name }}</strong></td>
                            @endforeach
                        </tr>

                        @foreach($permissions as $permission)

                        <tr>
                            <td>
                                <code>{{ $permission->name }}</code>
                            </td>
                            <td>
                                {{ $permission->display_name }}
                            </td>
                            <td align="center">
                                <input type="checkbox" class="flat" name="" value="">
                            </td>
                            <td align="center">
                                <input type="checkbox" class="flat" name="" value="">
                            </td>
                            <td align="center">
                                <input type="checkbox" class="flat" name="" value="">
                            </td>
                            <td align="center">
                                <input type="checkbox" class="flat" name="" value="">
                            </td>
                        </tr>

                        @endforeach

                        </tbody>
                    </table>
            </div>

                </form>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <button type="submit" class="btn btn-success pull-right">Add Role & Permission</button>
            </div>
@endsection