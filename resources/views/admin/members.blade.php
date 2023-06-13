<x-admin>
    <section class="mt-6">
        <h2 class="mb-3">
            All Team Members !
        </h2>
        <table id="customers">
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            @foreach($members as $member)

            <tr>
                <td> {{$member->name}} </td>
                <td> {{$member->title}} </td>
                <td> {{$member->email}} </td>
                <td>{{$member->phone}}</td>
                <td>{{$member->address}}</td>
                <td>
                    <a href="edit?id={{$member->id}}">Edit</a> |
                    <a href="delete?id={{$member->id}}">Delete</a>
                </td>
            </tr>
            @endforeach

        </table>
    </section>

</x-admin>