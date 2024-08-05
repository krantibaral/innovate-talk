

@section('index_content')
    <div class="table-responsive">
        <table class="table" id="data-table">
            <thead>
            <tr class="text-left text-capitalize">
                <th>id</th>
                <th>question</th>
                <th>answer</th>
                <th>action</th>
            </tr>
            </thead>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        $(function () {
            var table = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('faqs.index') }}", 
                columns: [
                    {data: 'id', name: 'DT_RowIndex'},
                    {data: 'question', name: 'question'}, 
                    {data: 'answer', name: 'answer'}, 
                    {data: 'action', name: 'action'},
                ],
            });
        });
    </script>
@endpush
