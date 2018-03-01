@extends('admin.layouts.master')

@section('content')
            <div class="box-header">
                <h3 class="box-title">Role &amp; Permission Add</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <form action="http://168.235.96.79/role/save/permission" method="post">
                    <input type="hidden" name="_token" value="aJ3f3uLWasDuLqISnYyl2syaBDNpxT7gvde5GyQ9">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>Permission</th>
                            <th>admin</th>
                            <th>reseller</th>
                            <th>user</th>
                            <th>master_reseller</th>
                        </tr>
                        <tr>
                            <td><code>dashboard-show</code> <strong>Own Dashboard Show</strong></td>
                            <th><input type="checkbox" name="permission[1][1]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][1]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][1]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][1]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>dashboard-info-box</code> <strong>Own Dashboard Info Box Show</strong></td>
                            <th><input type="checkbox" name="permission[1][2]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][2]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][2]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][2]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>dashboard-chart-show</code> <strong>Own Dashboard Chart Show</strong></td>
                            <th><input type="checkbox" name="permission[1][3]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][3]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][3]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][3]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>dashboard-pending-masking-show</code> <strong>Own Dashboard Pending Masking Show</strong></td>
                            <th><input type="checkbox" name="permission[1][4]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][4]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][4]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][4]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>reseller_dashboard-show</code> <strong>Reseller Dashboard Show</strong></td>
                            <th><input type="checkbox" name="permission[1][5]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][5]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][5]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][5]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>reseller_dashboard-info-box</code> <strong>Reseller Dashboard Info Box Show</strong></td>
                            <th><input type="checkbox" name="permission[1][6]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][6]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][6]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][6]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>reseller_dashboard-chart-show</code> <strong>Reseller Dashboard Chart Show</strong></td>
                            <th><input type="checkbox" name="permission[1][7]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][7]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][7]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][7]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>reseller_dashboard-pending-masking-show</code> <strong>Reseller Dashboard Pending Masking Show</strong></td>
                            <th><input type="checkbox" name="permission[1][8]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][8]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][8]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][8]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>reseller_dashboard-own-pending-masking-show</code> <strong>Reseller Dashboard Own Pending Masking Show</strong></td>
                            <th><input type="checkbox" name="permission[1][9]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][9]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][9]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][9]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>admin_dashboard-show</code> <strong>Admin Dashboard Show</strong></td>
                            <th><input type="checkbox" name="permission[1][10]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][10]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][10]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][10]" value="1" <="" th="">
                            </th></tr>
                        <tr><td><code>admin_dashboard-info-box</code> <strong>Admin Dashboard Info Box Show</strong></td>
                            <th><input type="checkbox" name="permission[1][11]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][11]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][11]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][11]" value="1" <="" th="">
                            </th></tr>
                        <tr><td><code>admin_dashboard-chart-show</code> <strong>Admin Dashboard Chart Show</strong></td>
                            <th><input type="checkbox" name="permission[1][12]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][12]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][12]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][12]" value="1" <="" th="">
                            </th></tr>
                        <tr><td><code>admin_dashboard-pending-masking-show</code> <strong>Admin Dashboard Pending Masking Show</strong></td>
                            <th><input type="checkbox" name="permission[1][13]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][13]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][13]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][13]" value="1" <="" th="">
                            </th></tr>
                        <tr><td><code>message-show</code> <strong>Message Show</strong></td>
                            <th><input type="checkbox" name="permission[1][14]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][14]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][14]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][14]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>phonebook-show</code> <strong>Phone Book Show</strong></td>
                            <th><input type="checkbox" name="permission[1][15]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][15]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][15]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][15]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>reports-show</code> <strong>Report Show</strong></td>
                            <th><input type="checkbox" name="permission[1][16]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][16]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][16]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][16]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>masking_transaction_report_show</code> <strong>Masking Transaction Report Show</strong></td>
                            <th><input type="checkbox" name="permission[1][17]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][17]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][17]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][17]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>non_masking_transaction_report_show</code> <strong>Non Masking Transaction Report Show</strong></td>
                            <th><input type="checkbox" name="permission[1][18]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][18]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][18]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][18]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>all_sms_report_show</code> <strong>All SMS Report Show</strong></td>
                            <th><input type="checkbox" name="permission[1][19]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][19]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][19]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][19]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>routing_wise_total_sms_report_show</code> <strong>Routing Wise Total SMS Report Show</strong></td>
                            <th><input type="checkbox" name="permission[1][20]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][20]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][20]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][20]" value="1" <="" th="">
                            </th></tr>
                        <tr><td><code>user_usage_report_show</code> <strong>User Usage Report Show</strong></td>
                            <th><input type="checkbox" name="permission[1][21]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][21]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][21]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][21]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>user_show</code> <strong>User Show</strong></td>
                            <th><input type="checkbox" name="permission[1][22]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][22]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][22]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][22]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>reseller_show</code> <strong>Reseller Show</strong></td>
                            <th><input type="checkbox" name="permission[1][23]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][23]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][23]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][23]" value="1" checked="" <="" th="">
                            </th></tr>
                        <tr><td><code>admin_show</code> <strong>Admin Show</strong></td>
                            <th><input type="checkbox" name="permission[1][24]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][24]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][24]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][24]" value="1" <="" th="">
                            </th></tr>
                        <tr><td><code>all_admin_show</code> <strong>All Admin Show</strong></td>
                            <th><input type="checkbox" name="permission[1][25]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][25]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][25]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][25]" value="1" <="" th="">
                            </th></tr>
                        <tr><td><code>all_master_reseller_show</code> <strong>All Master Reseller Show</strong></td>
                            <th><input type="checkbox" name="permission[1][26]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][26]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][26]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][26]" value="1" <="" th="">
                            </th></tr>
                        <tr><td><code>all_reseller_show</code> <strong>All Reseller Show</strong></td>
                            <th><input type="checkbox" name="permission[1][27]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][27]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][27]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][27]" value="1" <="" th="">
                            </th></tr>
                        <tr><td><code>setting_show</code> <strong>Setting Show</strong></td>
                            <th><input type="checkbox" name="permission[1][28]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][28]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][28]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][28]" value="1" <="" th="">
                            </th></tr>
                        <tr><td><code>sms_routing_show</code> <strong>SMS Routing Show</strong></td>
                            <th><input type="checkbox" name="permission[1][29]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][29]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][29]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][29]" value="1" <="" th="">
                            </th></tr>
                        <tr><td><code>all_roles_show</code> <strong>All Role Show</strong></td>
                            <th><input type="checkbox" name="permission[1][30]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][30]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][30]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][30]" value="1" <="" th="">
                            </th></tr>
                        <tr><td><code>all_permission_show</code> <strong>All Permission Show</strong></td>
                            <th><input type="checkbox" name="permission[1][31]" value="1" checked="" <="" th="">
                            </th><th><input type="checkbox" name="permission[2][31]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[3][31]" value="1" <="" th="">
                            </th><th><input type="checkbox" name="permission[4][31]" value="1" <="" th="">
                            </th></tr>
                        </tbody>
                    </table>
                </form></div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <button type="submit" class="btn btn-default pull-right">Add Role &amp; Permission</button>
            </div>
@endsection