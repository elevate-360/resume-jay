@extends('layout')

@section('activeMail')
    active
@endsection

@section('pageTitle')
    Mails Sent
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Transection details</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover example2" id="">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Subject</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>{{ ++$count }}</td>
                                    <td>{{ $item['mailToName'] }}</td>
                                    <td>{{ $item['mailToEmail'] }}</td>
                                    <td>{{ $item['mailSubject'] }}</td>
                                    <td><span class="badge bg-info">{{ date("d M, Y", strtotime($item['mailDate'])) }}</span></td>
                                </tr>
                                <tr class="expandable-body d-none">
                                    <td colspan="5">
                                        <div>
                                            @php
                                                $customData = [
                                                    'subject' => $item["mailSubject"],
                                                    'message' => $item["mailContent"],
                                                    'name' => $item["mailToName"],
                                                    'address1' => $personalData['address-apt'],
                                                    'address2' => $personalData['address-area'] . ', ' . $personalData['address-city'],
                                                    'address3' => $personalData['address-state'] . ', ' . $personalData['address-country-short'] . ' - ' . $personalData['address-pin'] . '.',
                                                    'phone' => $personalData['phone1'],
                                                    'linkedinLink' => $links['Linkedin'],
                                                    'twitterLink' => $links['Twitter'],
                                                    'whatsappLink' => $links['Whatsapp'],
                                                    'instagramLink' => $links['Instagram'],
                                                    'email' => $personalData['email'],
                                                ];
                                            @endphp
                                            <iframe src="/mail?data={{ json_encode($customData) }}" frameborder="0" width="100%" height="600vh"></iframe>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('tblScript')
    <script>
        $(function() {
            $(".example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('.example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
