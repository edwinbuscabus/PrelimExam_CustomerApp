<div>
    <table class="table table-striped">
        <thead class="table table-striped bg-secondary">
            <tr>
                <th>ID No</th>
                <th>Customer Name</th>
                <th>Email Address</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->contact_number }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>
                        <a href="{{ url('edit', ['customer' => $customer->id]) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['customer' => $customer->id]) }}" class="btn btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>